<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('tugas4', function () {
    return view('tugas4js') ;
});
Route::get('praktikum2', function () {
        return view('praktikum2jsjq') ;
});

//melalui controller
Route::get('ets2021',"ViewController@showETS") ;
Route::get('tugasphp',"ViewController@showTugasphp") ;
Route::post('resultphp',"ViewController@resultphp") ;

//route CRUD tabel pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//route CRUD tabel pendapatan
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

//route CRUD tabel absen
Route::get('/absen', 'AbsenController@index');
Route::get('/absen/tambah', 'AbsenController@tambah');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');

//CRUD tabel modem
Route::get('/modem','ModemController@index');
Route::get('/modem/tambah','ModemController@tambah');
Route::post('/modem/store','ModemController@store');
Route::get('/modem/edit/{id}','ModemController@edit');
Route::post('/modem/update','ModemController@update');
Route::get('/modem/hapus/{id}','ModemController@hapus');
Route::get('/modem/cari','ModemController@cari');
Route::get('/modem/detail/{id}','ModemController@view');

//CRUD tabel nilaikuliah
Route::get('/nilaikuliah','NilaikuliahController@index');
Route::get('/nilaikuliah/tambah','NilaikuliahController@tambah');
Route::post('/nilaikuliah/store','NilaikuliahController@store');
Route::get('/nilaikuliah/edit/{id}','NilaikuliahController@edit');
Route::post('/nilaikuliah/update','NilaikuliahController@update');
Route::get('/nilaikuliah/hapus/{id}','NilaikuliahController@hapus');
Route::get('/nilaikuliah/cari','NilaikuliahController@cari');
Route::get('/nilaikuliah/detail/{id}','NilaikuliahController@view');
