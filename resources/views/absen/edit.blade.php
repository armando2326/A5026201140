@extends('layout.bahagia')

@section('title', 'Mengedit Data Absensi')
@section('judulhalaman', 'Edit Absensi Pegawai')

@section('content')

<h3>{{$judul}}</h3>
	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">

        <div class="form-group">
            <label for="idpegawai">ID Pegawai</label><br>
            <select name="idpegawai" id="idpegawai">
                @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
                <label for="dtpickerdemo">Tanggal</label>
                <div class="input-group date" id="dtpickerdemo">
                    <input type='text' class="form-control" name="tanggal" required="required" value=" {{$a->Tanggal}}">
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
                <input type="radio" id="izin" name="status" value="I" @if ($a->Status === "I") checked="checked" @endif>
                <label for="izin">Izin</label><br>
                <input type="radio" id="sakit" name="status" value="S" @if ($a->Status === "S") checked="checked" @endif>
                <label for="sakit">Sakit</label><br>
                <input type="radio" id="alpha" name="status" value="A" @if ($a->Status === "A") checked="checked" @endif>
                <label for="alpha">Alpha</label>
            </div>
        </div>

        <div class="row justify-content-center">
            <input class="btn btn-success rounded-pill shadow" type="submit" value="Simpan Data">
        </div>
    @endforeach
    </form>
    <br>
    <a href="/absen"> Kembali</a>

@endsection
