<?php
include '../koneksi.php';

if(isset($_POST['save'])){
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $ringkasan = $_POST['ringkasan'];
    $cover = $_POST['cover'];
    $stok = $_POST['stok'];
    $id_kategori = $_POST['id_kategori'];

    $query = mysqli_query($kon, "INSERT INTO buku (judul, penerbit, pengarang, ringkasan, cover, stok, id_kategori) VALUES 
                         ('$judul', '$penerbit', '$pengarang', '$ringkasan', '$cover', '$stok', '$id_kategori')");
    // $res = mysqli_query($koneksi, $query);
    $count = mysqli_affected_rows($kon);
    // var_dump($query);
    // var_dump($_POST);
    if($query > 0){
        header("location: index.php");
    }
    else{
        header("location: form_tambah.php");
    }
}
else{
    header ("location: index.php");
}
?>