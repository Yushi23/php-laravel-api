<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group(['namespace' => 'App\Http\Controllers\User'], function () {
    Route::post('/users', StoreController::class);
});

Route::group(['namespace' => 'App\Http\Controllers\Transaction'], function () {
    Route::get('/transactions', IndexController::class);
    Route::post('/transactions', StoreController::class);
    Route::delete('/transactions', DestroyController::class);
});

