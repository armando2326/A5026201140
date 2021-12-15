@extends('layout.bahagia')

@section('title', 'Data Karyawan')
@section('judulhalaman', 'Data Karyawan')

@section('content')

    <div class="row mt-3">
        <div class="col-sm-5">
            <a class="btn btn-primary rounded-pill shadow" href="/karyawan1/tambah">Tambah Data</a>
        </div>
    </div>

    <br>

	<table border="1">
		<tr>
			<th style="width:20%">NIP</th>
			<th style="width:20%">Nama</th>
            <th style="width:20%">Pangkat</th>
            <th style="width:20%">Gaji</th>

			<th style="width:20%">Opsi</th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
			<td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama }}</td>
            <td>{{ $k->Pangkat }}</td>
            <td>{{ number_format($k->Gaji,0,",",".") }}</td>
			<td class="px-0">
				<a class="btn btn-dark shadow-sm btn-sm px-3 rounded-pill" href="/karyawan1/konfirmasihapus/{{ $k->NIP }}">Hapus Data</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br>
@endsection
