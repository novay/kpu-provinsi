<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

class kelurahanControllerTest extends TestCase {
	public function testIndex()
	{
	    $response = $this->call('GET', 'kelurahan');
	    $this->assertTrue($response->isOk());
	}

	public function testShow()
	{
	    $response = $this->call('GET', 'kelurahan/1');
	    $this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
	    $response = $this->call('GET', 'kelurahan/create');
	    $this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
	    $response = $this->call('GET', 'kelurahan/1/edit');
	    $this->assertTrue($response->isOk());
	}
}
