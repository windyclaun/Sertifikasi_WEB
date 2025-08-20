<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama  = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $peran = trim($_POST['peran'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');

    if ($nama && $email && $peran && $pesan) {
        $stmt = $conn->prepare("INSERT INTO kontak (nama, email, peran, pesan) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nama, $email, $peran, $pesan);
        if ($stmt->execute()) {
            header("Location: index.php?status=success");
            exit;
        } else {
            header("Location: index.php?status=error&msg=" . urlencode($stmt->error));
            exit;
        }
    } else {
        header("Location: index.php?status=invalid");
        exit;
    }
}
?>
