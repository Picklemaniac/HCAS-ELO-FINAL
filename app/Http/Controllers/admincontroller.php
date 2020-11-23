<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Admin\AdminDashboard', ['users' => $users]);
    }
}
