<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MinyakGorengController extends Controller
{
    public function minyak()
    {
    	// mengambil data dari table pegawai
    	$minyakgoreng = DB::table('minyakgoreng')->get();

    	// mengirim data pegawai ke view index
    	return view('minyakgoreng/minyak',['minyakgoreng' => $minyakgoreng]);

    }

    // method untuk menampilkan view form tambah minyak goreng
    public function tambah()
    {

        // memanggil view tambah
        return view('minyakgoreng/tambah');

    }


    // method untuk insert data ke table minyak goreng
    public function store(Request $request)
    {
        // insert data ke table minyak goreng
        $minyakgoreng = DB::table('minyakgoreng')->insert([
            'merkminyakgoreng' => $request->merk,
            'hargaminyakgoreng' => $request->harga,
            'tersedia' => $request->has('tersedia') ? 1 : 0,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman minyak goreng
        return redirect('/minyak');

    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data minyak goreng berdasarkan id yang dipilih
        $minyakgoreng = DB::table('minyakgoreng')->where('ID',$id)->get();
        // passing data minyak goreng yang didapat ke view edit.blade.php
        return view('minyakgoreng/edit',['minyakgoreng' => $minyakgoreng]);

    }

    // Method untuk update data minyak goreng
    public function update(Request $request)
    {
        
	    // update data minyak goreng
	    $minyakgoreng = DB::table('minyakgoreng')->where('ID',$request->id)->update([
		    'merkminyakgoreng' => $request->merk,
            'hargaminyakgoreng' => $request->harga,
            'tersedia' => $request->has('tersedia') ? 1 : 0,
            'berat' => $request->berat
        ]);
	    // alihkan halaman ke halaman minyak goreng
	    return redirect('/minyak');
    }

    // method untuk hapus data monyak goreng
    public function hapus($id)
    {
        // menghapus data minyak goreng berdasarkan id yang dipilih
        $minyakgoreng = DB::table('minyakgoreng')->where('ID',$id)->delete();

        // alihkan halaman ke halaman minyak goreng
        return redirect('/minyak');
    }

    // Method untuk mencari data minyak goreng
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$minyakgoreng = DB::table('minyakgoreng')
		->where('merkminyakgoreng','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('minyakgoreng/minyak',['minyakgoreng' => $minyakgoreng]);

	}
}
