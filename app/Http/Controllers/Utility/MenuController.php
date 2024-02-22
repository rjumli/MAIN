<?php

namespace App\Http\Controllers\Utility;

use App\Models\ListMenu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\HandlesTransaction;

class MenuController extends Controller
{
    use HandlesTransaction;

    public function index(){

    }

    public function store(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            $count = ListMenu::where('is_mother',1)->count() + 1;
            $menu = ListMenu::create(array_merge($request->all(),['order' => $count]));
            return [
                'data' => $menu,
                'message' => 'Menu creation was successful!', 
                'info' => "You've successfully created a menu."
            ];
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }
}
