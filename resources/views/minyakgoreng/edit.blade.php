@extends('template')



@section('content')
	<h3>Edit Minyak Goreng</h3>

	<a href="/minyak" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($minyakgoreng as $m)
	<form action="/minyak/update/" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $m->ID }}">
        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="merk">Merk</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merk" name="merk"
                       placeholder="Masukkan Merk" required="required" value="{{ $m->merkminyakgoreng }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="harga">Harga</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="harga" name="harga"
                       placeholder="Masukkan Harga" required="required" value="{{ $m->hargaminyakgoreng }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="tersedia">
                <input type="checkbox" name="tersedia" value="{{ $m->tersedia }}"> Stok Tersedia
            </label>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="berat">Berat</label>
            <div class="col-sm-6">
            <input class="form-control" type="number" id="berat" name="berat"
                   step="any" required="required" value="{{ $m->berat }}">
            </div>
        </div>

		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
