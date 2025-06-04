@extends('template')



@section('content')
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="nama">Nama</label>
            <div class="col-sm-6">
            <input class="form-control" type="text" id="nama"
                   placeholder="Masukkan Nama">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="jabatan">Jabatan</label>
            <div class="col-sm-6">
            <input class="form-control" type="text" id="jabatan"
                   placeholder="Masukkan Jabatan">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="umur">Umur</label>
            <div class="col-sm-6">
            <input class="form-control" type="number" id="umur"
                   placeholder="Masukkan Umur">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" required="required" for="nama">Alamat</label>
            <div class="col-sm-6">
            <textarea class="form-control" type="text" id="alamat"
                   placeholder="Masukkan Alamat Lengkap"></textarea>
            </div>
        </div>

		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
@endsection
