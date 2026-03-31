<?php
// =============================================
//  koneksi.php — Koneksi ke database MySQL
//  Laragon default: host=localhost, user=root, password=(kosong)
// =============================================

$host     = 'localhost';
$user     = 'root';
$password = '';           // Laragon default: kosong
$database = 'portfolio_reswara';

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>
