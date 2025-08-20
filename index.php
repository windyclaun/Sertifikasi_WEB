<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GloWin | Premium Beauty Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/nobg.png" alt="Logo" width="40" height="40" class="me-2">
                GloWin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#visi-misi">Visi Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pengalaman-perusahaan">Pengalaman</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kelebihan-perusahaan">Kelebihan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="#event">Event</a></li>

                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item">
                        <a class="nav-link btn-glow ms-2" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section id="home" class="hero d-flex align-items-center justify-content-center" style="min-height:100vh;">
        <div class="container text-center">
            <h1>Kecantikan Alami, Sentuhan Premium</h1>
            <p>GloWin menghadirkan solusi kecantikan modern untuk kulit sehat dan bercahaya.</p>
            <a href="#produk" class="btn btn-glow mt-3">Lihat Produk</a>
        </div>
    </section>

    <!-- About Us -->
    <section id="about" class="about py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 mb-4 text-center">
                    <div class="p-4 bg-white rounded shadow-sm d-inline-block">
                        <img src="assets/logo.png" class="img-fluid mb-3" style="max-width:160px; border-radius:20px; box-shadow:0 4px 16px rgba(220,20,60,0.12);" alt="About GloWin">
                        <h3 class="mb-0" style="font-family:'Playfair Display',serif; color:#d81b60;">GloWin</h3>
                        <span class="text-muted" style="font-size:1rem;">Premium Beauty Solutions</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <h2 class="mb-3" style="font-family:'Playfair Display',serif; color:#d81b60;">Tentang Kami</h2>
                        <p style="font-size:1.1rem; color:#444;">
                            GloWin adalah perusahaan kosmetik premium yang berkomitmen menghadirkan produk kecantikan berkualitas tinggi, aman, dan ramah lingkungan.
                            Kami percaya setiap wanita berhak mendapatkan perawatan terbaik untuk menonjolkan kecantikan alaminya.
                        </p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check-circle text-danger me-2"></i>Produk berbahan alami & aman</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-danger me-2"></i>Kualitas premium & inovatif</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-danger me-2"></i>Ramah lingkungan & berkelanjutan</li>
                            <li><i class="fas fa-check-circle text-danger me-2"></i>Memberdayakan wanita tampil percaya diri</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section id="visi-misi" class="visi-misi" style="background-color: #fce4ec;">
        <div class="container">
            <h2 class="text-center mb-5">Visi & Misi Kami</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="p-4 shadow-sm rounded bg-white h-100">
                        <h4 class="mb-3"><i class="fas fa-eye text-danger me-2"></i>Visi</h4>
                        <p>
                            Menjadi brand kecantikan premium terkemuka yang menghadirkan produk inovatif,
                            berkualitas tinggi, dan ramah lingkungan untuk mendukung kecantikan alami wanita di seluruh dunia.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="p-4 shadow-sm rounded bg-white h-100">
                        <h4 class="mb-3"><i class="fas fa-bullseye text-danger me-2"></i>Misi</h4>
                        <ul class="mb-0">
                            <li>Menghadirkan produk kecantikan dengan bahan alami dan aman.</li>
                            <li>Memberikan kualitas terbaik dengan sentuhan premium.</li>
                            <li>Mendukung keberlanjutan lingkungan dalam setiap proses produksi.</li>
                            <li>Memberdayakan wanita agar tampil percaya diri dan berkelas.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pengalaman Perusahaan -->
    <section id="pengalaman-perusahaan" class="pengalaman bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Profile, Pengalaman, Kelebihan Perusahaan</h2>
            <p class="text-center">
                GloWin adalah perusahaan kosmetik premium yang berdiri sejak tahun 2010.
                Dengan pengalaman lebih dari satu dekade, kami konsisten menghadirkan produk
                kecantikan yang memadukan inovasi, kualitas, dan keamanan bagi konsumen.
            </p> <br>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="fas fa-award fa-3x text-danger mb-3"></i>
                    <h5>Penghargaan</h5>
                    <p>GloWin telah menerima lebih dari 20 penghargaan nasional dan internasional di bidang kecantikan.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="fas fa-globe fa-3x text-danger mb-3"></i>
                    <h5>Jangkauan Global</h5>
                    <p>Produk kami telah digunakan oleh pelanggan di lebih dari 15 negara di Asia dan Eropa.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="fas fa-users fa-3x text-danger mb-3"></i>
                    <h5>Komunitas</h5>
                    <p>GloWin memiliki lebih dari 500.000 pelanggan setia di seluruh dunia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kelebihan Perusahaan -->
    <section id="kelebihan-perusahaan" class="kelebihan py-5" style="background-color: #fce4ec;">
        <div class="container">
            <h2 class="text-center mb-5">Kelebihan Perusahaan</h2>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <i class="fas fa-leaf text-danger me-2"></i>
                                <span>Produk berbahan alami dan aman digunakan</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-star text-danger me-2"></i>
                                <span>Kualitas premium dengan harga kompetitif</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-lightbulb text-danger me-2"></i>
                                <span>Inovasi berkelanjutan sesuai tren kecantikan dunia</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-recycle text-danger me-2"></i>
                                <span>Ramah lingkungan dalam setiap produksi</span>
                            </li>
                            <li>
                                <i class="fas fa-headset text-danger me-2"></i>
                                <span>Layanan pelanggan yang responsif dan profesional</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/kelebihan.jpg" class="img-fluid rounded shadow" alt="Kelebihan GloWin" style="max-width:350px; height:250px; object-fit:cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Produk -->
    <section id="produk" class="produk">
        <div class="container">
            <h2 class="text-center mb-5">Produk Unggulan Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/serum.png" class="card-img-top" alt="Skincare">
                        <div class="card-body">
                            <h5 class="card-title">Glow Serum</h5>
                            <p class="card-text">Serum wajah dengan vitamin C untuk kulit cerah bercahaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/lipstick.jpg" class="card-img-top" alt="Makeup" style="width:420px; height:240px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">Luxury Lipstick</h5>
                            <p class="card-text">Lipstik premium dengan warna tahan lama dan melembapkan bibir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">

                    <div class="card">
                        <img src="assets/cream.jpg" class="card-img-top" alt="Makeup" style="width:420px; height:240px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">Radiance Cream</h5>
                            <p class="card-text">Krim pelembap harian dengan perlindungan UV dan nutrisi alami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section id="testimoni" class="py-5" style="background-color:#f8f9fa;">
        <div class="container">
            <h2 class="text-center mb-5">Apa Kata Mereka?</h2>
            <div class="row">
                <?php
                $testi = getTestimoni();
                if ($testi && $testi->num_rows > 0) {
                    while ($row = $testi->fetch_assoc()) {
                        echo '<div class="col-md-4 mb-4">
                      <blockquote class="p-3 bg-white rounded shadow-sm h-100">
                          "' . htmlspecialchars($row["pesan"]) . '"
                          <footer class="mt-2">- ' . htmlspecialchars($row["nama"]) . ', ' . htmlspecialchars($row["peran"]) . '</footer>
                      </blockquote>
                    </div>';
                    }
                } else {
                    echo '<p class="text-center">Belum ada testimoni.</p>';
                }
                ?>
            </div>
        </div>
    </section>


    <!-- Gallery -->
    <section id="gallery" class="gallery">
        <div class="container">
            <h2 class="text-center mb-5">Gallery Kecantikan</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <img src="assets/galeri1.jpg" class="img-fluid" alt="Gallery 1" style="width:300px; height:300px; object-fit:cover;">
                </div>
                <div class="col-md-3 mb-4">
                    <img src="assets/galeri2.jpg" class="img-fluid" alt="Gallery 1" style="width:300px; height:300px; object-fit:cover;">
                </div>
                <div class="col-md-3 mb-4">
                    <img src="assets/galeri3.png" class="img-fluid" alt="Gallery 1" style="width:300px; height:300px; object-fit:cover;">
                </div>
                <div class="col-md-3 mb-4">
                    <img src="assets/galeri4.jpg" class="img-fluid" alt="Gallery 1" style="width:300px; height:300px; object-fit:cover;">
                </div>
                <div class="col-md-3 mb-4">
                    <img src="assets/galeri5.jpg" class="img-fluid" alt="Gallery 1" style="width:300px; height:300px; object-fit:cover;">
                </div>
                <div class="col-md-3 mb-4">
                    <img src="assets/galeri6.jpg" class="img-fluid" alt="Gallery 1" style="width:300px; height:300px; object-fit:cover;">
                </div>
                <div class="col-md-3 mb-4">
                    <img src="assets/galeri7.jpg" class="img-fluid" alt="Gallery 1" style="width:300px; height:300px; object-fit:cover;">
                </div>
                <div class="col-md-3 mb-4">
                    <img src="assets/galeri8.png" class="img-fluid" alt="Gallery 1" style="width:300px; height:300px; object-fit:cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel -->
    <section id="artikel" class="py-5" style="background-color: #fce4ec;">
        <div class="container">
            <h2 class="text-center mb-5">Kumpulan Artikel</h2>
            <p class="text-center">Berbagai artikel seputar kecantikan, produk, dan tips modern.</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assets/artikel1.jpg" class="card-img-top" alt="Artikel 1">
                        <div class="card-body">
                            <h5 class="card-title">Tips Merawat Kulit Wajah</h5>
                            <p class="card-text">Cara alami menjaga kulit tetap sehat, glowing, dan bebas masalah.</p>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuTips" data-bs-toggle="dropdown" aria-expanded="false">
                                    Baca Selengkapnya
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuTips">
                                    <li>
                                        <a class="dropdown-item" href="https://www.alodokter.com/cara-merawat-kulit-wajah-yang-baik-dan-benar" target="_blank">
                                            Cara Merawat Kulit Wajah
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://www.halodoc.com/artikel/tips-menjaga-kesehatan-kulit-wajah" target="_blank">
                                            Tips Menjaga Kesehatan Kulit
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://www.sehatq.com/artikel/7-cara-merawat-kulit-wajah-agar-tetap-sehat" target="_blank">
                                            7 Cara Merawat Kulit Wajah
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assets/artikel2.jpeg" class="card-img-top" alt="Artikel 2">
                        <div class="card-body">
                            <h5 class="card-title">Manfaat Glow Serum</h5>
                            <p class="card-text">Serum vitamin C GloWin membantu kulit cerah bercahaya.</p>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuSerum" data-bs-toggle="dropdown" aria-expanded="false">
                                    Baca Selengkapnya
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuSerum">
                                    <li>
                                        <a class="dropdown-item" href="https://momsmoney.kontan.co.id/news/6-jenis-serum-glad2glow-dan-manfaatnya-untuk-kulit-semua-di-bawah-rp-50000" target="_blank">
                                            6 Jenis Serum Glad2Glow
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://www.alodokter.com/manfaat-serum-vitamin-c-untuk-wajah" target="_blank">
                                            Manfaat Serum Vitamin C
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://www.sehatq.com/artikel/serum-vitamin-c-untuk-wajah" target="_blank">
                                            Serum Vitamin C untuk Wajah
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assets/artikel3.jpg" class="card-img-top" alt="Artikel 3">
                        <div class="card-body">
                            <h5 class="card-title">Trend Makeup 2025</h5>
                            <p class="card-text">Makeup premium dengan warna natural dan tahan lama.</p>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuMakeup" data-bs-toggle="dropdown" aria-expanded="false">
                                    Baca Selengkapnya
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuMakeup">
                                    <li>
                                        <a class="dropdown-item" href="https://www.popmama.com/life/fashion-and-beauty/tren-make-up-dan-skincare-yang-wajib-dicoba-di-tahun-2025-00-6wd2h-sb3vj2" target="_blank">
                                            Tren Makeup & Skincare 2025
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://www.femaledaily.com/blog/2024/01/02/tren-makeup-2024/" target="_blank">
                                            Tren Makeup 2024
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://www.beautyjournal.id/makeup/tren-makeup-2025" target="_blank">
                                            Beauty Journal: Tren 2025
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event -->
    <section id="event" class="py-5" style="background-color:#fff3f6;">
        <div class="container">
            <h2 class="text-center mb-5">Event & Kegiatan Perusahaan</h2>
            <div class="row">
                <!-- Event 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/event1.jpg" class="card-img-top" alt="Event 1" style="height:200px; object-fit:cover;">
                        <div class="card-body">
                            <span class="badge bg-danger mb-2">12 Jan 2025</span>
                            <h5 class="card-title">Launching Produk Baru</h5>
                            <p class="card-text">Peresmian produk terbaru GloWin dengan acara spesial di Jakarta.</p>
                            <a href="#" class="btn btn-sm btn-outline-danger">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Event 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/event2.jpg" class="card-img-top" alt="Event 2" style="height:200px; object-fit:cover;">
                        <div class="card-body">
                            <span class="badge bg-danger mb-2">05 Feb 2025</span>
                            <h5 class="card-title">Beauty Workshop</h5>
                            <p class="card-text">Workshop bersama MUA profesional tentang tren make-up 2025.</p>
                            <a href="#" class="btn btn-sm btn-outline-danger">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Event 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/event3.jpg" class="card-img-top" alt="Event 3" style="height:200px; object-fit:cover;">
                        <div class="card-body">
                            <span class="badge bg-danger mb-2">20 Mar 2025</span>
                            <h5 class="card-title">CSR: Glow for Community</h5>
                            <p class="card-text">Kegiatan bakti sosial GloWin untuk mendukung kesehatan kulit masyarakat.</p>
                            <a href="#" class="btn btn-sm btn-outline-danger">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Kontak -->
    <section id="kontak" class="kontak py-5" style="background-color: #fce4ec;">
        <div class="container">
            <h2 class="text-center mb-5">Hubungi Kami</h2>
            <div class="row">
                <!-- Info Kontak -->
                <div class="col-md-5 mb-4">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <h5><i class="fa fa-map-marker-alt me-2 text-danger"></i>Alamat</h5>
                        <p>Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>

                        <h5><i class="fab fa-whatsapp me-2 text-danger"></i>Telepon</h5>
                        <p>+6282273873201</p>

                        <h5><i class="fa fa-fax me-2 text-danger"></i>Fax</h5>
                        <p>(021) 765-4321</p>

                        <h5><i class="fa fa-envelope me-2 text-danger"></i>Email</h5>
                        <p>windynapitupulu3108@gmail.com</p>

                        <div class="mt-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.070770340423!2d110.41347457364193!3d-7.782321392237394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f06c72b2f5%3A0xd4a4e0d9963c5e9c!2sUpn%20Veteran%20Yogyakarta%20Kampus%2C%20Janti%2C%20Caturtunggal%2C%20Kec.%20Depok%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055281!5e0!3m2!1sid!2sid!4v1755625698662!5m2!1sid!2sid"
                                width="100%"
                                height="200"
                                style="border:0; border-radius:10px;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Form Kontak -->
                <div class="col-md-7">
                    <form action="kontak_db.php" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda">
                        </div>

                        <div class="mb-3">
                            <label for="peran" class="form-label">Peran</label>
                            <select class="form-control" id="peran" name="peran">
                                <option value="Customer">Customer</option>
                                <option value="Reseller">Reseller</option>
                                <option value="Distributor">Distributor</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Pesan Anda"></textarea>
                        </div>

                        <button type="submit" class="btn btn-glow">Kirim</button>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2025 GloWin. Design by windyclaun.</p>
            <p>
                <a href="https://wa.me/082273873201"><i class="fab fa-whatsapp fa-lg me-3"></i></a>
                <a href="https://www.instagram.com/windyclaun"><i class="fab fa-instagram fa-lg me-3"></i></a>
                <a href="mailto:windynapitupulu3108@gmail.com"><i class="fas fa-envelope fa-lg"></i></a>
            </p>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>