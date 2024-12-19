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
                <a class="nav-link active text-light" aria-current="page" href="Peminjaman.php">Peminjaman</a>
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
        <?php
            // Sertakan koneksi database
            require 'db.php';

            // Periksa apakah parameter 'id' ada dalam URL
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                // Ambil data peminjaman berdasarkan ID
                $sql = "SELECT * FROM peminjaman WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // Ambil data baris pertama
                    $row = $result->fetch_assoc();
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="card">
                                    <div class="card-body ms-3">
                                        <h3 class="card-title">Detail Peminjaman</h3>
                                        <hr>
                                        <p class="card-text"><strong>Nama:</strong> <?php echo $row['nama']; ?></p>
                                        <p class="card-text"><strong>NIK:</strong> <?php echo $row['nik']; ?></p>
                                        <p class="card-text"><strong>Nomor Telepon:</strong> <?php echo $row['nomor_telepon']; ?></p>
                                        <p class="card-text"><strong>Alamat:</strong> <?php echo $row['alamat']; ?></p>
                                        <p class="card-text"><strong>Jenis Mobil:</strong> <?php echo $row['jenis_mobil']; ?></p>
                                        <p class="card-text"><strong>Tanggal Peminjaman:</strong> <?php echo $row['tanggal_peminjaman']; ?></p>
                                        <p class="card-text"><strong>Tanggal Pengembalian:</strong> <?php echo $row['tanggal_pengembalian']; ?></p>
                                        <p class="card-text"><strong>Total Biaya:</strong> Rp <?php echo number_format($row['total_biaya'], 2, ',', '.'); ?></p>
                                        <p><div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a class="btn btn-primary" href="TambahPeminjaman.php" role="button">Kembali</a>
                                        </div> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                } else {
                    echo "<p class='text-center'>Data peminjaman tidak ditemukan.</p>";
                }
                $stmt->close();
            } else {
                echo "<p class='text-center'>ID peminjaman tidak ditemukan.</p>";
            }

            $conn->close();
            ?>


        </div>
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>