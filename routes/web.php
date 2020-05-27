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

Route::get('/ArcheAge', function () {
    return view('ArcheAge');
});

Route::get('/accauntsAA', function () {
    return view('accauntsAA');
});

Route::get('/itemsAA', function () {
    return view('itemsAA');
});

Route::get('/WoW', function () {
    return view('WoW');
});

Route::get('/accauntsWoW', function () {
    return view('accauntsWoW');
});

Route::get('/helpWoW', function () {
    return view('helpWoW');
});

Route::get('/accauntsAstellia', function () {
    return view('accauntsAstellia');
});

Route::get('/helpAstellia', function () {
    return view('helpAstellia');
});

Route::get('/Astellia', function () {
    return view('Astellia');
});

Route::get('/BDO', function () {
    return view('BDO');
});

Route::get('/accauntsBDO', function () {
    return view('accauntsBDO');
});

Route::get('/itemsBDO', function () {
    return view('itemsBDO');
});

Route::get('/LA', function () {
    return view('LA');
});

Route::get('/itemsLA', function () {
    return view('itemsLA');
});

Route::get('/accauntsLA', function () {
    return view('accauntsLA');
});