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

Route::get('/', function () {
    return view('homepage');
});

Route::get('homepage', function () {
    return view('homepage');
});

Route::get('/hero', 'HeroController@index');

Route::post('/hero/{hero_slug}', 'HeroController@store');





Route::get('/hero/{hero_slug}', 'HeroController@show');



Auth::routes();
