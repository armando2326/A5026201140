@extends('layout.bahagia')

@section('title', 'Menambah Absen')
@section('judulhalaman', 'Menambah Data Absen')

@section('content')
    <form action="/absen/store" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="idpegawai">ID Pegawai</label><br>
            <select name="idpegawai" id="idpegawai">
                @foreach($pegawai as $p)
                 <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
                <label for="dtpickerdemo">Tanggal</label>
                <div class="input-group date" id="dtpickerdemo">
                    <input type='text' class="form-control" name="tanggal" required="required" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            <script type="text/javascript">
                $(function() {
                    $('#dtpickerdemo').datetimepicker({
                        format: 'YYYY-MM-DD hh:mm:ss',
                        showTodayButton: false,
                        locale : 'id',
                        "defaultDate": new Date(),
                    });
                });
            </script>
        </div>

        <div class="form-group">
            <label>Status</label>
            <div class="px-4">
                <input type="radio" id="izin" name="status" value="I">
                <label for="izin">Izin</label><br>
                <input type="radio" id="sakit" name="status" value="S" checked="checked">
                <label for="sakit">Sakit</label><br>
                <input type="radio" id="alpha" name="status" value="A">
                <label for="alpha">Alpha</label>
            </div>
        </div>

        <div class="row justify-content-center">
            <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
        </div>
    </form>
    <br>
    <a href="/absen"> Kembali</a>
@endsection
