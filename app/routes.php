<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get('/inscription', 'HomeController@showInscription');
Route::get('/alphabet', 'HomeController@showAlphabet');
Route::get('/film1', 'HomeController@showFilm1');

Route::get('/inscription/alphabet', 'HomeController@showAlphabet');
Route::get('/inscription/film1', 'HomeController@showFilm1');
Route::get('/inscription/film2', 'HomeController@showFilm2');

Route::get('/alphabet/film1', 'HomeController@showFilm1');
Route::get('/alphabet/film2', 'HomeController@showFilm2');
Route::get('/alphabet/inscription', 'HomeController@showInscription');
