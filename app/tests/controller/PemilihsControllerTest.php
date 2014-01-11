<?php

class PemilihsControllerTest extends TestCase {
	public function testIndex()
	{
	    $response = $this->call('GET', 'pemilihs');
	    $this->assertTrue($response->isOk());
	}

	public function testShow()
	{
	    $response = $this->call('GET', 'pemilihs/1');
	    $this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
	    $response = $this->call('GET', 'pemilihs/create');
	    $this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
	    $response = $this->call('GET', 'pemilihs/1/edit');
	    $this->assertTrue($response->isOk());
	}
}
