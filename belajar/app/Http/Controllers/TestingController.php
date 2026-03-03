<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\dataku;

class TestingController
{
    //Conntroller Untuk Data Welcome
    public function index(){
        $dataku = dataku::all();
        return view('welcome', compact('dataku'));
    }

    //Untuk Menampilkan Halaman Tambah
    public function tambah_tampil(){
        return view('tambah');  
    }

    //Control Untuk Hapus Data
    public function delete_data($id)
    {
        $hapus = dataku::findOrFail($id);
        $hapus->delete();

        return redirect('/')->with('success', 'Data berhasil dihapus');
    }

    //Controll Untuk Menambah data ke database SQL
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
        
    //Control Untuk Mengedit Data
    public function update_sys(Request $request, $id){
        $data = dataku::findOrFail($id);
        
        $data->update([
            'nama'  =>  $request->nama,
            'kelas'  =>  $request->kelas,
            'telp'  =>  $request->telp,
            'alamatt'  =>  $request->alamat,
        ]);
        return redirect('/')->with('success', 'Data berhasil ditambahkan');
    }

    //Untuk Menampilkan Halaman Update Data
    public function editdataview($id){
        $data = dataku::findOrFail($id);
        return view('edit', compact('data'));
    }
}
