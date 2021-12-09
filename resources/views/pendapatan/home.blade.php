@extends('layout.bahagia')

@section('title', 'Data Pendapatan Pegawai')
@section('judulhalaman', 'Data Pendapatan Pegawai')

@section('content')
            <div class="row mt-3">
                <div class="col-sm-5">
	                <a  class="btn btn-primary rounded-pill shadow" href="/pendapatan/tambah"> + Tambah Data Pendapatan</a>
                </div>
            </div>

	        <br>

            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>ID Pegawai</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Gaji</th>
                    <th>Tunjangan</th>
                    <th>Opsi</th>
                </tr>
                @foreach($pendapatan as $p)
                <tr>
                    <td>{{ $p->ID }}</td>
                    <td>{{ $p->IDPegawai }}</td>
                    <td>{{ $p->Bulan }}</td>
                    <td>{{ $p->Tahun }}</td>
                    <td>{{ $p->Gaji }}</td>
                    <td>{{ $p->Tunjangan }}</td>
                    <td>
                        <a class="btn btn-secondary shadow-sm btn-sm px-3 mr-1 rounded-pill" href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
                        <a class="btn btn-dark shadow-sm btn-sm px-3 rounded-pill" href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
@endsection
