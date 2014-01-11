<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class KelurahanRepository implements KelurahanRepositoryInterface
{
	public function all()
	{
		return Kelurahan::all();
	}

	public function find($id)
	{
		return Kelurahan::find($id);
	}

	public function store($input)
	{
        $kelurahan = new Kelurahan;
        $kelurahan->nama = $input['nama'];
        $kelurahan->id_kecamatan = $input['id_kecamatan'];
        $kelurahan->id_kabupaten = $input['id_kabupaten'];
        $kelurahan->save();
	}

	public function update($id, $input)
	{
		$kelurahan = $this->find($id);
        $kelurahan->nama = $input['nama'];
        $kelurahan->id_kecamatan = $input['id_kecamatan'];
        $kelurahan->id_kabupaten = $input['id_kabupaten'];
        $kelurahan->save();
	}

	public function destroy($id)
	{
		$this->find($id)->delete();
	}
}
