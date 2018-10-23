<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users','UserController');
Route::middleware(['auth'])->group(function (){
    //aqui pongo mis rutas etc
});
