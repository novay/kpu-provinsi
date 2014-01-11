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

Route::resource('kabupaten', 'KabupatenController');
Route::resource('kecamatan', 'KecamatanController');
Route::resource('kelurahan', 'KelurahanController');
Route::resource('tps', 'TpsController');
Route::resource('pemilih', 'DataPemilihController');