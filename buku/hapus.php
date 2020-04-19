

<?php
include '../koneksi.php';
$id_buku = $_GET['id_buku'];
//mengambil id_buku$id_buku yang ingin di hapus

//jalankan query DELETE untuk menghapus data
$query = "DELETE FROM buku where id_buku = '$id_buku'";
$buku = mysqli_query($kon, $query);

//periksa query, apakah ada kesalahan
if(!$buku){
    die("Gagal menghapus data: ".mysqli_errno($kon).
    "_".mysqli_errno($kon));

}else{
    echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
}
?>

