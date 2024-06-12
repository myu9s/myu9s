<?php
// Hubungkan ke database
include "db_connection.php";

// Query untuk mengambil data siswa
$sql = "SELECT * FROM siswa";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
    <h2>Daftar Siswa</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Periksa apakah ada data yang ditemukan
            if (mysqli_num_rows($result) > 0) {
                // Output data dari setiap baris
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["siswa_id"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["usia"] . "</td>";
                    echo "<td>" . $row["jenis_kelamin"] . "</td>";
                    echo "<td><a href='update.php?id=" . $row["siswa_id"] . "'>Edit</a><a> </a><a href='delete.php?id=" . $row["siswa_id"] . "'>Hapus</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <a  href="create.php">Tambah Data Siswa</a>
</body>
</html>
