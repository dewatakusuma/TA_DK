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

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::get('/backend/index', 'HomeController@index')->name('index');

Route::get('/backend/indexpasien', 'DataPasienController@index');
Route::get('/backend/showaddpasien', 'DataPasienController@showaddpasien');
Route::post('/backend/addpasien', 'DataPasienController@addpasien');

Route::get('/backend/editPasien/{id}', 'DataPasienController@editPasien');
Route::post('/backend/editPasien/update', 'DataPasienController@updatePasien');
Route::get('/backend/showaddpasien/delete/{id}', 'DataPasienController@deletepasien');

Route::get('/backend/monitoring/index/{id}','MonitoringController@index');

