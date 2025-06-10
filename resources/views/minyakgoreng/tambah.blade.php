@extends('template')



@section('content')
	<h3>Data Minyak</h3>

	<a href="/minyak" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/minyak/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="merk">Merk</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merk" name="merk"
                       placeholder="Masukkan Merk" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="harga">Harga</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="harga" name="harga"
                       placeholder="Masukkan Harga" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="tersedia">
                <input type="checkbox" name="tersedia"> Stok Tersedia
            </label>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="berat">Berat</label>
            <div class="col-sm-6">
            <input class="form-control" type="number" id="berat" name="berat"
                   placeholder="Masukkan Berat" step="any" required>
            </div>
        </div>

		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
@endsection
