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
Route::group(['prefix'=>'yonetim'], function (){
    Route::get('/','AdminController@index')->name('admin.index');
    Route::get('/sayfalar','AdminController@sayfalar')->name('admin.sayfalarIndex');
    Route::get('/sayfaekle','AdminController@sayfaEkle')->name('admin.sayfaEkle');
    Route::get('/sayfaeduzenle','AdminController@sayfaDuzenle')->name('admin.sayfaDuzenle');
    Route::post('/sayfakaydet','AdminController@sayfaCreate')->name('admin.sayfaCreate');
});
