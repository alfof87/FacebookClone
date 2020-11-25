<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/index', 'HomeController@index')->name('home');

// Route::get('/show/{id}', 'ProfileController@show') -> name('show');
Route::get('/show', function(){
  return view('show');
});
