<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\trainingcontroller;
use \App\Http\Controllers\oefeningcontroller;
use \App\Http\Controllers\admincontroller;
use \App\Http\Controllers\usercontroller;

/* Autorisatie & Index */

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/FirstTimeLogin', [usercontroller::class, 'PasswordPage'])->middleware('auth');

Route::post('/ChangePassword{id}', [usercontroller::class, 'ChangePassword'])->middleware('auth');


Route::get('/registreren', [admincontroller::class, 'register'])->middleware('auth');

Route::post('/newUser', [admincontroller::class, 'newUser'])->middleware('auth');

Route::get('/resetPassword{id}', [usercontroller::class, 'resetPassword'])->middleware('auth');

Route::get('/deleteUser{id}', [usercontroller::class, 'deleteUser'])->middleware('auth');


/*--------*/

/* User Dashboard*/

Route::get('/userDashboard', [trainingcontroller::class, 'index'])->middleware('auth');

Route::get('/detailsOefeningen{id}', [oefeningcontroller::class, 'show'])->middleware('auth');

/*--------*/


/* Auteur Dahboard*/

Route::get('/AuteurDashboard', [oefeningcontroller::class, 'showAllToAuthor'])->middleware('auth')->name('AuteurDashboard');

Route::get('/NieuweOefening', function () {
    return view('author.NieuweOefening');
})->middleware('auth');

Route::get('/EditOefening{id}', [oefeningcontroller::class, 'edit'])->middleware('auth');

Route::post('/EditOefening{id}', [oefeningcontroller::class, 'update'])->middleware('auth');

Route::post('/NieuweOefening', [oefeningcontroller::class, 'create'])->middleware('auth');

Route::get('/VerwijderOefening{id}', [oefeningcontroller::class, 'destroy']);

/*--------*/

/* Trainer Dashboard */

Route::get('/trainerDashboard', [oefeningcontroller::class, 'showAllToTrainer'])->middleware('auth');

Route::get('/nieuweTraining', [trainingcontroller::class, 'create'])->middleware('auth');

Route::get('/verwijderTraining{id}', [trainingcontroller::class, 'destroy'])->middleware('auth');

/*--------*/

/* Admin Dashboard*/

Route::get('/AdminDashboard', [admincontroller::class, 'index'])->middleware('auth');
Route::get('/MakeAdmin{id}', [usercontroller::class, 'MakeAdmin'])->middleware('auth');
Route::get('/MakeAuthor{id}', [usercontroller::class, 'MakeAuthor'])->middleware('auth');
Route::get('/MakeTrainer{id}', [usercontroller::class, 'MakeTrainer'])->middleware('auth');

/*--------*/


/* overig */

Route::get('/PopupKeuze', function () {
    return view('popup');
})->middleware('auth');

/*--------*/
