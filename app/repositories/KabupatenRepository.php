<?php

class KabupatenRepository implements KabupatenRepositoryInterface
{
	public function all()
	{
		return Kabupaten::all();
	}

	public function find($id)
	{
		return Kabupaten::find($id);
	}

	public function store($input)
	{
        $kabupaten = new Kabupaten;
        $kabupaten->nama = $input['nama'];
        $kabupaten->save();
	}

	public function update($id, $input)
	{
		$kabupaten = $this->find($id);
        $kabupaten->nama = $input['nama'];
        $kabupaten->save();
	}

	public function destroy($id)
	{
		$this->find($id)->delete();
	}
}
