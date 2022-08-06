<?php

use Illuminate\Support\Facades\Route;

/**
 * Routes Partners.
 */
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['permission']], function () {
        Route::get('partner/client/month/fetch-pair', 'MonthController@fetchPair')->middleware(['permission:partner']);
        Route::get('partner/client/year/fetch-pair', 'YearController@fetchPair')->middleware(['permission:partner']);
        Route::get('partner/client/convert/{id}/{type}', 'ClientController@convertClient')->middleware(['permission:partner']);
        Route::resource('partner/client', 'ClientController');
        Route::resource('annotation', 'AnnotationController');
        Route::resource('partner', 'PartnerController');
    });
});


