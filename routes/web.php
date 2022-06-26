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

Route::get('/','FrontendController@index')->name('index');
Route::get('/hizmetler','FrontendController@hizmetler')->name('hizmetler');
Route::get('/hizmet/{slug}','FrontendController@hizmetDetay')->name('hizmetDetay');
Route::get('/urunler','FrontendController@urunler')->name('urunler');
Route::get('/urun/{slug}','FrontendController@urunDetay')->name('urunDetay');
Route::get('/faaliyetalanlari','FrontendController@projeler')->name('projeler');
Route::get('/faaliyet/{slug}','FrontendController@projeDetay')->name('projeDetay');
#Route::get('/sayfa/{slug}','FrontendController@sayfaGoster')->name('sayfaGoster');
Route::get('/iletisim','FrontendController@iletisim')->name('iletisim');
Route::get('/blog','FrontendController@blog')->name('blog');
Route::get('/blog/{slug}','FrontendController@blogDetay')->name('blogDetay');
Route::group(['prefix'=>'yonetim'], function (){
    Route::get('/','AdminController@index')->name('admin.index');
    Route::get('/sayfalar','AdminController@sayfalar')->name('admin.sayfalarIndex');
    Route::get('/sayfaekle','AdminController@sayfaEkle')->name('admin.sayfaEkle');
    Route::get('/sayfaduzenle/{id}','AdminController@sayfaDuzenle')->name('admin.sayfaDuzenle');
    Route::post('/sayfaguncelle','AdminController@sayfaUpdate')->name('admin.sayfaUpdate');
    Route::post('/sayfakaydet','AdminController@sayfaCreate')->name('admin.sayfaCreate');
    Route::get('/sayfasil/{id}','AdminController@sayfaSil')->name('admin.sayfaSil');
    Route::get('/yazilar','AdminController@yazilar')->name('admin.yazilarIndex');
    Route::get('/yaziekle','AdminController@yaziEkle')->name('admin.yaziEkle');
    Route::post('/yazikaydet','AdminController@yaziCreate')->name('admin.yaziCreate');
    Route::get('/yazieduzenle/{id}','AdminController@yaziDuzenle')->name('admin.yaziDuzenle');
    Route::post('/yaziguncelle','AdminController@yaziUpdate')->name('admin.yaziUpdate');
    Route::get('/yazisil/{id}','AdminController@yaziSil')->name('admin.yaziSil');
    Route::get('/hizmetler','AdminController@hizmetler')->name('admin.hizmetlerIndex');
    Route::get('/hizmetekle','AdminController@hizmetEkle')->name('admin.hizmetEkle');
    Route::post('/hizmetkaydet','AdminController@hizmetCreate')->name('admin.hizmetCreate');
    Route::get('/hizmeteduzenle/{id}','AdminController@hizmetDuzenle')->name('admin.hizmetDuzenle');
    Route::post('/hizmetguncelle','AdminController@hizmetUpdate')->name('admin.hizmetUpdate');
    Route::get('/hizmetsil/{id}','AdminController@hizmetSil')->name('admin.hizmetSil');
    Route::get('/projeler','AdminController@projeler')->name('admin.projelerIndex');
    Route::get('/projeekle','AdminController@projeEkle')->name('admin.projeEkle');
    Route::post('/projekaydet','AdminController@projeCreate')->name('admin.projeCreate');
    Route::get('/projeduzenle/{id}','AdminController@projeDuzenle')->name('admin.projeDuzenle');
    Route::post('/projeguncelle','AdminController@projeUpdate')->name('admin.projeUpdate');
    Route::get('/projesil/{id}','AdminController@projeSil')->name('admin.projeSil');
    Route::get('/urunler','AdminController@urunler')->name('admin.urunlerIndex');
    Route::get('/urunekle','AdminController@urunEkle')->name('admin.urunEkle');
    Route::post('/urunkaydet','AdminController@urunCreate')->name('admin.urunCreate');
    Route::get('/urunduzenle/{id}','AdminController@urunDuzenle')->name('admin.urunDuzenle');
    Route::post('/urunguncelle','AdminController@urunUpdate')->name('admin.urunUpdate');
    Route::get('/urunsil/{id}','AdminController@urunSil')->name('admin.urunSil');
    Route::get('/menuler','AdminController@menuler')->name('admin.menulerIndex');
    Route::get('/menuduzenle/{id}','AdminController@menuDuzenle')->name('admin.menuDuzenle');
    Route::post('/menuguncelle','AdminController@menuUpdate')->name('admin.menuUpdate');
    Route::get('/siteayarlar','AdminController@siteAyarlar')->name('admin.siteAyarlar');
    Route::post('/siteayarguncelle','AdminController@siteAyarUpdate')->name('admin.siteAyarUpdate');
    Route::get('/slider','AdminController@sliderIndex')->name('admin.sliderIndex');
    Route::get('/slaytekle','AdminController@slaytEkle')->name('admin.slaytEkle');
    Route::post('/slaytkaydet','AdminController@slaytCreateslider')->name('admin.slaytKaydet');
    Route::get('/slaytduzenle/{id}','AdminController@slaytDuzenle')->name('admin.slaytDuzenle');
    Route::post('/slaytguncelle','AdminController@slaytUpdate')->name('admin.slaytUpdate');
    Route::get('/slaytsil/{id}','AdminController@slaytSil')->name('admin.slaytSil');
    Route::get('/banners','AdminController@bannerIndex')->name('admin.bannerIndex');
    Route::get('/bannerekle','AdminController@bannerEkle')->name('admin.bannerEkle');
    Route::post('/bannerkaydet','AdminController@bannerCreate')->name('admin.bannerCreate');
    Route::get('/bannerduzenle/{id}','AdminController@bannerDuzenle')->name('admin.bannerDuzenle');
    Route::post('/bannerguncelle','AdminController@bannerUpdate')->name('admin.bannerUpdate');
    Route::get('/bannersil/{id}','AdminController@bannerSil')->name('admin.bannerSil');
});
