<?php

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

Route::domain('{account}.testerp.localhost')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Registration Routes...
    Route::get('login', 'Auth\LoginController@show')->name('login');
    Route::post('login', 'Auth\LoginController@register');

    // Catch All Route
    Route::any('{any}', function () {
        abort(404);
    })->where('any', '.*');
});

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
