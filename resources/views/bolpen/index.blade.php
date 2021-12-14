@extends('layout.bahagia')

@section('title', 'Data Bolpen')
@section('judulhalaman', 'Data Bolpen')

@section('content')

    <div class="row mt-3">
        <div class="col-sm-5">
            <a class="btn btn-primary rounded-pill shadow" href="/bolpen/tambah"> + Tambah Bolpen Baru</a>
        </div>
        <div class="col-sm-7 container" align="right">
            <form action="/bolpen/cari" method="GET">
                <div class="input-group shadow-sm">
                    <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari Merk Bolpen" value="{{ old('cari') }}">
                    <div class="input-group-append">
                        <input type="submit" class="btn btn-primary" value="Cari">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br>

	<table border="1">
		<tr>
			<th style="width:25%">Merk Bolpen</th>
			<th style="width:15%">Stock Bolpen</th>
            <th style="width:15%">Status</th>

			<th style="width:35%">Opsi</th>
		</tr>
		@foreach($bolpen as $b) <!--khusus menampilkan array-->
		<tr>
			<td>{{ $b->merkbolpen }}</td>
			<td>{{ $b->stockbolpen }}</td>
            <td> @if ($b->tersedia === "A") Tersedia
                @elseif ($b->tersedia === "K") Kosong
                @elseif ($b->tersedia === "P") Dalam Pemesanan
                @endif
            </td>
			<td class="px-0">
                <a class="btn btn-info shadow-sm btn-sm px-3 mr-1 rounded-pill" href="/bolpen/view/{{ $b->kodebolpen }}">View Details</a>
				<a class="btn btn-secondary shadow-sm btn-sm px-3 mr-1 rounded-pill" href="/bolpen/edit/{{ $b->kodebolpen }}">Edit</a>
				<a class="btn btn-dark shadow-sm btn-sm px-3 rounded-pill" href="/bolpen/hapus/{{ $b->kodebolpen }} ">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br>
    {{ $bolpen->links() }}
    <a href="/bolpen">Home</a>
@endsection
