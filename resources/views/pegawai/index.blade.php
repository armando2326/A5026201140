@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Data Pegawai')

@section('content')

    <div class="row mt-3">
        <div class="col-sm-5">
            <a class="btn btn-primary rounded-pill shadow" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
        </div>
    </div>

    <br>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p) <!--khusus menampilkan array-->
		<tr>
			<td style="max-width: 340px;">{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-secondary shadow-sm btn-sm px-3 mr-1 rounded-pill" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				<a class="btn btn-dark shadow-sm btn-sm px-3 rounded-pill" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
