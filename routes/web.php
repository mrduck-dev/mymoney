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

Route::get('/', 'AccountsController@index');
Route::get('/account/create', 'AccountsController@create');
Route::post('/account', 'AccountsController@store');
Route::get('/account/{account}','AccountsController@show');

Route::get('/transactions/create','TransactionsController@create');
Route::post('/transactions','TransactionsController@store');
Route::get('/transactions','TransactionsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
