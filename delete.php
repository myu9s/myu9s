<?php 
include "db_connection.php";

$id = $_GET['id'];
$sql = "DELETE FROM siswa WHERE siswa_id = $id;";
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus!";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

?>
<br><button onclick="window.location.href='index.php'">Kembali ke Halaman Utama</button>