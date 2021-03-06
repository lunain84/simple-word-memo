<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
Route::get('/login', [AuthenticationController::class, 'login']);
Route::get('/login/callback', [AuthenticationController::class, 'callback']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', HomeController::class);

    Route::get('/logout', [AuthenticationController::class, 'logout']);

    Route::get('profile', ProfileController::class);
});
