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



Route::GET('/', 'PagesController@getHome');

// Main chat app
Route::GET('/chat', 'ChatController@index')->middleware('logged');

// User login handling
Route::GET('/login', 'PagesController@getLogin')->middleware('guest');
Route::POST('/login', 'ChatController@login')->middleware('guest');
Route::GET('/logout', 'ChatController@logout')->middleware('logged');
// User register handling
Route::GET('/register', 'PagesController@getRegister')->middleware('guest');
Route::POST('/register', 'ChatController@register')->middleware('guest');