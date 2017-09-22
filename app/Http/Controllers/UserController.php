<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }

    public function reset()
    {
        return view('user.reset');
    }
}
