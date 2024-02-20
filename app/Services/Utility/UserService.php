<?php

namespace App\Services\Utility;

use App\Models\User;
use App\Http\Resources\UserResource;

class UserService
{
    public function lists($request){
        $data = UserResource::collection(
            User::query()
            ->with('profile')
            ->when($request->keyword, function ($query, $keyword) {
                $query->whereHas('profile',function ($query) use ($keyword) {
                    $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', "%{$keyword}%")
                    ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', "%{$keyword}%");
                })->orWhere(function ($query) use ($keyword) {
                    $query->where('username', 'LIKE', "%{$keyword}%")->whereNotIn('role',['Scholar','Administrator']);
                });
            })
            // ->where('role','Staff')
            ->paginate($request->count)
        );
        return $data;
    }

    public function save($request){
        $user = User::create(array_merge($request->all(), ['password' => bcrypt(rand(1000000000,9999999999)), 'role' => 'Staff']));
        $user->profile()->create($request->all());

        return [
            'data' => $user,
            'message' => 'User creation was successful!', 
            'info' => "You've successfully created an account for the user."
        ];
    }

    public function update($request){
        $user = User::findOrFail($request->id)->update($request->all());
        $updatedUser = User::with('profile')->findOrFail($request->id);
        return [
            'data' => new UserResource($updatedUser),
            'message' => 'User update was successful!', 
            'info' => "You've successfully updated the selected user."
        ];
    }
}
