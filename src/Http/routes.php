<?php
use \Illuminate\Support\Facades\Route;
Route::get('/', 'LuojunitController@index');
Route::post('/', 'LuojunitController@store')->name('junit.store');


//Route::get('test', 'TestController@index');