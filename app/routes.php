<?php

/**
  * @author : Noviyanto Rachmady ['novay@otaku.si']
  **/

# Mulai Routing

Route::get('/', array('as' => 'home', 'uses' => 'AdminController@getIndex'));

Route::get('login', array('as' => 'login', 'uses' => 'AdminController@getLogin'));
Route::post('login', array('uses' => 'AdminController@postLogin'));

Route::get('logout', array('as' => 'logout', 'uses' => 'AdminController@logout'));


## Kabupaten
Route::get('kabupaten', array('as' => 'kabupaten', 'uses' => 'KabupatenController@getIndex'));
Route::get('kabupaten/tambah', array('as' => 'kabupaten_baru', 'uses' => 'KabupatenController@getBaru'));
Route::post('kabupaten/tambah', array('uses' => 'KabupatenController@postBaru'));
Route::get('kabupaten/ganti/{id?}', array('as' => 'ubah_kabupaten', 'uses' => 'KabupatenController@getGanti'))->where('id', '\d+');
Route::post('kabupaten/ganti/{id?}', array('uses' => 'KabupatenController@postGanti'))->where('id', '\d+');
Route::get('kabupaten/hapus/{id?}', array('as' => 'hapus_kabupaten', 'uses' => 'KabupatenController@getHapus'))->where('id', '\d+');
Route::post('kabupaten/hapus/{id?}', array('uses' => 'KabupatenController@postHapus'))->where('id', '\d+');
Route::get('kabupaten/excel', array('as' => 'excel_kabupaten', 'uses' => 'KabupatenController@getExcel'));
Route::get('kabupaten/{id?}', array('as' => 'lihat_kabupaten', 'uses' => 'KabupatenController@getLihat'))->where('id', '\d+');

## Kecamatan
Route::get('kecamatan', array('as' => 'kecamatan', 'uses' => 'KecamatanController@getIndex'));
Route::get('kecamatan/tambah', array('as' => 'kecamatan_baru', 'uses' => 'KecamatanController@getBaru'));
Route::post('kecamatan/tambah', array('uses' => 'KecamatanController@postBaru'));
Route::get('kecamatan/ganti/{id?}', array('as' => 'ubah_kecamatan', 'uses' => 'KecamatanController@getGanti'))->where('id', '\d+');
Route::post('kecamatan/ganti/{id?}', array('uses' => 'KecamatanController@postGanti'))->where('id', '\d+');
Route::get('kecamatan/hapus/{id?}', array('as' => 'hapus_kecamatan', 'uses' => 'KecamatanController@getHapus'))->where('id', '\d+');
Route::post('kecamatan/hapus/{id?}', array('uses' => 'KecamatanController@postHapus'))->where('id', '\d+');
Route::get('kecamatan/excel', array('as' => 'excel_kecamatan', 'uses' => 'KecamatanController@getExcel'));
Route::get('kecamatan/{id?}', array('as' => 'lihat_kecamatan', 'uses' => 'KecamatanController@getLihat'))->where('id', '\d+');

## Kelurahan
Route::get('kelurahan', array('as' => 'kelurahan', 'uses' => 'KelurahanController@getIndex'));
Route::get('kelurahan/tambah', array('as' => 'kelurahan_baru', 'uses' => 'KelurahanController@getBaru'));
Route::post('kelurahan/tambah', array('uses' => 'KelurahanController@postBaru'));
Route::get('kelurahan/ganti/{id?}', array('as' => 'ubah_kelurahan', 'uses' => 'KelurahanController@getGanti'))->where('id', '\d+');
Route::post('kelurahan/ganti/{id?}', array('uses' => 'KelurahanController@postGanti'))->where('id', '\d+');
Route::get('kelurahan/hapus/{id?}', array('as' => 'hapus_kelurahan', 'uses' => 'KelurahanController@getHapus'))->where('id', '\d+');
Route::post('kelurahan/hapus/{id?}', array('uses' => 'KelurahanController@postHapus'))->where('id', '\d+');
Route::get('kelurahan/excel', array('as' => 'excel_kelurahan', 'uses' => 'KelurahanController@getExcel'));
Route::get('kelurahan/{id?}', array('as' => 'lihat_kelurahan', 'uses' => 'KelurahanController@getLihat'))->where('id', '\d+');

