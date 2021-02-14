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
	
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/crud', 'crud@index')->name('crud');
 
Route::post('/cadastro', 'crud@insert')->name('insert');
Route::post('/atualizar/{id}', 'crud@update')->name('update');

Route::get('/delete/{id}','crud@delete')->name('delete');

Route::get('/pesquisa','crud@pesquisa')->name('pesquisa');



