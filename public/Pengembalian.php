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
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-3">Pengembalian</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
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
                              <tr>
                                <th scope="row">1</th>
                                <td>Santo</td>
                                <td>Avanza</td>
                                <td>12 Desember 2024</td>
                                <td><a class="btn btn-primary" href="DetailPengembalian.html" role="button">Detail</a></td>
                              </tr>
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