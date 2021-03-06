@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Data Pegawai')

@section('content')

    <div class="row mt-3">
        <div class="col-sm-5">
            <a class="btn btn-primary rounded-pill shadow" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
        </div>
        <div class="col-sm-7 container" align="right">
            <form action="/pegawai/cari" method="GET">
                <div class="input-group shadow-sm">
                    <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat" value="{{ old('cari') }}">
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
			<th style="width:32.5%">Nama</th>
			<th style="width:32.5%">Alamat</th>

			<th style="width:35%">Opsi</th>
		</tr>
		@foreach($pegawai as $p) <!--khusus menampilkan array-->
		<tr>
			<td style="max-width: 340px;">{{ $p->pegawai_nama }}</td>

			<td>{{ $p->pegawai_alamat }}</td>
			<td class="px-0">
                <a class="btn btn-info shadow-sm btn-sm px-3 mr-1 rounded-pill" href="/pegawai/view/{{ $p->pegawai_id }}">View Details</a>
				<a class="btn btn-secondary shadow-sm btn-sm px-3 mr-1 rounded-pill" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				<a class="btn btn-dark shadow-sm btn-sm px-3 rounded-pill" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br>
    {{ $pegawai->links() }}
    <a href="/pegawai">Home</a>
@endsection
