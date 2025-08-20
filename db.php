<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kosmetik";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// function getTestimoni($limit = 6) {
//     global $conn;
//     $limit = (int)$limit;
//     $sql = "SELECT nama, peran, pesan, created_at FROM kontak ORDER BY created_at DESC LIMIT $limit";
//     return $conn->query($sql);
// }
?>
