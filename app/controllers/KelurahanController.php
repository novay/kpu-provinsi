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

class KelurahanController extends BaseController
{
	protected $kelurahan;

	function __construct(KelurahanRepositoryInterface $kelurahan)
	{
		$this->kelurahan = $kelurahan;
	}

    public function index()
    {
    	$kelurahan = $this->kelurahan->all();
        $this->layout->content = View::make('kelurahan.all', compact('kelurahan'));
    }

    public function create()
    {
        $this->layout->content = View::make('kelurahan.new');
    }

    public function store()
    {
        $this->kelurahan->store(Input::only('nama','id_kecamatan','id_kabupaten'));
        return Redirect::to('kelurahan');
    }

    public function show( $id )
    {
        $kelurahan = $this->kelurahan->find($id);
        $this->layout->content = View::make('kelurahan.view')->with('kelurahan', $kelurahan);
        //return Response::json(['kelurahan' => $kelurahan]);
    }

    public function edit( $id )
    {
        $kelurahan = $this->kelurahan->find($id);
        $this->layout->content = View::make('kelurahan.edit')->with('kelurahan', $kelurahan);
    }

    public function update( $id )
    {
        $kelurahan = $this->kelurahan->update($id, Input::only(['nama','id_kecamatan','id_kabupaten']));
        return Redirect::to('kelurahan/'.$id);
    }

    public function destroy( $id )
    {
        $this->kelurahan->destroy($id);
    }
}
