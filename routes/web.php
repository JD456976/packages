<?php

use App\Http\Controllers\UserController;
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

/*
 * Home Routes
 */

Route::get('/', [
    'as' => 'home',
    'uses' => 'App\Http\Controllers\HomeController@index',
]);

Route::post('search', [
    'as' => 'video.search',
    'uses' => 'App\Http\Controllers\HomeController@search',
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'App\Http\Controllers\HomeController@showContact',
]);

Route::get('about', [
    'as' => 'about',
    'uses' => 'App\Http\Controllers\HomeController@about',
]);

Route::post('contact', [
    'as' => 'contact.send',
    'uses' => 'App\Http\Controllers\HomeController@sendContact',
]);

Route::resource('user', UserController::class);
Route::get('user/videos/{id}', [
    'as' => 'user.videos',
    'uses' => 'App\Http\Controllers\UserController@videos',
]);

/*
 * Video Routes
 */


Route::resource('video', App\Http\Controllers\VideoController::class);
Route::get('video/tag/{tag}', [
    'as' => 'video.tag',
    'uses' => 'App\Http\Controllers\VideoController@tag',]);
Route::get('search/{query}', [
    'as' => 'search',
    'uses' => 'App\Http\Controllers\VideoController@search',]);
Route::post('comment/{comment}', [
    'as' => 'comment',
    'uses' => 'App\Http\Controllers\VideoController@comment',])->middleware(['auth']);

/*
 * Admin Routes
 */

Route::middleware(['admin', 'auth'])->group(function() {
    Route::get('admin/users', [
        'as'=> 'admin.users',
        'uses' => 'App\Http\Controllers\AdminController@users',
    ]);
    Route::get('admin/videos', [
        'as'=> 'admin.videos',
        'uses' => 'App\Http\Controllers\AdminController@videos',
    ]);
});
