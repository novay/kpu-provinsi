<?php

class KelurahansController extends BaseController
{
	protected $kelurahans;

	function __construct(KelurahanRepositoryInterface $kelurahans)
	{
		$this->kelurahans = $kelurahans;
	}

    public function index()
    {
    	$kelurahans = $this->kelurahans->all();
        $this->layout->content = View::make('kelurahans.all', compact('kelurahans'));
    }

    public function create()
    {
        $this->layout->content = View::make('kelurahans.new');
    }

    public function store()
    {
        $this->kelurahans->store(Input::only('nama','id_kecamatan','id_kabupaten'));
        return Redirect::to('kelurahans');
    }

    public function show( $id )
    {
        $kelurahan = $this->kelurahans->find($id);
        $this->layout->content = View::make('kelurahans.view')->with('kelurahan', $kelurahan);
        //return Response::json(['kelurahan' => $kelurahan]);
    }

    public function edit( $id )
    {
        $kelurahan = $this->kelurahans->find($id);
        $this->layout->content = View::make('kelurahans.edit')->with('kelurahan', $kelurahan);
    }

    public function update( $id )
    {
        $kelurahan = $this->kelurahans->update($id, Input::only(['nama','id_kecamatan','id_kabupaten']));
        return Redirect::to('kelurahans/'.$id);
    }

    public function destroy( $id )
    {
        $this->kelurahans->destroy($id);
    }
}
