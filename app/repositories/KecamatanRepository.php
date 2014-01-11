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

class KecamatanRepository implements KecamatanRepositoryInterface
{
	public function all()
	{
		return Kecamatan::all();
	}

	public function find($id)
	{
		return Kecamatan::find($id);
	}

	public function store($input)
	{
        $kecamatan = new Kecamatan;
        $kecamatan->nama = $input['nama'];
        $kecamatan->id_kabupaten = $input['id_kabupaten'];
        $kecamatan->save();
	}

	public function update($id, $input)
	{
		$kecamatan = $this->find($id);
        $kecamatan->nama = $input['nama'];
        $kecamatan->id_kabupaten = $input['id_kabupaten'];
        $kecamatan->save();
	}

	public function destroy($id)
	{
		$this->find($id)->delete();
	}
}
