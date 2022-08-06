<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    // Route::get('contains/{table}/{field}/{value}', 'ContainsController@contains');
    // Route::get('count/{module}/{table}', 'CountController@count');
    Route::get('state', 'StateController@index');
    Route::get('state/city/{state}', 'StateController@getCitiesByState');
});
