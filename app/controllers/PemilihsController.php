<?php

class PemilihsController extends BaseController
{
	protected $pemilihs;

	function __construct(PemilihRepositoryInterface $pemilihs)
	{
		$this->pemilihs = $pemilihs;
	}

    public function index()
    {
    	$pemilihs = $this->pemilihs->all();
        $this->layout->content = View::make('pemilihs.all', compact('pemilihs'));
    }

    public function create()
    {
        $this->layout->content = View::make('pemilihs.new');
    }

    public function store()
    {
        $this->pemilihs->store(Input::only('nik','nama','jenis_kelamin','status','tempat_lahir','tanggal_lahir','umur','alamat','no_telp','keterangan','id_tps','id_kelurahan','id_kecamatan','id_kabupaten'));
        return Redirect::to('pemilihs');
    }

    public function show( $id )
    {
        $pemilih = $this->pemilihs->find($id);
        $this->layout->content = View::make('pemilihs.view')->with('pemilih', $pemilih);
        //return Response::json(['pemilih' => $pemilih]);
    }

    public function edit( $id )
    {
        $pemilih = $this->pemilihs->find($id);
        $this->layout->content = View::make('pemilihs.edit')->with('pemilih', $pemilih);
    }

    public function update( $id )
    {
        $pemilih = $this->pemilihs->update($id, Input::only(['nik','nama','jenis_kelamin','status','tempat_lahir','tanggal_lahir','umur','alamat','no_telp','keterangan','id_tps','id_kelurahan','id_kecamatan','id_kabupaten']));
        return Redirect::to('pemilihs/'.$id);
    }

    public function destroy( $id )
    {
        $this->pemilihs->destroy($id);
    }
}
