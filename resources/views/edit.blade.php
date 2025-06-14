@extends('template')



@section('content')
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update/{{ $m->ID }}" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
            <label class="control-label col-sm-2" required="required" for="nama">Nama</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="nama" name="nama"
                       placeholder="Masukkan Nama" required="required" value="{{ $p->nama }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="harga">Harga</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="harga" name="harga"
                       placeholder="Masukkan Harga" required="required" value="{{ $p->hargaminyakgoreng }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="tersedia">
                <input type="checkbox" name="tersedia" value="1" {{ $m->tersedia ? 'checked' : '' }}> Stok Tersedia
            </label>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="berat">Berat</label>
            <div class="col-sm-6">
            <input class="form-control" type="number" id="berat" name="berat"
                   step="any" required="required" value="{{ $p->alamat }}">
            </div>
        </div>

		<input class="btn btn-success" type="submit" value="Simpan">
	</form>
	@endforeach
    {{ $pegawai->links() }}
@endsection
