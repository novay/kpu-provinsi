<?php

class KelurahansControllerTest extends TestCase {
	public function testIndex()
	{
	    $response = $this->call('GET', 'kelurahans');
	    $this->assertTrue($response->isOk());
	}

	public function testShow()
	{
	    $response = $this->call('GET', 'kelurahans/1');
	    $this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
	    $response = $this->call('GET', 'kelurahans/create');
	    $this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
	    $response = $this->call('GET', 'kelurahans/1/edit');
	    $this->assertTrue($response->isOk());
	}
}
