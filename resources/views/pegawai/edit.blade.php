@extends('layout.bahagia')

@section('title', 'Edit Data Pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('content')

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" required="required" value="{{ $p->pegawai_nama }}">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input class="form-control" type="text" name="jabatan"  id="jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input class="form-control" type="number" name="umur"  id="umur" required="required" value="{{ $p->pegawai_umur }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required="required" maxlength="50">{{ $p->pegawai_alamat }}</textarea>
        </div>

        <div class="row justify-content-center">
            <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
        </div>
    </form>
    @endforeach
    <br>
    <a href="/pegawai"> Kembali</a>
@endsection
