<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasQueryBuilder extends Controller
{

    public function home()
    {
        // mengambil data dari table pegawai
        $tugas = DB::table('tugas')->get();

        // mengirim data pegawai ke view index
        return view('tugasquerybuilder.home', ['tugas' => $tugas]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('tugasquerybuilder.tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('tugas')->insert([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->namatugas,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas'); //tidak return view karena jadi tidak fleksibel
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('ID', $id)->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugasquerybuilder.edit', ['tugas' => $tugas]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('tugas')->where('tugas', $request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->jabatan,
            'NamaTugas' => $request->umur,
            'Status' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tugas')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }
}
