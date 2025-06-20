@extends('template')



@section('content')
	<h3>Nilai Kuliah</h3>

    <a href="/eas/tambah" class="btn btn-primary"> + Tambah Data</a>


    <br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilai as $n)
		<tr>
			<td>{{ $n->id }}</td>
			<td>{{ $n->nomorinduksiswa }}</td>
			<td>{{ $n->nilaiangka }}</td>
			<td>{{ $n->sks }}</td>
            <td>
                @php
                    if($n->nilaiangka <= 40){
                        echo 'D';
                    }
                    elseif($n->nilaiangka <= 60){
                        echo 'C';
                    }
                    elseif($n->nilaiangka <= 80){
                        echo 'B';
                    }
                    else {
                        echo 'A';
                    }
                @endphp
            </td>
            <td>{{$n->sks * $n->nilaiangka}}</td>

		</tr>
		@endforeach
	</table>

@endsection
