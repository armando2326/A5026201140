@extends('layout.bahagia')

@section('title', 'Tambah Data Karyawan')
@section('judulhalaman', 'Tambah Karyawan')

@section('content')

	<form action="/karyawan1/simpan" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="nip">NIP</label>
            <input class="form-control" type="text" name="nip" id="nip" required="required" maxlength="9">
        </div>
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" required="required" maxlength="50">
        </div>
        <div class="form-group">
            <label for="pangkat">Pangkat</label>
            <input class="form-control" type="text" name="pangkat" id="pangkat" required="required" maxlength="15">
        </div>
        <div class="form-group">
            <label for="Gaji">Gaji</label>
            <input class="form-control" type="text" name="gaji" id="gaji" required="required" maxlength="10">
        </div>
        <div class="row justify-content-center">
            <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
        </div>
    </form>
    <br>
    <a href="/karyawan1"> Kembali</a>
@endsection
