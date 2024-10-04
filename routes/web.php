<?php

use Illuminate\Support\Facades\Route;


Route::view('/','index')->name('index');
Route::view('/acerca','acerca')->name('acerca');
Route::view('/servicios','servicios')->name('servicios');
Route::view('/contacto','contacto')->name('contacto');



/*
Route::get('/', function () {
    return view('welcome');
});
*/
