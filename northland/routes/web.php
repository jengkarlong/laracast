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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/menu', 'MenuController@index');

Route::get('/event', 'EventController@index');

Route::get('/event/create', 'EventController@create');

Route::post('/event', 'EventController@store');


Route::get('/contact', function(){
    return view('contact');
});

Route::get('/about', function(){
    return view('about');
});
