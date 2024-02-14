<?php

namespace App\Http\Controllers\Utility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $options = $request->option;
        switch($options){
            case 'lists':
            //    return $this->backup->lists();
            break;
            default : 
            return inertia('Modules/Utility/Users/Index');
        }
    }
}
