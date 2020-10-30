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

Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
Route::get('home', 'HomeController@index')->name('home');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('order', 'OrderController');
    Route::get('profile', 'ProfileController@edit')->name('profile');
    Route::patch('profile', 'ProfileController@update')->name('profile.update');
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::resource('order', 'OrderController');
 
});
