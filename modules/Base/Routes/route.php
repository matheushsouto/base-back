<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('state', 'StateController@index');
    Route::get('state/city/{state}', 'StateController@getCitiesByState');
});
