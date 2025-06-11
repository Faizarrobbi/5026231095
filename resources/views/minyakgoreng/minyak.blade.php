@extends('template')



@section('content')
	<h3>Data Minyak Goreng</h3>

	<a href="/minyak/tambah" class="btn btn-primary"> + Tambah Stok Minyak Baru</a>
    <p>Cari Minyak Goreng :</p>
    <form action="/minyak/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Minyak Goreng .." value="{{ old('cari') }}">
        <input type="submit" value="Cari" class="btn btn-info">
    </form>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($minyakgoreng as $m)
		<tr>
			<td>{{ $m->merkminyakgoreng }}</td>
			<td>{{ $m->hargaminyakgoreng }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>{{ $m->berat }}</td>
			<td>
				<a href="/minyak/edit/{{ $m->ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/minyak/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
