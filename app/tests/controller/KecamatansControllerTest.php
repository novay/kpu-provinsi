<?php

class KecamatansControllerTest extends TestCase {
	public function testIndex()
	{
	    $response = $this->call('GET', 'kecamatans');
	    $this->assertTrue($response->isOk());
	}

	public function testShow()
	{
	    $response = $this->call('GET', 'kecamatans/1');
	    $this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
	    $response = $this->call('GET', 'kecamatans/create');
	    $this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
	    $response = $this->call('GET', 'kecamatans/1/edit');
	    $this->assertTrue($response->isOk());
	}
}
