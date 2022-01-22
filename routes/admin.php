<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use Illuminate\Support\Facades\Route;

/*
* Admin Routes
*/

Route::middleware(['admin', 'auth'])->group(function() {
    Route::get('dashboard', [
    'as'=> 'dashboard',
    'uses' => 'App\Http\Controllers\Admin\AdminController@dashboard',
    ]);

    Route::resource('users', UserController::class);
    Route::get('users/ban/{id}', [
        'as' => 'ban.user',
        'uses' => 'App\Http\Controllers\Admin\UserController@ban',
    ]);
    Route::get('users/unban/{id}', [
        'as' => 'unban.user',
        'uses' => 'App\Http\Controllers\Admin\UserController@unBan',
    ]);
    Route::get('users/password/{id}', [
        'as' => 'reset.password',
        'uses' => 'App\Http\Controllers\Admin\UserController@resetPasswordLink',
    ]);

    Route::resource('videos',VideoController::class);
    Route::get('videos/feature/{id}', [
        'as' => 'videos.feature',
        'uses' => 'App\Http\Controllers\Admin\VideoController@feature',
    ]);
    Route::get('videos/unfeature/{id}', [
        'as' => 'videos.unfeature',
        'uses' => 'App\Http\Controllers\Admin\VideoController@unfeature',
    ]);
    Route::get('videos/unapprove/{id}', [
        'as' => 'videos.unapprove',
        'uses' => 'App\Http\Controllers\Admin\VideoController@unapprove',
    ]);
    Route::get('videos/approve/{id}', [
        'as' => 'videos.approve',
        'uses' => 'App\Http\Controllers\Admin\VideoController@approve',
    ]);
});
