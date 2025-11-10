<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>

</head>

<body>
    <h3>Matematika Sederhana</h3>
    <p>Pilih menu aritmatika dibawah ini</p>
    <a href="aritmatika/tambah">Tambah</a>
    <a href="{{ url('aritmatika/kurang')}}">Kurang</a>
    <a href="{{ route('aritmatika.kali') }}">Kali</a>
    <a href="{{ route('aritmatika.bagi') }}">Bagi</a>
</body>

</html>