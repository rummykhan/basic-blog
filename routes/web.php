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
*/

// Home route
// Login route
// User panel

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', 'LoginController@index')->name('user-login');
Route::post('/login', 'LoginController@doLogin')->name('user-do-login');

Route::get('/register', 'RegisterController@index')->name('user-register');
Route::post('/register', 'RegisterController@doRegister')->name('user-do-register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user/home', 'UserController@index')->name('user-home');

    Route::post('/user/logout', 'UserController@logout')->name('user-logout');
});

