<?php

use Illuminate\Support\Facades\Route;

/**
 * Routes Users.
 */
// Route::get('user/battery', 'UserController@getLevelBattery')->middleware(['auth', 'permission:user']);
  Route::post('user/theme', 'UserController@updateTheme')->middleware(['auth', 'permission:user']);
// Route::post('user/battery/{client}', 'UserController@levelBattery');
// Route::post('user/qr-code/logout-session/{client}', 'UserController@logoutSession');
// Route::post('user/qr-code/already/{client}', 'UserController@qrCodeAlready');
// Route::post('user/qr-code/callback/{client}', 'UserController@callbackQrCode');
// Route::post('user/qr-code/destroy/{client}', 'UserController@destroyQrCode');
// Route::post('user/qr-code/{client}', 'UserController@qrCodeRefresh');
// Route::get('user/qr-code', 'UserController@getQrCode')->middleware(['auth']);

Route::group(['middleware' => ['auth']], function () {
    Route::put('user/password-temporary', 'UserController@updatePasswordTemporary');
    Route::put('user/password', 'UserController@updatePassword')->middleware(['permission:user']);
    Route::post('user/profile', 'UserController@updateProfile')->middleware(['permission:user']);
    Route::get('user/login/{login}', 'UserController@login')->middleware(['permission:user']);
    Route::get('user/module/permission', 'ModuleController@getModulesByPermission')->middleware(['permission:user']);
    Route::get('user/module/{user}', 'ModuleController@getModulesByUser')->middleware(['permission:user']);
    // Route::get('user/categories/{user}', 'UserHasUserCategoryController@show')->middleware(['permission:user']);
    Route::post('user/module-user', 'UserController@createOrUpdateModuleUser')->middleware(['permission:user']);
    Route::post('user/module-all-user', 'UserController@allUpdateModuleUser')->middleware(['permission:user']);
    Route::post('user/module-all-menu-user', 'UserController@allUpdateModuleMenuUser')->middleware(['permission:user']);
    // Route::post('user/categories', 'UserHasUserCategoryController@store')->middleware(['permission:user']);
    // Route::post('stories/post','StoryController@postStory')->middleware(['permission:stories']);
    // Route::post('stories/expire','StoryController@expireStory')->middleware(['permission:stories']);

    Route::group(['middleware' => ['permission']], function () {
        // Route::resource('user/category', 'UserCategoryController');
        // Route::resource('user/tutorial', 'TutorialController');
        // Route::resource('user/task', 'TaskController');
        // Route::resource('user/task-types', 'TaskTypeController');
        Route::resource('user', 'UserController');
        // Route::resource('stories', 'StoryController');
    });
});
