<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan1 = DB::table('karyawan1')->get();
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }

    public function hapus($nip)
    {
        DB::table('karyawan1')->where('NIP', $nip)->delete();
        return redirect('/karyawan1');
    }

    public function konfirmasihapus($nip)
    {
        $karyawan1 = DB::table('karyawan1')->where('NIP', $nip)->get();
        return view('karyawan1.hapus', ['karyawan1' => $karyawan1]);
    }

    public function simpan(Request $request)
    {
        DB::table('karyawan1')->insert([
            'NIP' => $request->nip,
            'Nama' => $request->nama,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji
        ]);
        return redirect('/karyawan1');
    }

    public function tambah()
    {
        return view('karyawan1.tambah');
    }

}
