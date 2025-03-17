<?php
include 'connect.php';

// ==================1==================
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel-variabel untuk menyimpan data yang dikirim dari POST
if (isset($_POST['create'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun_terbit'];

    
    
    // ==================2==================
    // Definisikan $query untuk melakukan koneksi ke database
    $query = "INSERT INTO tb_buku (judul, penulis, tahun_terbit) VALUES ('$judul', '$penulis', '$tahun')";
    // mysqli_query( $conn, $query ); -> Setelah saya tambah ini dia jadi menambah 2 padahal saya cuman menambah satu saya



    // ==================3==================
    // Eksekusi query
    $result = mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        header("location: tambah_buku.php");
    } else {
        echo 
        "<script>
        alert('Data gagal ditambahkan');
        document.location.href = 'tambah_buku.php';
        </script>";
        exit;
    }
}
mysqli_close($conn);
?>