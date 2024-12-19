<?php
require 'db.php';

// Cek apakah ada ID yang diterima dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Ambil data peminjaman berdasarkan ID
    $sql = "SELECT * FROM peminjaman WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika data ditemukan, tampilkan form untuk edit
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data peminjaman tidak ditemukan.";
        exit();
    }

    // Menutup statement
    $stmt->close();
} else {
    echo "ID peminjaman tidak ditemukan.";
    exit();
}

// Proses form jika data diubah
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $alamat = $_POST['alamat'];
    $jenis_mobil = $_POST['jenis_mobil'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $total_biaya = $_POST['total_biaya'];

    // Query untuk update data peminjaman
    $sql = "UPDATE peminjaman SET nama = ?, nik = ?, nomor_telepon = ?, alamat = ?, jenis_mobil = ?, tanggal_peminjaman = ?, tanggal_pengembalian = ?, total_biaya = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameter dengan tipe yang sesuai
    $stmt->bind_param("sssssssdi", $nama, $nik, $nomor_telepon, $alamat, $jenis_mobil, $tanggal_peminjaman, $tanggal_pengembalian, $total_biaya, $id);
    
    if ($stmt->execute()) {
        header("Location: TambahPeminjaman.php"); // Ganti dengan halaman yang sesuai setelah update
        exit();
    } else {
        echo "Gagal mengupdate data peminjaman.";
    }

    // Menutup statement
    $stmt->close();
}

$conn->close();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bandicar</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-3">Edit Peminjaman</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="EditPeminjaman.php?id=<?php echo $id; ?>">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $row['nik']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo $row['nomor_telepon']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" required><?php echo $row['alamat']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_mobil" class="form-label">Pilih Jenis Mobil</label>
                                <select class="form-select" id="jenis_mobil" name="jenis_mobil" required>
                                    <option value="Avanza" <?php if ($row['jenis_mobil'] == 'Avanza') echo 'selected'; ?>>Avanza</option>
                                    <option value="Xenia" <?php if ($row['jenis_mobil'] == 'Xenia') echo 'selected'; ?>>Xenia</option>
                                    <option value="Brio" <?php if ($row['jenis_mobil'] == 'Brio') echo 'selected'; ?>>Brio</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" value="<?php echo $row['tanggal_peminjaman']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?php echo $row['tanggal_pengembalian']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="total_biaya" class="form-label">Total Biaya</label>
                                <input type="number" class="form-control" id="total_biaya" name="total_biaya" value="<?php echo $row['total_biaya']; ?>" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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

            if (jenisMobil && tanggalMulai && tanggalSelesai) {
                const jumlahHari = hitungHari(tanggalMulai, tanggalSelesai);
                const totalBiaya = jumlahHari * (hargaPerHari[jenisMobil] || 0);
                document.getElementById("total_biaya").value = totalBiaya;
            } else {
                document.getElementById("total_biaya").value = "";
            }
        }
    </script>
</body>
</html>
