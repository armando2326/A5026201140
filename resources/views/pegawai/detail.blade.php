@extends('layout.bahagia')

@section('title', 'Edit Data Pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('content')

	@foreach($pegawai as $p)
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group">
            <label for="nama">Nama</label>
            <div class="form-control" name="nama" id="nama">{{ $p->pegawai_nama }}</div>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <div  class="form-control" name="jabatan"  id="jabatan">{{ $p->pegawai_jabatan }}</div>
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <div class="form-control" name="umur"  id="umur">{{ $p->pegawai_umur }}</div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <div class="form-control" id="alamat" name="alamat">{{ $p->pegawai_alamat }}</div>
        </div>
    <br>
    @endforeach
    <a href="/pegawai"> Kembali</a>
@endsection
