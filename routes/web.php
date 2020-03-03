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
    return view('template.dashboard');
});

Route::get('/diseno-web', function () {
    return view('template.diseno-web');
});

Route::get('/diseno-grafico-digital', function () {
    return view('template.diseno-grafico-digital');
});


Route::get('/marketing-digital', function () {
    return view('template.marketing-digital');
});


Route::resource('/blog','BlogController');

Route::get('/landing', function () {
    return view('template.landing');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
