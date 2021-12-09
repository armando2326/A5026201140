@extends('layout.bahagia')

@section('title', 'Edit Tugas Pegawai')
@section('judulhalaman', 'Edit Tugas Pegawai')

@section('content')
            @foreach($tugas as $t)
            <form action="/tugas/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $t->ID }}">
                <div class="form-group">
                    <label for="idpegawai">ID Pegawai</label>
                    <input class="form-control" type="number" id="idpegawai" name="idpegawai" required="required" value="{{ $t->IDPegawai }}">
                </div>
                <div class="form-group">
                    <label for="idpegawai">Tanggal</label>
                    <input class="form-control" type="datetime-local" id="tanggal" name="tanggal" required="required" value="{{ date('Y-m-d\TH:i', strtotime($t->Tanggal)) }}">
                </div>
                <div class="form-group">
                    <label for="namatugas">Nama Tugas</label>
                    <textarea class="form-control" id="namatugas" name="namatugas" required="required" maxlength="50">{{ $t->NamaTugas }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input class="form-control" type="text" id="status" name="status" required="required" value="{{ $t->Status }}" maxlength="1">
                </div>
                <div class="row justify-content-center">
                    <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
                </div>
            </form>
        <br>
        <a href="/tugas"> Kembali</a>
        @endforeach
    @endsection
