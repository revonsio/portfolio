<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class nilaikuliahController extends Controller
{
    public function index()
    {
        //DB::table('')->get(); //mengembalikan array of object
    	//mengambil data dari table nilaikuliah
    	//$nilaikuliah = DB::table('nilaikuliah')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(4);

    	// mengirim data nilaikuliah ke view index
    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]); //paassing value bisa lebih dari satu

    }

        // method untuk menampilkan view form tambah nilaikuliah
    public function tambah()
    {

        // memanggil view tambah
        return view('nilaikuliah.tambah');

    }

        // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'ID' => $request->id,
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks,
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');

    }
        public function edit($id)
    {
        // mengambil data nilaikuliah berdasarkan id yang dipilih
        $nilaikuliah = DB::table('nilaikuliah')->where('ID',$id)->get();
        // passing data nilaikuliah yang didapat ke view edit.blade.php
        return view('nilaikuliah.edit',['nilaikuliah' => $nilaikuliah]);

    }
    // update data nilaikuliah
    public function update(Request $request)
    {
        // update data nilaikuliah
        DB::table('nilaikuliah')->where('ID',$request->kode)->update([
            'ID' => $request->id,
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks,
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }
    // method untuk hapus data nilaikuliah
    public function hapus($id)
    {
        // menghapus data nilaikuliah berdasarkan id yang dipilih
        DB::table('nilaikuliah')->where('ID',$id)->delete();

        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }

    //method untuk pencarian
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;


		$nilaikuliah = DB::table('nilaikuliah')
		->where('NRP','like',"%".$cari."%")
		->paginate();


		return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]);

	}

    public function view($id)
    {
        // mengambil data nilaikuliah berdasarkan id yang dipilih
        $nilaikuliah = DB::table('nilaikuliah')->where('ID',$id)->get();
        // passing data nilaikuliah yang didapat ke view edit.blade.php
        return view('nilaikuliah.detail',['nilaikuliah' => $nilaikuliah]);

    }

}

