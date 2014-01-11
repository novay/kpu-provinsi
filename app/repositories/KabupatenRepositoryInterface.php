<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

interface KabupatenRepositoryInterface {
	public function all();
	public function find($id);
	public function store($input);
	public function update($id, $input);
	public function destroy($id);
}
