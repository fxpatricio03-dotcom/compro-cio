<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah-tambahan Tambah-tambahan</title>

</head>

<body>
    <h3>Matematika Sederhana</h3>
    <form action="{{ route('tambah-action') }}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" placeholder="Masukkan angka" name="angka1" required>
        <br><br>
        <label for="">Angka 2</label>
        <input type="text" placeholder="Masukkan angka" name="angka2" required>
        <br><br>
        <button>Jumlahkan</button>
    </form>

    <h2>Jumlahnya adalah : {{ $hasil ?? '' }} </h2>
    <p>Pilih menu aritmatika dibawah ini</p>
    <a href="{{ url('aritmatika/tambah') }}">Tambah</a>
    <a href="{{ url('aritmatika/kurang')}}">Kurang</a>
    <a href="{{ route('aritmatika.kali') }}">Kali</a>
    <a href="{{ route('aritmatika.bagi') }}">Bagi</a>

</body>

</html>