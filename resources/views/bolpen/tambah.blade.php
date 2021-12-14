@extends('layout.bahagia')

@section('title', 'Tambah Data Bolpen')
@section('judulhalaman', 'Tambah Bolpen')

@section('content')

	<form action="/bolpen/simpan" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="merkbolpen">Merk Bolpen</label>
            <input class="form-control" type="text" name="merkbolpen" id="merkbolpen" required="required">
        </div>
        <div class="form-group">
            <label for="stockbolpen">Stock Bolpen</label>
            <input class="form-control" type="number" name="stockbolpen"  id="stockbolpen" required="required">
        </div>
        <div class="form-group">
            <label>Status</label>
            <div class="px-4">
                <input type="radio" id="ada" name="tersedia" value="A" checked="checked">
                <label for="ada">Tersedia</label><br>
                <input type="radio" id="kosong" name="tersedia" value="K">
                <label for="kosong">Kosong</label><br>
                <input type="radio" id="pemesanan" name="tersedia" value="P">
                <label for="pemesanan">Dalam Pemesanan</label>
            </div>
        </div>
        <div class="row justify-content-center">
            <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
        </div>
    </form>
    <br>
    <a href="/bolpen"> Kembali</a>
@endsection
