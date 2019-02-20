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

Route::get('about', function () {
    return 'About page';
});

Route::get('reporting', function () {
    return 'Reporting page';
});

Route::get('test', function (){
    return 'test';
});

Route::resource('reports', 'ReportsController');