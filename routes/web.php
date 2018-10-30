<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('vehicular_controls','VehicularControlController');
Route::resource('users','UserController');
Route::resource('kamis','KamiController');
Route::middleware(['auth'])->group(function (){
    //aqui pongo mis rutas etc
});
