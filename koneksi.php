<?php
// Gawe koneksi ning mysql

session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "login";

$conn = new mysqli($host, $user, $password, $db);

// ngecek koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: ". $conn->connect_error);
}
?>