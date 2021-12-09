@extends('layout.bahagia')

@section('title', 'Edit Data Pendapatan Pegawai')
@section('judulhalaman', 'Edit Pendapatan Pegawai')

@section('content')
            @foreach($pendapatan as $p)
            <form action="/pendapatan/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->ID }}">
                <div class="form-group">
                    <label for="idpegawai">ID Pegawai</label>
                    <input class="form-control" type="number" id="idpegawai" name="idpegawai" required="required" value="{{ $p->IDPegawai }}">
                </div>
                <div class="form-group">
                    <label for="bulan">bulan</label>
                    <input class="form-control" type="number" id="bulan" name="bulan" required="required" value="{{ $p->Bulan }}" min="1" max="12">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input class="form-control" type="text" id="tahun" name="tahun" required="required" value="{{ $p->Tahun }}" maxlength="4">
                </div>
                <div class="form-group">
                    <label for="gaji">Gaji</label>
                    <input class="form-control" type="number" id="gaji" name="gaji" required="required" value="{{ $p->Gaji }}" >
                </div>
                <div class="form-group">
                    <label for="tunjangan">Tunjangan</label>
                    <input class="form-control" type="number" id="tunjangan" name="tunjangan" required="required" value="{{ $p->Tunjangan }}">
                </div>
                <div class="row justify-content-center">
                    <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
                </div>
            </form>
            @endforeach
        <br>
        <a href="/pendapatan"> Kembali</a>
@endsection
