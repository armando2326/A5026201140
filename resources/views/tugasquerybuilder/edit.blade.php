<!DOCTYPE html>
<html>
<head>
	<title>Edit Tugas Pegawai</title>
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

    .card {
        border-radius: 25px;
        box-shadow: 7px 7px 10px 5px rgba(0, 0, 0, 0.05);
    }
    </style>
</head>
<body>

    <div class="row justify-content-center no-gutters">
        <div class="col-sm-5">
            <div class="card mt-5 p-sm-5">

            <h3 style="text-align: center">Edit Tugas Pegawai</h3>

            <div class="row mt-3">
                <div class="col-sm-5">
                    <a class="btn btn-danger btn-sm mt-3" href="/tugas"> Kembali</a>
                </div>
            </div>

            <br>

            @foreach($tugas as $t)
            <form action="/tugas/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $t->ID }}">
                <div class="form-group">
                    <label for="idpegawai">ID Pegawai</label>
                    <input class="form-control" type="number" id="idpegawai" name="idpegawai" required="required" value="{{ $t->IDPegawai }}">
                </div>
                <div class="form-group">
                    <label for="idpegawai">Tanggal</label>
                    <input class="form-control" type="datetime-local" id="tanggal" name="tanggal" required="required" value="{{ date('Y-m-d\TH:i', strtotime($t->Tanggal)) }}">
                </div>
                <div class="form-group">
                    <label for="namatugas">Nama Tugas</label>
                    <textarea class="form-control" id="namatugas" name="namatugas" required="required" maxlength="50">{{ $t->NamaTugas }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input class="form-control" type="text" id="status" name="status" required="required" value="{{ $t->Status }}" maxlength="1">
                </div>
                <input class="btn btn-primary" type="submit" value="Simpan Data">
            </form>
            @endforeach
            </div>
        </div>
    </div>

</body>
</html>
