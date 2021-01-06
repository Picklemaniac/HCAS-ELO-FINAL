<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

class admincontroller extends RegisteredUserController
{
    public function index()
    {
        $users = User::sortable()->simplePaginate(10);

        return view('Admin\AdminDashboard', ['users' => $users]);
    }

    public function register() {

        $teams = team::all();
        return view('auth.register', ['teams' => $teams]);
    }

    public function newUser(Request $request) {
        User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make('hcastest'),
            'lidnummer' => $request['lidnummer'],
            'teamnummer' => $request['teamnummer'],
            'voornaam' => $request['voornaam'],
            'tussenvoegsel' => $request['tussenvoegsel'],
            'achternaam' => $request['achternaam'],
        ]);

        return redirect('/AdminDashboard');

    }
}
