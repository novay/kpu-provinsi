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

class HomeController extends BaseController {

	public function getIndex()
	{
		return View::make('hello');
	}

}