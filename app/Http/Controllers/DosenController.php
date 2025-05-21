<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function helloworld()
    {
        return view('blog');
    }

     public function index(){
    	$nama = "Diki Alfarabi Hadi";
        $umur = 19;
        $alamat = "Surabaya";
    	return view('biodata',['nama' => $nama,'usia' => $umur, 'alamat' => $alamat]);
    }

}
