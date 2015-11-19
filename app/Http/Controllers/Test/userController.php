<?php

namespace App\Http\Controllers\Test;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showProfile($id)
    {
return "test2";      
//return view('welcome');
    }
}