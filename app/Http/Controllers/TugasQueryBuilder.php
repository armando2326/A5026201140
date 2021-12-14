<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasQueryBuilder extends Controller
{

    public function home()
    {
        $tugas = DB::table('tugas')
        ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('tugas.*', 'pegawai.pegawai_nama')
        ->paginate(5) ;
        return view('tugasquerybuilder.home', ['tugas' => $tugas]);
    }

    public function tambah()
    {
        return view('tugasquerybuilder.tambah');
    }

    public function store(Request $request)
    {
        DB::table('tugas')->insert([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->namatugas,
            'Status' => $request->status
        ]);
        return redirect('/tugas');
    }

    public function edit($id)
    {
        $tugas = DB::table('tugas')->where('ID', $id)->get();
        return view('tugasquerybuilder.edit', ['tugas' => $tugas]);
    }

    public function update(Request $request)
    {
        DB::table('tugas')->where('ID', $request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->namatugas,
            'Status' => $request->status
        ]);
        return redirect('/tugas');
    }

    public function hapus($id)
    {
        DB::table('tugas')->where('ID', $id)->delete();
        return redirect('/tugas');
    }
}
