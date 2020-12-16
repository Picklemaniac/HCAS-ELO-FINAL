<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class usercontroller extends Controller
{
    public function MakeTrainer($id) {

        $userID = User::where('id', $id)->first();

        $userID->IsTrainer = !$userID->IsTrainer;

        $userID->save();

        return redirect('/AdminDashboard');

    }

    public function MakeAuthor($id) {

        $userID = User::where('id', $id)->first();

        $userID->IsAuthor = !$userID->IsAuthor;

        $userID->save();

        return redirect('/AdminDashboard');
    }

    public function MakeAdmin($id) {

        $userID = User::where('id', $id)->first();

        $userID->IsAdmin = !$userID->IsAdmin;

        $userID->save();

        return redirect('/AdminDashboard');
    }
}
