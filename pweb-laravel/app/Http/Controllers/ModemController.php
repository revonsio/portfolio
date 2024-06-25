<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ModemController extends Controller
{
    public function index()
    {
        //DB::table('')->get(); //mengembalikan array of object
    	// mengambil data dari table modem
    	//$modem = DB::table('modem')->get();
        $modem = DB::table('modem')->paginate(4);

    	// mengirim data modem ke view index
    	return view('modem.index',['modem' => $modem]); //paassing value bisa lebih dari satu

    }

        // method untuk menampilkan view form tambah modem
    public function tambah()
    {

        // memanggil view tambah
        return view('modem.tambah');

    }

        // method untuk insert data ke table modem
    public function store(Request $request)
    {
        // insert data ke table modem
        DB::table('modem')->insert([
            'kodemodem' => $request->kode,
            'merkmodem' => $request->merk,
            'stockmodem' => $request->stock,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman modem
        return redirect('/modem');

    }
        public function edit($id)
    {
        // mengambil data modem berdasarkan id yang dipilih
        $modem = DB::table('modem')->where('kodemodem',$id)->get();
        // passing data modem yang didapat ke view edit.blade.php
        return view('modem.edit',['modem' => $modem]);

    }
    // update data modem
    public function update(Request $request)
    {
        // update data modem
        DB::table('modem')->where('kodemodem',$request->kode)->update([
            'kodemodem' => $request->kode,
            'merkmodem' => $request->merk,
            'stockmodem' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman modem
        return redirect('/modem');
    }
    // method untuk hapus data modem
    public function hapus($id)
    {
        // menghapus data modem berdasarkan id yang dipilih
        DB::table('modem')->where('kodemodem',$id)->delete();

        // alihkan halaman ke halaman modem
        return redirect('/modem');
    }

    //method untuk pencarian
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;


		$modem = DB::table('modem')
		->where('merkmodem','like',"%".$cari."%")
        ->orWhere('tersedia','like',"%".$cari."%")
		->paginate();


		return view('modem.index',['modem' => $modem]);

	}

    public function view($id)
    {
        // mengambil data modem berdasarkan id yang dipilih
        $modem = DB::table('modem')->where('kodemodem',$id)->get();
        // passing data modem yang didapat ke view edit.blade.php
        return view('modem.detail',['modem' => $modem]);

    }

}

