<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    //oop :  object oriented programming
    // class = properties + method
    public function index()
    {
        return 'Hello dari BelajarController index';
    }
    
    public function create()
    {
        return view('create');
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function bagi()
    {
        return view('bagi');
    }
    public function kali()
    {
        return view('kali');
    }
    public function kurang()
    {
        return view('kurang');
    }

    public function kurangAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->post('angka2');
        $hasil = $angka1 - $angka2;
        return view('kurang', compact('hasil')); 
    }

    public function tambahAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->post('angka2');
        $hasil = $angka1 + $angka2;
        return view('tambah', compact('hasil'));
    }

    public function kaliAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->post('angka2');
        $hasil = $angka1 * $angka2;
        return view('kali', compact('hasil'));
    }

    public function bagiAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->post('angka2');
        $hasil = $angka1 / $angka2;
        return view('bagi', compact('hasil'));
    }
}


