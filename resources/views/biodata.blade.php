<!DOCTYPE html>
<html>

<head>
    <title>Pertemuan 12.1</title>
</head>

<body>

    <h1>Tutorial Laravel</h1>
    <a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>


    <br>

    <p>Nama : {{ $nama }}</p>
    <p>Usia : {{ $umur }}</p>
    <p>Alamat : {{ $alamat }}</p>

    <p>Mata Pelajaran</p>
    <ul>

        @foreach ($matkul as $m)
            <li>{{ $m }}</li>
        @endforeach

    </ul>

</body>

</html>
