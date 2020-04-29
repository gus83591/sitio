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

Route::view('/', 'home')->name('root');
Route::view('/home', 'home')->name('home');
Route::view('/preguntas', 'preguntas')->name('preguntas');
Route::view('/desarrollo', 'desarrollo')->name('desarrollo');
Route::view('/consultoria', 'consultoria')->name('consultoria');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/help', 'help')->name('help');
Route::view('/novedades', 'novedades')->name('novedades');
Route::view('/productos', 'productos')->name('productos');
Route::view('/software', 'software')->name('software');
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');
