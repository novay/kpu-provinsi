<?php

class KabupatensControllerTest extends TestCase {
	public function testIndex()
	{
	    $response = $this->call('GET', 'kabupatens');
	    $this->assertTrue($response->isOk());
	}

	public function testShow()
	{
	    $response = $this->call('GET', 'kabupatens/1');
	    $this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
	    $response = $this->call('GET', 'kabupatens/create');
	    $this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
	    $response = $this->call('GET', 'kabupatens/1/edit');
	    $this->assertTrue($response->isOk());
	}
}
