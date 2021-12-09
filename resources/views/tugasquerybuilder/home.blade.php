@extends('layout.bahagia')

@section('title', 'Tugas PWEB Query Builder')
@section('judulhalaman', 'Data Tugas')

@section('content')
            <div class="row mt-3">
                <div class="col-sm-5">
	                <a  class="btn btn-primary rounded-pill shadow" href="/tugas/tambah"> + Tambah Tugas Baru</a>
                </div>
            </div>

	        <br>

            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>ID Pegawai</th>
                    <th>Tanggal</th>
                    <th>Nama Tugas</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
                @foreach($tugas as $t)
                <tr>
                    <td>{{ $t->ID }}</td>
                    <td>{{ $t->IDPegawai }}</td>
                    <td>{{ date('Y-m-d g:i A', strtotime($t->Tanggal)) }}</td>
                    <td style="width: 250px;">{{ $t->NamaTugas }}</td>
                    <td>{{ $t->Status }}</td>
                    <td>
                        <a class="btn btn-secondary shadow-sm btn-sm px-3 mr-1 rounded-pill" href="/tugas/edit/{{ $t->ID }}">Edit</a>
                        <a class="btn btn-dark shadow-sm btn-sm px-3 rounded-pill" href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
@endsection
