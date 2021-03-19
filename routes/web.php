<?php

Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@home');
Route::post( '/newracer', 'HomeController@newracer' );
Route::post( '/newproof', 'HomeController@newproof' );
Route::get('/proofage', 'HomeController@proofage');

Route::post( '/newcompet', 'HomeController@newcompet' );
Route::get('/positionage', 'HomeController@positionage');


Auth::routes();

