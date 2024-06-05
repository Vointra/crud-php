<?php
include_once 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah</title>

        <!-- style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    </head>
<body>
    <h3>Tambah Data Mahasiswa</h3>
    <br>
    <form action="tambah.php" method="POST">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama">
        <br>
        <br>
        <label>NIM</label>
        <input type="text" name="nim">
        <br>
        <br>
        <label>Kelamin</label>
        <select name="kelamin">
            <option value="Laki - Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        <br>
        <label>Alamat</label>
        <input type="text" name="alamat">
        <br>
        <br>
        <button name="tambah" value="tambah">Simpan</button>
    </form>
    <?php
    if (isset($_POST['tambah'])) {
        $nama_mahasiswa = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelamin = $_POST['kelamin'];
        $alamat = $_POST['alamat'];
        $data = "INSERT INTO mahasiswa (nama, nim, kelamin, alamat) VALUES ('$nama_mahasiswa', '$nim', '$kelamin', '$alamat')";
        $result = mysqli_query($koneksi, $data);
        if ($result) {
            header('location: index.php');
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>