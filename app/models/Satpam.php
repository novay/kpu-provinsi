<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Satpam extends Eloquent implements UserInterface, RemindableInterface {

	/**
	  * @author : Noviyanto Rachmady ['novay@otaku.si']
	  **/

	// Ambil tabel dari database
	protected $table = 'satpam';

	// Field yang boleh di input
	protected $fillable = ['username', 'password', 'nama_tampilan', 'avatar'];

	// Field yang jadi patokan
	protected $guarded = ['id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password'];

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
	 *
	 * @return string
	 */
	public static function tambah($username, $password, $nama_tampilan, $avatar)
	{
		// Kirim data ke dalam database disesuaikan berdasarkan field
		Satpam::create(compact('username', 'password', 'nama_tampilan', 'avatar'));
	}

	/**
	 * Ganti data dalam database
	 *
	 * @return string
	 */
	public static function ganti($id, $username, $password, $nama_tampilan, $avatar)
	{
		$temp = Satpam::find($id);
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
	 *
	 * @return string
	 */
	public static function hapus($id) 
	{
		Satpam::destroy($id);
	}

	/**
	 * Ubah nama pengguna / username
	 *
	 * @return string
	 */
	public static function username($id, $username_baru)
	{
		$temp = Satpam::find($id);
		$temp->username = $username_baru;
		$temp->save();
	}

	/**
	 * Ubah kata sandi / password
	 *
	 * @return string
	 */
	public static function password($id, $password_baru)
	{
		$temp = Satpam::find($id);
		$temp->password = $password_baru;
		$temp->save();
	}

	/**
	 * Ubah nama tampilan
	 *
	 * @return string
	 */
	public static function nama_tampilan($id, $nama_tampilan)
	{
		$temp = Satpam::find($id);
		$temp->nama_tampilan = $nama_tampilan;
		$temp->save();
	}

	/**
	 * Ubah avatar
	 *
	 * @return string
	 */
	public static function avatar($id, $avatar)
	{
		$temp = Satpam::find($id);
		$temp->avatar = $avatar;
		$temp->save();
	}

}