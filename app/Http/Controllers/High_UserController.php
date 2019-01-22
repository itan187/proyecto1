<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class High_UserController extends Controller
{
    //
    public function users(){
        return view('user/high_user');
    }


}
