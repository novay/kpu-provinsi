<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use View;

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class PemilihController extends BaseController
{
	protected $pemilih;

	function __construct(PemilihRepositoryInterface $pemilih)
	{
		$this->pemilih = $pemilih;
	}

    public function index()
    {
    	$pemilih = $this->pemilih->all();
        $this->layout->content = View::make('pemilih.all', compact('pemilih'));
    }

    public function create()
    {
        $this->layout->content = View::make('pemilih.new');
    }

    public function store()
    {
        $this->pemilih->store(Input::only('nik','nama','jenis_kelamin','status','tempat_lahir','tanggal_lahir','umur','alamat','no_telp','keterangan','id_tps','id_kelurahan','id_kecamatan','id_kabupaten'));
        return Redirect::to('pemilih');
    }

    public function show( $id )
    {
        $pemilih = $this->pemilih->find($id);
        $this->layout->content = View::make('pemilih.view')->with('pemilih', $pemilih);
        //return Response::json(['pemilih' => $pemilih]);
    }

    public function edit( $id )
    {
        $pemilih = $this->pemilih->find($id);
        $this->layout->content = View::make('pemilih.edit')->with('pemilih', $pemilih);
    }

    public function update( $id )
    {
        $pemilih = $this->pemilih->update($id, Input::only(['nik','nama','jenis_kelamin','status','tempat_lahir','tanggal_lahir','umur','alamat','no_telp','keterangan','id_tps','id_kelurahan','id_kecamatan','id_kabupaten']));
        return Redirect::to('pemilih/'.$id);
    }

    public function destroy( $id )
    {
        $this->pemilih->destroy($id);
    }
}
