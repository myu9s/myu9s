<?php
include "db_connection.php";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // Update data
    $sql = "UPDATE siswa SET nama = '$nama', usia = $usia, jenis_kelamin = '$jenis_kelamin' WHERE siswa_id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diubah";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE siswa_id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="update.php?id=<?= $row['siswa_id']; ?>" method="post">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>"><br><br>
        <label for="usia">Usia :</label>
        <input type="number" name="usia" id="usia" value="<?= $row['usia']; ?>"><br><br>
        <label for="jenis_kelamin">Jenis Kelamin :</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="laki-laki" <?= $row['jenis_kelamin'] == 'laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
            <option value="perempuan" <?= $row['jenis_kelamin'] == 'perempuan' ? 'selected' : ''; ?>>Perempuan</option>
        </select><br><br>
        <button type="submit" name="submit">Edit Data</button>
    </form>
    <br>
    <button onclick="window.location.href='index.php'">Kembali ke Halaman Utama</button>
</body>
</html>
