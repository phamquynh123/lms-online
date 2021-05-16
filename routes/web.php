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

Auth::routes();

// register Course
Route::get('/registercustom', 'Auth\RegisterController@registercustom')->name('registercustom');
Route::post('/registerSubmit', 'Auth\RegisterController@registerSubmit')->name('registerSubmit');

Route::group(['middleware' => 'locale'], function() { 
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')
        ->name('user.change-language');
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/', function () {
            return view('layouts.layout');
        });
        Route::get('/home', 'HomeController@index')->name('home');
    });
});
