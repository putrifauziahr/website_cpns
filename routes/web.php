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
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/tryout', 'HomeController@tryout')->name('tryout');
Route::get('/tryout_detail', 'HomeController@tryout_detail')->name('tryout_detail');
Route::get('/hasillatihan', 'HomeController@hasillatihan')->name('hasillatihan');
Route::get('/latihansoal', 'HomeController@latihansoal')->name('latihansoal');
Route::get('/materitwk', 'HomeController@materi_twk')->name('materitwk');
Route::get('/materitiu', 'HomeController@materi_tiu')->name('materitiu');
Route::get('/materitkp', 'HomeController@materi_tkp')->name('materitkp');

