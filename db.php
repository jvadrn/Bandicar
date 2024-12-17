<?php
$host = "localhost";
$user = "root"; // Ganti jika username database berbeda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "bandicar";

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
