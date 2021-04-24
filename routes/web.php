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
    return view('welcome');
});

Route::get('/customers/{id}/update', 'CustomersController@store');
Route::get('/customers/{id}', 'CustomersController@show');
Route::get('/customers/{id}/delete', 'CustomersController@destroy');
// Route::resource('customers', 'CustomersController');