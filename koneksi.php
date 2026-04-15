<?php
// Mengambil data dari config.php
include "config.php";

// Membuat koneksi menggunakan data dari array $env
$koneksi = new mysqli(
    $env['DB_HOST'], 
    $env['DB_USER'], 
    $env['DB_PASS'], 
    $env['DB_NAME']
);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>