## TPS
Route::get('tps', array('as' => 'tps', 'uses' => 'TpsController@getIndex'));
Route::get('tps/tambah', array('as' => 'tps_baru', 'uses' => 'TpsController@getBaru'));
Route::post('tps/tambah', array('uses' => 'TpsController@postBaru'));
Route::get('tps/ganti/{id?}', array('as' => 'ubah_tps', 'uses' => 'TpsController@getGanti'))->where('id', '\d+');
Route::post('tps/ganti/{id?}', array('uses' => 'TpsController@postGanti'))->where('id', '\d+');
Route::get('tps/hapus/{id?}', array('as' => 'hapus_tps', 'uses' => 'TpsController@getHapus'))->where('id', '\d+');
Route::post('tps/hapus/{id?}', array('uses' => 'TpsController@postHapus'))->where('id', '\d+');
Route::get('tps/excel', array('as' => 'excel_tps', 'uses' => 'TpsController@getExcel'));
Route::get('tps/{id?}', array('as' => 'lihat_tps', 'uses' => 'TpsController@getLihat'))->where('id', '\d+');

## Pengaturan
Route::get('pengaturan', array('as' => 'pengaturan', 'uses' => 'PengaturanController@getIndex'));

# Organisasi
Route::get('organisasi/nama', array('as' => 'nama_organisasi', 'uses' => 'OrganisasiController@getNama'));
Route::get('organisasi/alamat', array('as' => 'alamat_organisasi', 'uses' => 'OrganisasiController@getAlamat'));
Route::get('organisasi/kota', array('as' => 'kota_organisasi', 'uses' => 'OrganisasiController@getKota'));
Route::get('organisasi/provinsi', array('as' => 'provinsi_organisasi', 'uses' => 'OrganisasiController@getProvinsi'));
Route::get('organisasi/negara', array('as' => 'negara_organisasi', 'uses' => 'OrganisasiController@getNegara'));
Route::get('organisasi/logo', array('as' => 'logo_organisasi', 'uses' => 'OrganisasiController@getLogo'));
Route::post('organisasi/nama', array('uses' => 'OrganisasiController@postNama'));
Route::post('organisasi/alamat', array('uses' => 'OrganisasiController@postAlamat'));
Route::post('organisasi/kota', array('uses' => 'OrganisasiController@postKota'));
Route::post('organisasi/provinsi', array('uses' => 'OrganisasiController@postProvinsi'));
Route::post('organisasi/negara', array('uses' => 'OrganisasiController@postNegara'));
Route::post('organisasi/logo', array('uses' => 'OrganisasiController@postLogo'));

# Pengguna
Route::get('pengguna/nama', array('as' => 'nama_tampilan', 'uses' => 'AdminController@getNama'));
Route::get('pengguna/user', array('as' => 'nama_pengguna', 'uses' => 'AdminController@getUser'));
Route::get('pengguna/sandi', array('as' => 'kata_sandi', 'uses' => 'AdminController@getSandi'));
Route::get('pengguna/avatar', array('as' => 'avatar', 'uses' => 'AdminController@getAvatar'));
Route::post('pengguna/nama', array('uses' => 'AdminController@postNama'));
Route::post('pengguna/user', array('uses' => 'AdminController@postUser'));
Route::post('pengguna/sandi', array('uses' => 'AdminController@postSandi'));
Route::post('pengguna/avatar', array('uses' => 'AdminController@postAvatar'));

## Halaman Database
Route::get('db/backup',   ['as'   => 'backup',  'uses' => 'DatabaseController@getBackup']);
Route::get('db/restore',  ['as'   => 'restore', 'uses' => 'DatabaseController@getRestore']);
Route::post('db/restore', ['uses' => 'DatabaseController@postRestore']);