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
          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="row ">
            <div class="col">
                <h1 class="text-center mt-3">Peminjaman</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto mb-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="Peminjaman.php" role="button">Tambah</a>
                </div>       
            </div>
        </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Peminjaman</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Mobil</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    // Sertakan koneksi database
                                    require 'db.php';

                                    // Ambil data dari tabel peminjaman
                                    $sql = "SELECT id, nama, jenis_mobil, tanggal_peminjaman FROM peminjaman";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        $no = 1; // Inisialisasi nomor urut
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr class='table-peminjaman' style='vertical-align:middle'>
                                                <th>{$no}</th>
                                                <td>{$row['nama']}</td>
                                                <td>{$row['jenis_mobil']}</td>
                                                <td>" . date('d F Y', strtotime($row['tanggal_peminjaman'])) . "</td>
                                                <td>
                                                    <div class='col-md-2 d-grid gap-1'>
                                                        <a class='btn btn-primary btn-sm' href='EditPeminjaman.php?id={$row['id']}' role='button'>Edit</a>
                                                        <a class='btn btn-success btn-sm' href='DetailPeminjaman.php?id={$row['id']}' role='button'>Detail</a>
                                                        <a class='btn btn-danger btn-sm' href='HapusPeminjaman.php?id={$row['id']}' role='button' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                                                    </div>
                                                </td>
                                            </tr>";
                                            $no++;
                                        }
                                    } else {
                                        echo "<tr><td colspan='5' class='text-center'>Tidak ada data peminjaman</td></tr>";
                                    }

                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>