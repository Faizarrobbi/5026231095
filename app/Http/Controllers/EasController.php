<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EasController extends Controller
{
    public function nilai()
    {
    	// mengambil data dari table pegawai
    	$nilai = DB::table('nilai')->get();

    	// mengirim data pegawai ke view index
    	return view('/nilai',['nilai' => $nilai]);

    }

    public function tambah()
    {

        // memanggil view tambah
        return view('/nilaitambah');

    }

    // method untuk insert data ke table minyak goreng
    public function store(Request $request)
    {
        // insert data ke table minyak goreng
        $nilai = DB::table('nilai')->insert([
            'nomorinduksiswa' => $request->nrp,
            'nilaiangka' => $request->angka,
            'sks' => $request->sks,
        ]);
        // alihkan halaman ke halaman minyak goreng
        return redirect('/eas');

    }
}
