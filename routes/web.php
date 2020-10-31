<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/userDashboard', function () {
    return view('userDashboard');
})->middleware('auth');

Route::get('/detailsOefeningen', function () {
    return view('DetailsOefeningen');
})->middleware('auth');

Route::get('/NieuweOefening', function () {
    return view('author.NieuweOefening');
})->middleware('auth');

Route::get('/trainerDashboard', function () {
    return view('TrainerDashboard');
})->middleware('auth');
