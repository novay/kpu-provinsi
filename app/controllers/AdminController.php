<?php

class AdminController extends BaseController {

	public function __construct()
	{
		// filter
		$this->beforeFilter('auth', array('except' => array('getLogin', 'postLogin')));
		$this->beforeFilter('guest', array('only' => array('getLogin')));
		$this->beforeFilter('ajax', array('except' => array('home', 'getLogin')));
		$this->beforeFilter('csrf', array('only' => array('postRubahFoto', 'postRubahNama', 'postRubahUsername', 'postRubahPassword')));
	}

	public function home()
	{
		// belum login
		if (Auth::guest()) return Redirect::to_route('login');
		
		// sudah login
		return (Request::ajax()) ? Request::ajax() : View::make('index');
	}

	public function getLogin() {
		return View::make('login');
	}

	public function postLogin()
	{
		// validasi
		$input = Input::all();
		$rules = array('username' => 'required|min:5|max:20|exists:admin,username', 'password' => 'required|min:5');
		$validasi = Validator::make(Input::all(), $rules);

		// tidak valid
		if ($validasi->fails()) {
			// pesan
			$username = $validasi->messages()->first('username') ?: '';
			$password = $validasi->messages()->first('password') ?: '';
			$status = '';

			return Response::json(compact('username', 'password', 'status'));
		}

		// input
		$username = trim(Input::get('username'));
		$password = trim(Input::get('password'));
		$ingat = (trim(Input::get('ingat')) == 1) ? true : false;

		// auth
		$data = compact('username', 'password');

		// cocok
		if (Auth::attempt($data, $ingat)) {
			$status = 'ok';

			return Response::json(compact('status'));

		// tidak cocok
		} else {
			$status = 'error';

			return Response::json(compact('status'));
		}
	}

	

	public function logout()
	{
		// logout admin
		Auth::logout();
	}

}