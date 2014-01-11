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

class TpsController extends BaseController
{
	protected $tps;

	function __construct(TpsRepositoryInterface $tps)
	{
		$this->tps = $tps;
	}

    public function index()
    {
    	$tps = $this->tps->all();
        $this->layout->content = View::make('tps.all', compact('tps'));
    }

    public function create()
    {
        $this->layout->content = View::make('tps.new');
    }

    public function store()
    {
        $this->tps->store(Input::only('nama','id_kelurahan','id_kecamatan','id_kabupaten'));
        return Redirect::to('tps');
    }

    public function show( $id )
    {
        $tps = $this->tps->find($id);
        $this->layout->content = View::make('tps.view')->with('tps', $tps);
        //return Response::json(['tps' => $tps]);
    }

    public function edit( $id )
    {
        $tps = $this->tps->find($id);
        $this->layout->content = View::make('tps.edit')->with('tps', $tps);
    }

    public function update( $id )
    {
        $tps = $this->tps->update($id, Input::only(['nama','id_kelurahan','id_kecamatan','id_kabupaten']));
        return Redirect::to('tps/'.$id);
    }

    public function destroy( $id )
    {
        $this->tps->destroy($id);
    }
}
