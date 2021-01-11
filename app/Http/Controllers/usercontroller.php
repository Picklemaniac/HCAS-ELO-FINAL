<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

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

    public function PasswordPage() {
        return view('auth.passwordconfirm');
    }

    public function ChangePassword(Request $request, $id) {
        $userID = User::where('id', $id)->first();


        $userID->password = Hash::make($request->password);
        $userID->FirstTimeLogin = 0;

        $userID->save();

        return redirect('/userDashboard');

    }
}
