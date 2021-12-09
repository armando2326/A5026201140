@extends('layout.bahagia')

@section('title', 'Tambah Data Pendapatan Pegawai')
@section('judulhalaman', 'Tambah Pendapatan Pegawai')

@section('content')
            <form action="/pendapatan/simpan" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="idpegawai">ID Pegawai</label>
                    <input class="form-control" type="number" id="idpegawai" name="idpegawai" required="required">
                </div>
                <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <input class="form-control" type="number" id="bulan" name="bulan" required="required" min="1" max="12">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input class="form-control" type="text" id="tahun" name="tahun" required="required" maxlength="4">
                </div>
                <div class="form-group">
                    <label for="gaji">Gaji</label>
                    <input class="form-control" type="number" id="gaji" name="gaji" required="required">
                </div>
                <div class="form-group">
                    <label for="tunjangan">Tunjangan</label>
                    <input class="form-control" type="number" id="tunjangan" name="tunjangan" required="required">
                </div>
                <div class="row justify-content-center">
                    <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
                </div>
            </form>
        <br>
        <a href="/pendapatan"> Kembali</a>
@endsection
