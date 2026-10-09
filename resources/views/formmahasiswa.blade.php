<!DOCTYPE html>
<html>
    <head>
        <title>Form Input Mahasiswa</title>
    </head>
    <body>
        <h1>Input Data Mahasiswa</h1>
        
        <form action="/simpan" method="post">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required><br><br>

            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" required><br><br>

            <button type="submit">Simpan</button>
        </form>
    </body>
</html>