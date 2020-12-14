<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\apiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('oefeningen', [apiController::class, 'oefeningIndex'] );

Route::get('oefeningenDomein', [apiController::class, 'oefeningDomein'] );

Route::get('trainingen', [apiController::class, 'trainingIndex'] );

Route::get('trainingenTeam', [apiController::class, 'trainingTeam'] );

