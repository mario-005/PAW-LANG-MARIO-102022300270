<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";
$port = 3306;



// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database

$conn = mysqli_connect($servername, $username, $password, $database, $port); 

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>