<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BolpenController extends Controller
{
    public function index()
    {
        $bolpen = DB::table('bolpen')->paginate(5);
        return view('bolpen.index', ['bolpen' => $bolpen]);
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$bolpen = DB::table('bolpen')
		->where('merkbolpen','like',"%".$cari."%")
		->paginate(10);

		return view('bolpen.index',['bolpen' => $bolpen]);

	}

    public function detail($kodebolpen)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $bolpen = DB::table('bolpen')->where('kodebolpen', $kodebolpen)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('bolpen.detail', ['bolpen' => $bolpen]);
    }

    public function edit($kodebolpen)
    {
        $bolpen = DB::table('bolpen')->where('kodebolpen', $kodebolpen)->get();
        return view('bolpen.edit', ['bolpen' => $bolpen]);
    }

    public function hapus($kodebolpen)
    {
        DB::table('bolpen')->where('kodebolpen', $kodebolpen)->delete();
        return redirect('/bolpen');
    }

    public function simpan(Request $request)
    {
        DB::table('bolpen')->insert([
            'merkbolpen' => $request->merkbolpen,
            'stockbolpen' => $request->stockbolpen,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/bolpen');
    }

    public function tambah()
    {
        return view('bolpen.tambah');
    }

    public function update(Request $request)
    {
        DB::table('bolpen')->where('kodebolpen', $request->kodebolpen)->update([
            'merkbolpen' => $request->merkbolpen,
            'stockbolpen' => $request->stockbolpen,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/bolpen');
    }

}
