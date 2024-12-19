<?php
// Sertakan file koneksi
require 'db.php';

// Pastikan ada data yang dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $alamat = $_POST['alamat'];
    $jenis_mobil = $_POST['jenis_mobil'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $total_biaya = $_POST['total_biaya'];

    // Query untuk menyimpan data peminjaman
    $sql = "INSERT INTO peminjaman (nama, nik, nomor_telepon, alamat, jenis_mobil, tanggal_peminjaman, tanggal_pengembalian, total_biaya) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssssd", // Menggunakan tipe data sesuai dengan parameter
        $nama,
        $nik,
        $nomor_telepon,
        $alamat,
        $jenis_mobil,
        $tanggal_peminjaman,
        $tanggal_pengembalian,
        $total_biaya
    );

    // Menjalankan query dan mengarahkan jika berhasil
    if ($stmt->execute()) {
        header("Location: TambahPeminjaman.php?status=success");
        exit();
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
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
                <a class="nav-link active text-light" aria-current="page" href="Dashboard.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="TambahPeminjaman.php">Peminjaman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="Pengembalian.php">Pengembalian</a>
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
              </li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-3">Penyewaan</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                      <form method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" required>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_mobil" class="form-label">Pilih Jenis Mobil</label>
                            <select class="form-select" id="jenis_mobil" name="jenis_mobil" required>
                                <option value="" disabled selected>Pilih Jenis Mobil</option>
                                <option value="Avanza">Avanza</option>
                                <option value="Xenia">Xenia</option>
                                <option value="Brio">Brio</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                            <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" required>
                        </div>
                        <div class="mb-3">
                            <label for="total_biaya" class="form-label">Total Biaya</label>
                            <input type="number" class="form-control" id="total_biaya" name="total_biaya" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-secondary" href="TambahPeminjaman.php" role="button">Kembali</a>
                    </form>
                    </div>
                  </div>
            </div>
        </div>
      </div>
      <script>
    // Harga per hari berdasarkan jenis mobil
          const hargaPerHari = {
              Avanza: 300000,
              Xenia: 380000,
              Brio: 250000
          };

          // Fungsi untuk menghitung selisih hari
          function hitungHari(tanggalMulai, tanggalSelesai) {
              const tanggal1 = new Date(tanggalMulai);
              const tanggal2 = new Date(tanggalSelesai);
              const selisihWaktu = tanggal2 - tanggal1;
              return selisihWaktu / (1000 * 60 * 60 * 24) + 1; // +1 untuk memasukkan hari pertama
          }

          // Event listener untuk menghitung total biaya
          document.getElementById("jenis_mobil").addEventListener("change", hitungTotalBiaya);
          document.getElementById("tanggal_peminjaman").addEventListener("change", hitungTotalBiaya);
          document.getElementById("tanggal_pengembalian").addEventListener("change", hitungTotalBiaya);

          function hitungTotalBiaya() {
              const jenisMobil = document.getElementById("jenis_mobil").value;
              const tanggalMulai = document.getElementById("tanggal_peminjaman").value;
              const tanggalSelesai = document.getElementById("tanggal_pengembalian").value;

              // Memastikan semua field sudah diisi sebelum menghitung
              if (jenisMobil && tanggalMulai && tanggalSelesai) {
                  const jumlahHari = hitungHari(tanggalMulai, tanggalSelesai);
                  const totalBiaya = jumlahHari * (hargaPerHari[jenisMobil] || 0);
                  document.getElementById("total_biaya").value = totalBiaya;
              } else {
                  document.getElementById("total_biaya").value = "";
              }
          }

      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>