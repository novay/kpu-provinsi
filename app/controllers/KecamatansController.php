<?php

class KecamatansController extends BaseController
{
	protected $kecamatans;

	function __construct(KecamatanRepositoryInterface $kecamatans)
	{
		$this->kecamatans = $kecamatans;
	}

    public function index()
    {
    	$kecamatans = $this->kecamatans->all();
        $this->layout->content = View::make('kecamatans.all', compact('kecamatans'));
    }

    public function create()
    {
        $this->layout->content = View::make('kecamatans.new');
    }

    public function store()
    {
        $this->kecamatans->store(Input::only('nama','id_kabupaten'));
        return Redirect::to('kecamatans');
    }

    public function show( $id )
    {
        $kecamatan = $this->kecamatans->find($id);
        $this->layout->content = View::make('kecamatans.view')->with('kecamatan', $kecamatan);
        //return Response::json(['kecamatan' => $kecamatan]);
    }

    public function edit( $id )
    {
        $kecamatan = $this->kecamatans->find($id);
        $this->layout->content = View::make('kecamatans.edit')->with('kecamatan', $kecamatan);
    }

    public function update( $id )
    {
        $kecamatan = $this->kecamatans->update($id, Input::only(['nama','id_kabupaten']));
        return Redirect::to('kecamatans/'.$id);
    }

    public function destroy( $id )
    {
        $this->kecamatans->destroy($id);
    }
}
