<?php
include 'db_connection.php';

$sql = "SELECT siswa_id, nama FROM Siswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nama</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["siswa_id"]. "</td><td>" . $row["nama"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
