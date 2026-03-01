<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\dataku;

class TestingController
{
    public function index(){
        $dataku = dataku::all();
        return view('welcome', compact('dataku'));
    }

    public function tambah_tampil(){
        return view('tambah');  
    }

    public function delete_data($id)
    {
        $hapus = dataku::findOrFail($id);
        $hapus->delete();

        return redirect('/')->with('success', 'Data berhasil dihapus');
    }

    public function tambah_data(Request $request) 
    {
        dataku::create([
            'nama'   => $request->nama,
            'kelas'  => $request->kelas,
            'telp'   => $request->telp,
            'alamat' => $request->alamat,
        ]);

        return redirect('/')->with('success', 'Data berhasil ditambahkan');
    }
}
