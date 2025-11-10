<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagi bagiin</title>

</head>

<body>
    <h3>Matematika Sederhana</h3>
    <form action="{{ route('bagi-action') }}" method="POST">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" placeholder="Masukkin Angka loe" name="angka1" required>
        <br><br>
        <label for="">Angka 2</label>
        <input type="text" placeholder="Masukkin Angka lau" name="angka2" required>
        <br><br>
        <button>Bagiin</button>
    </form>

    <h2>Hasil pembagian adalah : {{ $hasil ?? '' }} </h2>
    <p>Pilih menu aritmatika dibawah ini</p>
    <a href="{{ url('aritmatika/tambah') }}">Tambah</a>
    <a href="{{ url('aritmatika/kurang')}}">Kurang</a>
    <a href="{{ route('aritmatika.kali') }}">Kali</a>
    <a href="{{ route('aritmatika.bagi') }}">Bagi</a>
</body>

</html>