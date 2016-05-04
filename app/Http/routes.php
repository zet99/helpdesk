<?php

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::resource('help', 'helpdeskController');
Route::get('/', function () {
	if (Auth::check()) {
		return redirect('penanganan');
	}
	return view('baru');
});
Route::get('konfirmasi', 'helpdeskController@konfirmasi');

Route::group(['middleware' => array('auth')], function(){
	Route::get('penanganan', 'helpdeskController@penanganan');
	Route::post('penanganan', 'helpdeskController@penangananpost');
	Route::get('laporan', 'helpdeskController@laporan');
	Route::post('laporan', 'helpdeskController@cetakLap');
	Route::get('daftar', 'helpdeskController@daftar');
	Route::get('lihatDetail/{id}', 'helpdeskController@lihatDetail');
	Route::resource('user','UserController');
	Route::get('cetak_surat/{id}', 'helpdeskController@surat_spk');
});