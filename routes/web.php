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
    return view('index');
});

Route::get('/accaunts', function () {
    return view('accaunts');
});

Route::get('/gold', function () {
    return view('gold');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/items', function () {
    return view('items');
});

Route::get('/korzina', function () {
    return view('korzina');
});