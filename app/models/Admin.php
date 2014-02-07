<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Admin extends Eloquent implements UserInterface, RemindableInterface {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	# Ambil tabel dari database
	protected $table = 'admin';

	# Field yang boleh di input
	protected $fillable = ['username', 'password', 'nama_tampilan', 'avatar'];

	# Field yang jadi patokan
	protected $guarded = ['id'];

	# Rules validasi
	public static $rules = [
		'nama_tampilan'		  => 'required|max:50|nama_baru',
		'username'			  => 'required|min:5|max:20|exists:admin,username', 
		'username_sekarang'   => 'required|min:5|max:20|username_sekarang',
		'username_baru' 	  => 'required|min:5|max:20|different:username_sekarang|unique:admin,username',
		'konfirmasi_username' => 'required|min:5|max:20|same:username_baru',
		'password'			  => 'required|min:5',
		'password_sekarang'   => 'required|min:6|password_sekarang',
		'password_baru'       => 'required|min:6|different:password_sekarang',
		'konfirmasi_password' => 'required|min:6|same:password_baru',
		'avatar' 			  => 'required|mimes:jpg,jpeg,png|max:5000'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * Tambah data ke database
	 */
	public static function tambah($username, $password, $nama_tampilan, $avatar)
	{
		// Kirim data ke dalam database disesuaikan berdasarkan field
		Admin::create(compact('username', 'password', 'nama_tampilan', 'avatar'));
	}

	/**
	 * Ganti data dalam database
	 */
	public static function ganti($id, $username, $password, $nama_tampilan, $avatar)
	{
		$temp = Admin::find($id);
		$temp->username	   	 = $username;
		$temp->password 	 = $password;
		$temp->nama_tampilan = $nama_tampilan;
		// Jika avatar ada, kirim ke database
		if($avatar!=null) $temp->avatar = $avatar;
		// Jika tidak, abaikan
		$temp->save();
	}

	/**
	 * Hapus data dalam database
	 */
	public static function hapus($id) 
	{
		Admin::destroy($id);
	}

	/**
	 * Ubah nama pengguna / username
	 */
	public static function username($id, $username_baru)
	{
		$temp = Admin::find($id);
		$temp->username = $username_baru;
		$temp->save();
	}

	/**
	 * Ubah kata sandi / password
	 */
	public static function password($id, $password_baru)
	{
		$temp = Admin::find($id);
		$temp->password = $password_baru;
		$temp->save();
	}

	/**
	 * Ubah nama tampilan
	 */
	public static function nama_tampilan($id, $nama_tampilan)
	{
		$temp = Admin::find($id);
		$temp->nama_tampilan = $nama_tampilan;
		$temp->save();
	}

	/**
	 * Ubah avatar
	 */
	public static function avatar($id, $avatar)
	{
		$temp = Admin::find($id);
		$temp->avatar = $avatar;
		$temp->save();
	}

}