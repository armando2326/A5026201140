@extends('layout.bahagia')

@section('title', 'Tambah Data Pegawai')
@section('judulhalaman', 'Tambah Pegawai')

@section('content')

    <form action="/pegawai/store" method="post">
		{{ csrf_field() }} <!-- Dapat juga menggunakan @ csrf-->

        <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" required="required">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input class="form-control" type="text" name="jabatan"  id="jabatan" required="required">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input class="form-control" type="number" name="umur"  id="umur" required="required">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required="required" maxlength="50"></textarea>
        </div>

        <div class="row justify-content-center">
            <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
        </div>
    </form>
    <br>
    <a href="/pegawai"> Kembali</a>
@endsection
