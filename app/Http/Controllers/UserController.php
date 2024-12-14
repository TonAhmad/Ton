<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['Alice', 'Bob', 'Charlie'];
        return view('users.index', compact('users'));
    }
}
