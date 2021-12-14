@extends('layout.bahagia')

@section('title', 'CRUD Tabel Absen')
@section('judulhalaman', 'Daftar Absensi Pegawai')

@section('content')

    <div class="row mt-3">
        <div class="col-sm-5">
            <a class="btn btn-primary rounded-pill shadow" href="/absen/add"> + Tambah Absensi</a>
        </div>
    </div>

    <br>

	<table border="1">
		<tr>

			<th>Nama</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a class="btn btn-secondary shadow-sm btn-sm px-3 mr-1 rounded-pill" href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				<a class="btn btn-dark shadow-sm btn-sm px-3 rounded-pill" href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
    </p>
    {{ $absen->links() }}
    <a href="/absen">Home</a>
@endsection
