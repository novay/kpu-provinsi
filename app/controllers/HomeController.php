<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use View;

class HomeController extends BaseController {

	public function getIndex()
	{
		return View::make('hello');
	}

}