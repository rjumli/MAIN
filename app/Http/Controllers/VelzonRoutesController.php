<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class VelzonRoutesController extends Controller
{
    public function dashboard(){
        return inertia('Modules/Home/Index');
    }

}
