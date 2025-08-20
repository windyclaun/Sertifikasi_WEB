<?php
require_once "db.php";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $confirm  = trim($_POST["confirm"]);

    if (!empty($username) && !empty($password) && !empty($confirm)) {
        if ($password === $confirm) {
            // Cek username sudah ada atau belum
            $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $res = $stmt->get_result();

            if ($res->num_rows > 0) {
                $error = "Username sudah digunakan!";
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $conn->prepare("INSERT INTO users(username, password) VALUES(?, ?)");
                $stmt->bind_param("ss", $username, $hash);
                if ($stmt->execute()) {
                    $success = "Registrasi berhasil! <a href='login.php'>Login sekarang</a>";
                } else {
                    $error = "Terjadi kesalahan, coba lagi.";
                }
            }
        } else {
            $error = "Password tidak sama!";
        }
    } else {
        $error = "Semua field wajib diisi!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | GloWin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="card shadow p-4" style="width:350px;">
        <h3 class="text-center mb-3">Register</h3>
        <?php if ($error) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <?php if ($success) echo "<div class='alert alert-success'>$success</div>"; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Konfirmasi Password</label>
                <input type="password" name="confirm" class="form-control" required>
            </div>
            <button class="btn btn-danger w-100">Register</button>
        </form>
        <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login</a></p>
    </div>
</div>
</body>
</html>
