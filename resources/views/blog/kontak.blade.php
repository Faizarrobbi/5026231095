<!-- Menghubungkan dengan view template master -->
@extends('blog/master')

<!-- isi bagian judul halaman -->
@section('title','Halaman Blog')
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini Adalah Halaman Kontak</p>

	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>hmmaewes@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>081357036330</td>
		</tr>
	</table>

@endsection

@section('footer')
    <i class="fa fa-copyright" aria-hidden="true">Akhtar Zia</i>
@endsection
