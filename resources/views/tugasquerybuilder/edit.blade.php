<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Edit Tugas Pegawai</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="idpegawai" required="required" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required" value="{{ $t->Tanggal }}"> <br/>
		Nama Tugas <textarea name="namatugas" required="required">{{ $t->NamaTugas }}</textarea> <br/>
		Status <input type="text" name="status" required="required" value="{{ $t->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
