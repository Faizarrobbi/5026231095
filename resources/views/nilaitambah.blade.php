@extends('template')



@section('content')
	<h3>Tambah Data</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/eas/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="nrp">NRP</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="nrp" name="nrp"
                       placeholder="Masukkan NRP" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="angka">Nilai Angka</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="angka" name="angka"
                       placeholder="Masukkan Nilai Angka" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="sks">Jumlah SKS</label>
            <div class="col-sm-6">
            <input class="form-control" type="number" id="sks" name="sks"
                   placeholder="Masukkan Berat" step="any" required>
            </div>
        </div>

		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
@endsection
