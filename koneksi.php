<?php
// Informasi koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "tugas";

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sisanya dari skrip PHP
// ...

// Tutup koneksi
$conn->close();
?>
