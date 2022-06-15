<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//public routes
Route::post(
    '/register',
    [ AuthController::class, 'register']
)->name('register');

Route::get(
    '/sendsms',
    [ NotificationController::class, 'SendSMS' ]
)->name('sendsms')->middleware('verified');

Auth::routes(['verify' => true]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
