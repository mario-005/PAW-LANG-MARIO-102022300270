<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
<?php
include('connect.php');

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $query = "UPDATE tb_buku SET judul = '$judul', penulis = '$penulis', tahun_terbit = '$tahun_terbit' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>
        alert('Data gagal diupdate');
        document.location.href = 'katalog_buku.php';
        </script>";
    }
}
?>