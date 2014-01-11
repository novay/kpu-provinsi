<?php

namespace App\Repositories;

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class PemilihRepository implements PemilihRepositoryInterface
{
	public function all()
	{
		return Pemilih::all();
	}

	public function find($id)
	{
		return Pemilih::find($id);
	}

	public function store($input)
	{
        $pemilih = new Pemilih;
        $pemilih->nik = $input['nik'];
        $pemilih->nama = $input['nama'];
        $pemilih->jenis_kelamin = $input['jenis_kelamin'];
        $pemilih->status = $input['status'];
        $pemilih->tempat_lahir = $input['tempat_lahir'];
        $pemilih->tanggal_lahir = $input['tanggal_lahir'];
        $pemilih->umur = $input['umur'];
        $pemilih->alamat = $input['alamat'];
        $pemilih->no_telp = $input['no_telp'];
        $pemilih->keterangan = $input['keterangan'];
        $pemilih->id_tps = $input['id_tps'];
        $pemilih->id_kelurahan = $input['id_kelurahan'];
        $pemilih->id_kecamatan = $input['id_kecamatan'];
        $pemilih->id_kabupaten = $input['id_kabupaten'];
        $pemilih->save();
	}

	public function update($id, $input)
	{
		$pemilih = $this->find($id);
        $pemilih->nik = $input['nik'];
        $pemilih->nama = $input['nama'];
        $pemilih->jenis_kelamin = $input['jenis_kelamin'];
        $pemilih->status = $input['status'];
        $pemilih->tempat_lahir = $input['tempat_lahir'];
        $pemilih->tanggal_lahir = $input['tanggal_lahir'];
        $pemilih->umur = $input['umur'];
        $pemilih->alamat = $input['alamat'];
        $pemilih->no_telp = $input['no_telp'];
        $pemilih->keterangan = $input['keterangan'];
        $pemilih->id_tps = $input['id_tps'];
        $pemilih->id_kelurahan = $input['id_kelurahan'];
        $pemilih->id_kecamatan = $input['id_kecamatan'];
        $pemilih->id_kabupaten = $input['id_kabupaten'];
        $pemilih->save();
	}

	public function destroy($id)
	{
		$this->find($id)->delete();
	}
}
