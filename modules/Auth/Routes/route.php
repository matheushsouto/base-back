<?php

use Illuminate\Support\Facades\Route;

/**
 * Routes for user authentication.
 *
 */
Route::post('/login', 'AuthController@login')->name('login')->middleware("throttle:10,2");;
Route::post('/refresh', 'AuthController@refresh');
Route::get('/partner/me', 'AuthController@me');
Route::post('/logout', 'AuthController@logout');
Route::post('/recover-password', 'AuthController@recoverPassword');
