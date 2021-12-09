@extends('layout.bahagia')

@section('title', 'Tambah Data Tugas')
@section('judulhalaman', 'Tambah Tugas Pegawai')

@section('content')

        <form action="/tugas/store" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="idpegawai">ID Pegawai</label>
                    <input class="form-control" type="number" id="idpegawai" name="idpegawai" required="required">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input class="form-control" type="datetime-local" id="tanggal" name="tanggal" required="required">
                </div>
                <div class="form-group">
                    <label for="namatugas">Nama Tugas</label>
                    <textarea class="form-control" id="namatugas" name="namatugas" required="required" maxlength="50"></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input class="form-control" type="text" id="status" name="status" required="required" maxlength="1">
                </div>

                <div class="row justify-content-center">
                    <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
                </div>
        </form>
    <br>
    <a href="/tugas"> Kembali</a>
@endsection
