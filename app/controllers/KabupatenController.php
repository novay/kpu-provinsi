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

class KabupatenController extends BaseController {

	protected $kabupaten;

	function __construct(KabupatenRepositoryInterface $kabupaten)
	{
		$this->kabupaten = $kabupaten;
	}

    public function index()
    {
    	$kabupaten = $this->kabupaten->all();
        $this->layout->content = View::make('kabupaten.all', compact('kabupaten'));
    }

    public function create()
    {
        $this->layout->content = View::make('kabupaten.new');
    }

    public function store()
    {
        $this->kabupaten->store(Input::only('nama'));
        return Redirect::to('kabupaten');
    }

    public function show( $id )
    {
        $kabupaten = $this->kabupaten->find($id);
        $this->layout->content = View::make('kabupaten.view')->with('kabupaten', $kabupaten);
        //return Response::json(['kabupaten' => $kabupaten]);
    }

    public function edit( $id )
    {
        $kabupaten = $this->kabupaten->find($id);
        $this->layout->content = View::make('kabupaten.edit')->with('kabupaten', $kabupaten);
    }

    public function update( $id )
    {
        $kabupaten = $this->kabupaten->update($id, Input::only(['nama']));
        return Redirect::to('kabupaten/'.$id);
    }

    public function destroy( $id )
    {
        $this->kabupaten->destroy($id);
    }
}
