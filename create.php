<?php
include "db_connection.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    
   
    $sql = "INSERT INTO siswa (nama, usia, jenis_kelamin) VALUES ('$nama', $usia, '$jenis_kelamin')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form action="create.php" method="post">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" placeholder="Nama"><br><br>
        <label for="usia">Usia :</label>
        <input type="number" name="usia" id="usia" placeholder="Usia"><br><br>
        <label for="jenis_kelamin">Jenis Kelamin :</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select><br><br>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
    <br>
    <button onclick="window.location.href='index.php'">Kembali ke Halaman Utama</button>
</body>
</html>
