<?php

namespace App\Http\Controllers\Utility;

use App\Models\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Utility\LogAuthenticationResource;

class UserController extends Controller
{
    public function index(Request $request){
        $options = $request->option;
        switch($options){
            case 'logs':
               return $this->logs($request);
            break;
            default : 
            return inertia('Modules/Utility/Users/Index');
        }
    }

    public function logs($request){
        $id = \Auth::user()->id;
        $logs = Log::where('authenticatable_type', 'App\Models\User')
        ->where('authenticatable_id', $id)
        ->orderBy('id','DESC')
        ->paginate($request->count);
        return LogAuthenticationResource::collection($logs);
    }
}
