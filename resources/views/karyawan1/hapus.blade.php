@extends('layout.bahagia')

@section('title', 'Hapus Data Pegawai')
@section('judulhalaman', 'Hapus Pegawai')

@section('content')

	@foreach($karyawan1 as $k)
		<input type="hidden" name="nip" value="{{ $k->NIP }}"> <br/>
        <div class="form-group">
            <label for="nip">NIP</label>
            <div class="form-control" name="nip" id="nip">{{ $k->NIP }}</div>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <div  class="form-control" name="nama" id="nama">{{ $k->Nama }}</div>
        </div>
        <div class="form-group">
            <label for="pangkat">Pangkat</label>
            <div class="form-control" name="pangkat" id="pangkat">{{ $k->Pangkat }}</div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <div class="form-control" name="gaji" id="gaji">{{ $k->Gaji }}</div>
        </div>
        <div class="row justify-content-center">
            <a class="btn btn-dark shadow-sm btn-sm px-3 rounded-pill" href="/karyawan1/hapus/{{ $k->NIP }}">Hapus Data</a>
        </div>
    <br>
    @endforeach
    <a href="/karyawan1"> Kembali</a>
@endsection
