<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('propiedades', 'PropertyController');

Route::resource('usuarios', 'AdminController');


Route::get( 'salir', function(){
    return redirect('home');
});

Route::get( 'salir', function(){
    return redirect() -> route('login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
