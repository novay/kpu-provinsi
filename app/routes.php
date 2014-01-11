<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

Route::get('/', 'App\\Controllers\\HomeController@getIndex');
App::bind('KabupatenRepositoryInterface','KabupatenRepository');
Route::resource('kabupatens', 'KabupatensController');

App::bind('KecamatanRepositoryInterface','KecamatanRepository');
Route::resource('kecamatans', 'KecamatansController');

App::bind('KelurahanRepositoryInterface','KelurahanRepository');
Route::resource('kelurahans', 'KelurahansController');

App::bind('TpsRepositoryInterface','TpsRepository');
Route::resource('tps', 'TpsController');

App::bind('PemilihRepositoryInterface','PemilihRepository');
Route::resource('pemilihs', 'PemilihsController');
