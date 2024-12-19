<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
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
              <li class="nav-item dropdown dropstart">
                <a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Akun
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Akun</a></li>
                  <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                  
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
                <a class="btn btn-lg btn-primary mt-5" href="TambahPeminjaman.php" role="button">Mulai Sewa Mobil</a>
            </div>
            <div class="col-md-6">
                <img src="11452724.png" width="80%" alt="">
            </div>
        </div>
      </div>
      
      <div class="container container-product">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-3">Produk</h1>
                <p class="text-center">BandiCar menawarkan produk produk berkualitas yang bisa anda sewa.</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="row">
                    <div class="col-sm-4">
                    <div class="card shadow" style="width: 21rem; height: 25rem; ">
                      <img src="White-2.png" class="card-img-top" alt="..." style="width: 21rem; height: 25rem;">
                      <div class="card-body">
                        <h5 class="card-title">Avanza</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary d-grid gap-2">Detail</a>
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="card shadow" style="width: 21rem; height: 25rem;">
                      <img src="file.png" class="card-img-top" alt="..." style="width: 21rem; height: 25rem;">
                      <div class="card-body">
                        <h5 class="card-title">Xenia</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary d-grid gap-2">Detail</a>
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="card shadow" style="width: 21rem; height: 25rem;">
                      <img src="Brio-PNG.png" class="card-img-top" alt="..." style="width: 21rem; height: 25rem;">
                      <div class="card-body">
                        <h5 class="card-title">Brio</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary d-grid gap-2">Detail</a>
                      </div>
                    </div>
                      </div>
                  </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="row mt-5">
                    <div class="col-sm-4">
                    <div class="card shadow" style="width: 21rem; height: 25rem; ">
                      <img src="White-2.png" class="card-img-top" alt="..." style="width: 21rem; height: 25rem;">
                      <div class="card-body">
                        <h5 class="card-title">Avanza</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary d-grid gap-2">Detail</a>
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="card shadow" style="width: 21rem; height: 25rem;">
                      <img src="file.png" class="card-img-top" alt="..." style="width: 21rem; height: 25rem;">
                      <div class="card-body">
                        <h5 class="card-title">Xenia</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary d-grid gap-2">Detail</a>
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="card shadow" style="width: 21rem; height: 25rem;">
                      <img src="Brio-PNG.png" class="card-img-top" alt="..." style="width: 21rem; height: 25rem;">
                      <div class="card-body">
                        <h5 class="card-title">Brio</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary d-grid gap-2">Detail</a>
                      </div>
                    </div>
                      </div>
                  </div>
            </div>
        </div>
      </div>
      <div class="container" style="margin-top: 10%">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-3">Layanan Kami</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="row">
                    <div class="col-sm-4">
                      <div class="card shadow mb-3 " style="width: 22rem; height: 24rem;">
                        <div class="card-body">
                          <h4 class="card-title">Penyewaan Mobil</h4>
                          <hr>
                          <p class="card-text ">Kami menyediakan berbagai pilihan kendaraan yang dapat disesuaikan dengan kebutuhan perjalanan Anda. Apakah Anda memerlukan mobil kecil untuk perjalanan singkat di kota atau mobil keluarga yang nyaman untuk perjalanan jauh, Bandi Car memiliki berbagai pilihan armada yang terawat dan siap pakai. Semua mobil kami tersedia dengan kondisi terbaik dan dilengkapi dengan fasilitas yang nyaman.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card shadow mb-3"  style="width: 22rem; height: 24rem;">
                        <div class="card-body">
                          <h4 class="card-title">Jasa Sopir</h4>
                          <hr>
                          <p class="card-text ">Nikmati kenyamanan lebih dengan menyewa mobil lengkap dengan sopir berpengalaman dari Bandi Car. Sopir kami tidak hanya berpengalaman dalam mengemudi, tetapi juga ramah dan tahu cara terbaik untuk mencapai tujuan Anda dengan aman dan nyaman. Kami memberikan opsi sopir untuk berbagai kebutuhan, mulai dari perjalanan bisnis, liburan, hingga acara khusus.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow mb-3" style="width: 22rem; height: 24rem;">
                          <div class="card-body">
                            <h4 class="card-title">Pelaporan & Pengembalian</h4>
                            <hr>
                            <p class="card-text ">Kami menyediakan sistem pelaporan dan pengembalian yang mudah dan transparan, memastikan proses sewa mobil Anda berjalan lancar. Setelah selesai menggunakan kendaraan, Anda dapat melakukan pengembalian dengan mudah. Kami juga menyediakan laporan lengkap mengenai status kendaraan dan waktu sewa untuk memastikan bahwa semuanya tercatat dengan baik.</p>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
      </div>
      <div class="container mt-5">
      <div class="container" style="margin-bottom: 5rem;">
			<div class="row justify-content-center mb-">
				<h1 class="text-center mb-3">Kontak Kami</h1>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Contact us</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Website</span> <a href="#">yoursite.com</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
      </div> 
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>