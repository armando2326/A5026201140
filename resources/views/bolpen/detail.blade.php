@extends('layout.bahagia')

@section('title', 'Detail Data Bolpen')
@section('judulhalaman', 'Data Bolpen')

@section('content')

    @foreach($bolpen as $b)
        <input type="hidden" name="kodebolpen" value="{{ $b->kodebolpen }}"> <br/>
        <div class="form-group">
            <label for="merkbolpen">Merk Bolpen</label>
            <div class="form-control" name="merkbolpen" id="merkbolpen">{{ $b->merkbolpen }}</div>
        </div>
        <div class="form-group">
            <label for="stockbolpen">Stock Bolpen</label>
            <div  class="form-control" name="stockbolpen"  id="stockbolpen">{{ $b->stockbolpen }}</div>
        </div>
        <div class="form-group">
            <label for="tersedia">Status</label>
            <div class="form-control" name="tersedia"  id="tersedia">
                @if ($b->tersedia === "A") Tersedia
                @elseif ($b->tersedia === "K") Kosong
                @elseif ($b->tersedia === "P") Dalam Pemesanan
                @endif
            </div>
        </div>
    <br>
    @endforeach
    <a href="/bolpen"> Kembali</a>
@endsection
