<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {

        $trainer = Auth::user()->IsTrainer;
        $author = Auth::user()->IsAuthor;
        $admin = Auth::user()->IsAdmin;

        if ($admin == 1) {
            return redirect('AdminDashboard');
        }
        else if ($trainer == 1 && $author == 1) {
            return redirect('PopupKeuze');
        }
        else if ($trainer == 1) {
            return redirect('trainerDashboard');
        }
        else if ($author == 1) {
            return redirect('AuteurDashboard');
        }
        else {
            return redirect('userDashboard');
        }
    }
}
