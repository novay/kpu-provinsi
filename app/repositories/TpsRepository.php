<?php

class TpsRepository implements TpsRepositoryInterface
{
	public function all()
	{
		return Tps::all();
	}

	public function find($id)
	{
		return Tps::find($id);
	}

	public function store($input)
	{
        $tps = new Tps;
        $tps->nama = $input['nama'];
        $tps->id_kelurahan = $input['id_kelurahan'];
        $tps->id_kecamatan = $input['id_kecamatan'];
        $tps->id_kabupaten = $input['id_kabupaten'];
        $tps->save();
	}

	public function update($id, $input)
	{
		$tps = $this->find($id);
        $tps->nama = $input['nama'];
        $tps->id_kelurahan = $input['id_kelurahan'];
        $tps->id_kecamatan = $input['id_kecamatan'];
        $tps->id_kabupaten = $input['id_kabupaten'];
        $tps->save();
	}

	public function destroy($id)
	{
		$this->find($id)->delete();
	}
}
