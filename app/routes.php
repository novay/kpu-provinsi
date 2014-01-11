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
Route::resource('kabupaten', 'KabupatenController');

App::bind('KecamatanRepositoryInterface','KecamatanRepository');
Route::resource('kecamatan', 'KecamatanController');

App::bind('KelurahanRepositoryInterface','KelurahanRepository');
Route::resource('kelurahan', 'KelurahanController');

App::bind('TpsRepositoryInterface','TpsRepository');
Route::resource('tps', 'TpsController');

App::bind('PemilihRepositoryInterface','PemilihRepository');
Route::resource('pemilih', 'PemilihController');
