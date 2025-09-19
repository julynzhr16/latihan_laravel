<!DOCTYPE html>
<html>
<head>
    <title>Data Mata kuliah</title>
</head>
<body>
    <h1>Tambah Matkul</h1>
    <form method="POST" action="/mata_kuliah">
        @csrf
        <input type="text" name="nama_matkul" placeholder="nama_matkul"><br><br>
        <input type="text" name="deskripsi" placeholder="Deskripsi"><br><br>
        <button type="submit">Simpan</button>
    </form>

    <h2>List Matkul</h2>
    <ul>
        @foreach($data as $matkul)
            <li>{{ $matkul->nama_matkul }} - {{ $matkul->deskripsi }}  </li>
        @endforeach
    </ul>
</body>
</html>