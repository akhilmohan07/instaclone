<?php

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/email', function () {
//     return  new App\Mail\WelcomeMail();
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/profile', 'App\Http\Controllers\ProfileController');
Route::resource('/p', 'App\Http\Controllers\PostController');
Route::post('follow/{user}', 'App\Http\Controllers\FollowController@store');