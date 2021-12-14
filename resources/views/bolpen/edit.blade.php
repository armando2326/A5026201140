@extends('layout.bahagia')

@section('title', 'Edit Data Bolpen')
@section('judulhalaman', 'Edit Bolpen')

@section('content')

	@foreach($bolpen as $b)
        <form action="/bolpen/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="kodebolpen" value="{{ $b->kodebolpen }}"> <br/>

            <div class="form-group">
                <label for="merkbolpen">Merk Bolpen</label>
                <input class="form-control" type="text" name="merkbolpen" id="merkbolpen" required="required" value="{{ $b->merkbolpen }}">
            </div>
            <div class="form-group">
                <label for="stockbolpen">Stock Bolpen</label>
                <input class="form-control" type="number" name="stockbolpen"  id="stockbolpen" required="required" value="{{ $b->stockbolpen }}">
            </div>
            <div class="form-group">
                <label>Status</label>
                <div class="px-4">
                    <input type="radio" id="ada" name="tersedia" value="A" @if ($b->tersedia === "A") checked="checked" @endif>
                    <label for="ada">Tersedia</label><br>
                    <input type="radio" id="kosong" name="tersedia" value="K" @if ($b->tersedia === "K") checked="checked" @endif>
                    <label for="kosong">Kosong</label><br>
                    <input type="radio" id="pemesanan" name="tersedia" value="P" @if ($b->tersedia === "P") checked="checked" @endif>
                    <label for="pemesanan">Dalam Pemesanan</label>
                </div>
            </div>

            <div class="row justify-content-center">
                <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
            </div>
        </form>
    @endforeach
    <br>
    <a href="/bolpen"> Kembali</a>
@endsection
