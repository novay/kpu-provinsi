<?php

class KabupatensController extends BaseController
{
	protected $kabupatens;

	function __construct(KabupatenRepositoryInterface $kabupatens)
	{
		$this->kabupatens = $kabupatens;
	}

    public function index()
    {
    	$kabupatens = $this->kabupatens->all();
        $this->layout->content = View::make('kabupatens.all', compact('kabupatens'));
    }

    public function create()
    {
        $this->layout->content = View::make('kabupatens.new');
    }

    public function store()
    {
        $this->kabupatens->store(Input::only('nama'));
        return Redirect::to('kabupatens');
    }

    public function show( $id )
    {
        $kabupaten = $this->kabupatens->find($id);
        $this->layout->content = View::make('kabupatens.view')->with('kabupaten', $kabupaten);
        //return Response::json(['kabupaten' => $kabupaten]);
    }

    public function edit( $id )
    {
        $kabupaten = $this->kabupatens->find($id);
        $this->layout->content = View::make('kabupatens.edit')->with('kabupaten', $kabupaten);
    }

    public function update( $id )
    {
        $kabupaten = $this->kabupatens->update($id, Input::only(['nama']));
        return Redirect::to('kabupatens/'.$id);
    }

    public function destroy( $id )
    {
        $this->kabupatens->destroy($id);
    }
}
