<!DOCTYPE html>
<html>
<head>
	<title>Tugas PWEB Query Builder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background-color: #2E4C6D;
    }

    td, th {
        padding: 10px;
        text-align: center;
    }

    .card {
        border-radius: 25px;
        box-shadow: 7px 7px 10px 5px rgba(0, 0, 0, 0.05);
    }

    </style>
</head>
<body>
    <div class="row justify-content-center no-gutters">
        <div class="col-sm-8">
            <div class="card mt-5 p-sm-5">

            <h3 style="text-align: center">Data Tugas</h3>

            <div class="row mt-3">
                <div class="col-sm-5">
	                <a class="btn btn-primary" href="/tugas/tambah"> + Tambah Tugas Baru</a>
                </div>
            </div>

	        <br/>

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
                    <td style="width: 350px;">{{ $t->NamaTugas }}</td>
                    <td>{{ $t->Status }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm mr-1" href="/tugas/edit/{{ $t->ID }}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>

</body>
</html>
