<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama  = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $peran = trim($_POST['peran'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');
    $gambar = null;

    // Proses Upload Gambar
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $targetDir = "assets/uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = time() . "_" . basename($_FILES["gambar"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)) {
                $gambar = $fileName; // simpan nama file ke DB
            }
        }
    }

    if ($nama && $email && $peran && $pesan) {
        $stmt = $conn->prepare("INSERT INTO kontak (nama, email, peran, pesan, gambar) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nama, $email, $peran, $pesan, $gambar);
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

function getTestimoni($limit = 9) {
    global $conn;
    $limit = (int)$limit;
    $sql = "SELECT nama, peran, pesan, gambar, created_at FROM kontak ORDER BY created_at DESC LIMIT $limit";
    return $conn->query($sql);
}
?>
