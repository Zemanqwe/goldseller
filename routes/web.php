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

Route::get('/', 'ApiController@index');
Route::get('/accaunts', 'ApiController@accaunts');
Route::get('/gold', 'ApiController@gold');
Route::get('/help', 'ApiController@help');
Route::get('/items', 'ApiController@items');
Route::get('/korzina', 'ApiController@korzina');
Route::get('/ArcheAge', 'ApiController@ArcheAge');
Route::get('/accauntsAA', 'ApiController@accauntsAA');
Route::get('/itemsAA', 'ApiController@itemsAA');
Route::get('/WoW', 'ApiController@WoW');
Route::get('/accauntsWoW', 'ApiController@accauntsWoW');
Route::get('/helpWoW', 'ApiController@helpWoW');
Route::get('/accauntsAstellia', 'ApiController@accauntsAstellia');
Route::get('/helpAstellia', 'ApiController@helpAstellia');
Route::get('/Astellia', 'ApiController@Astellia');
Route::get('/BDO', 'ApiController@BDO');
Route::get('/accauntsBDO', 'ApiController@accauntsBDO');
Route::get('/itemsBDO', 'ApiController@itemsBDO');
Route::get('/LA', 'ApiController@LA');
Route::get('/itemsLA', 'ApiController@itemsLA');
Route::get('/accauntsLA', 'ApiController@accauntsLA');
Route::get('/getBaskets', 'ApiController@getBaskets');
Route::get('/reg', 'ApiController@register');
Route::get('/enter', 'ApiController@enter');