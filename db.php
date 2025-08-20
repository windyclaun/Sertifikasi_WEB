<?php
// KONEKSI
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kosmetik";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// PROSES FORM KONTAK
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama  = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $peran = trim($_POST['peran'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');

    if ($nama && $email && $peran && $pesan) {
        $nama  = $conn->real_escape_string($nama);
        $email = $conn->real_escape_string($email);
        $peran = $conn->real_escape_string($peran);
        $pesan = $conn->real_escape_string($pesan);

        $sql = "INSERT INTO kontak (nama, email, peran, pesan) VALUES ('$nama','$email','$peran','$pesan')";
        if ($conn->query($sql)) {
            header("Location: index.php?status=success");
            exit;
        } else {
            header("Location: index.php?status=error&msg=" . urlencode($conn->error));
            exit;
        }
    } else {
        header("Location: index.php?status=invalid");
        exit;
    }
}

// FUNGSI AMBIL TESTIMONI
function getTestimoni($limit = 6) {
    global $conn;
    $limit = (int)$limit;
    $sql = "SELECT nama, peran, pesan, created_at FROM kontak ORDER BY created_at DESC LIMIT $limit";
    return $conn->query($sql);
}
?>
