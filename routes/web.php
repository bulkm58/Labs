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

// Welcome Page

Route::get('/','WelcomeController@index')->name('welcome');
Route::get('/services','ServiceController@index')->name('services');
Route::get('/contact','ContactController@index')->name('contact');
Route::get('/blog','BlogController@index')->name('blog');

Route::post('/save','FormController@store')->name('save');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
