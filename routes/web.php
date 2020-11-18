<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\trainingcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/userDashboard', [trainingcontroller::class, 'index'])->middleware('auth');

Route::get('/detailsOefeningen', function () {
    return view('DetailsOefeningen');
})->middleware('auth');

Route::get('/NieuweOefening', function () {
    return view('author.NieuweOefening');
})->middleware('auth');

Route::get('/trainerDashboard', function () {
    return view('TrainerDashboard');
})->middleware('auth');

Route::get('/detailsTrainingen', function () {
    return view('DetailsTraining');
})->middleware('auth');

Route::get('/AdminDashboard', function () {
    return view('admin.AdminDashboard');
})->middleware('auth');

Route::get('/AuteurDashboard', function () {
    return view('author.AuthorDashboard');
})->middleware('auth');

Route::get('/PopupKeuze', function () {
    return view('popup');
})->middleware('auth');
