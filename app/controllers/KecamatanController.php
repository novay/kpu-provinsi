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

class KecamatanController extends BaseController
{
	protected $kecamatan;

	function __construct(KecamatanRepositoryInterface $kecamatan)
	{
		$this->kecamatan = $kecamatan;
	}

    public function index()
    {
    	$kecamatan = $this->kecamatan->all();
        $this->layout->content = View::make('kecamatan.all', compact('kecamatan'));
    }

    public function create()
    {
        $this->layout->content = View::make('kecamatan.new');
    }

    public function store()
    {
        $this->kecamatan->store(Input::only('nama','id_kabupaten'));
        return Redirect::to('kecamatan');
    }

    public function show( $id )
    {
        $kecamatan = $this->kecamatan->find($id);
        $this->layout->content = View::make('kecamatan.view')->with('kecamatan', $kecamatan);
        //return Response::json(['kecamatan' => $kecamatan]);
    }

    public function edit( $id )
    {
        $kecamatan = $this->kecamatan->find($id);
        $this->layout->content = View::make('kecamatan.edit')->with('kecamatan', $kecamatan);
    }

    public function update( $id )
    {
        $kecamatan = $this->kecamatan->update($id, Input::only(['nama','id_kabupaten']));
        return Redirect::to('kecamatan/'.$id);
    }

    public function destroy( $id )
    {
        $this->kecamatan->destroy($id);
    }
}
