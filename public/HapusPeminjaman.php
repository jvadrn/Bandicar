<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Menyiapkan query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM peminjaman WHERE id = ?";
    
    // Mempersiapkan statement
    $stmt = $conn->prepare($sql);
    
    // Mengikat parameter ID
    $stmt->bind_param("i", $id);
    
    // Menjalankan query
    if ($stmt->execute()) {
        // Jika berhasil, redirect ke halaman data peminjaman
        header("Location: TambahPeminjaman.php"); // Ganti dengan halaman yang sesuai
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Terjadi kesalahan saat menghapus data.";
    }

    // Menutup statement
    $stmt->close();
} else {
    echo "ID peminjaman tidak ditemukan.";
}

$conn->close();
?>
