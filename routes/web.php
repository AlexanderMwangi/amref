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
Route::get('/layout', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/objectives', 'HomeController@objectives')->name('objectives');
Route::get('/objectives/add', 'HomeController@addObjectives')->name('objectives/add');
Route::get('/kpi/add', 'HomeController@addKPIs')->name('kpi/add');
