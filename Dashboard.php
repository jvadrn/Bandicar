<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Bandicar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="Dashboard.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="Peminjaman.html">Peminjaman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="Pengembalian.html">Pengembalian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="#">Laporan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Akun
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Akun</a></li>
                  <li><a class="dropdown-item" href="logout.html">Log Out</a></li>
                  
                </ul>
              </li>
          </ul>
        </div>
      </nav>
      <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mt-5">
                    Wellcome To Bandi Car
                </h1>
                <h6>Menjadi pilihan utama untuk penyewaan mobil dengan pelayanan pelanggan yang unggul dan armada yang dapat diandalkan di seluruh Indonesia.</h6>
                <a class="btn btn-lg btn-primary mt-5" href="Peminjaman.html" role="button">Mulai Sewa Mobil</a>
            </div>
            <div class="col-md-6">
                <img src="11452724.png" width="80%" alt="">
            </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-3">Layanan Kami</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="row">
                    <div class="col-sm-4">
                      <div class="card shadow mb-3">
                        <div class="card-body">
                          <h4 class="card-title">Penyewaan Mobil</h4>
                          <hr>
                          <p class="card-text mb-3">Kami menyediakan berbagai pilihan kendaraan yang dapat disesuaikan dengan kebutuhan perjalanan Anda. Apakah Anda memerlukan mobil kecil untuk perjalanan singkat di kota atau mobil keluarga yang nyaman untuk perjalanan jauh, Bandi Car memiliki berbagai pilihan armada yang terawat dan siap pakai. Semua mobil kami tersedia dengan kondisi terbaik dan dilengkapi dengan fasilitas yang nyaman.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card shadow mb-3">
                        <div class="card-body">
                          <h4 class="card-title">Jasa Sopir</h4>
                          <hr>
                          <p class="card-text mb-3">Nikmati kenyamanan lebih dengan menyewa mobil lengkap dengan sopir berpengalaman dari Bandi Car. Sopir kami tidak hanya berpengalaman dalam mengemudi, tetapi juga ramah dan tahu cara terbaik untuk mencapai tujuan Anda dengan aman dan nyaman. Kami memberikan opsi sopir untuk berbagai kebutuhan, mulai dari perjalanan bisnis, liburan, hingga acara khusus.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow mb-3">
                          <div class="card-body">
                            <h4 class="card-title">Pelaporan & Pengembalian</h4>
                            <hr>
                            <p class="card-text mb-3">Kami menyediakan sistem pelaporan dan pengembalian yang mudah dan transparan, memastikan proses sewa mobil Anda berjalan lancar. Setelah selesai menggunakan kendaraan, Anda dapat melakukan pengembalian dengan mudah. Kami juga menyediakan laporan lengkap mengenai status kendaraan dan waktu sewa untuk memastikan bahwa semuanya tercatat dengan baik.</p>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Kontak Kami</h1>
            </div>
        </div>
      </div> 
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>