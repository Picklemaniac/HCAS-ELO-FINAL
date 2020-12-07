<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\trainingcontroller;
use \App\Http\Controllers\oefeningcontroller;
use \App\Http\Controllers\admincontroller;

/* Autorisatie & Index */

Route::get('/', function () {
    return view('auth.login');
});

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

/*--------*/

/* Admin Dashboard*/

Route::get('/AdminDashboard', [admincontroller::class, 'index'])->middleware('auth');

/*--------*/


/* overig */

Route::get('/PopupKeuze', function () {
    return view('popup');
})->middleware('auth');

/*--------*/
