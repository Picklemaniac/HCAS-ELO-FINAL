<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function index()
    {
        $users = User::sortable()->simplePaginate(10);

        return view('Admin\AdminDashboard', ['users' => $users]);
    }
}
