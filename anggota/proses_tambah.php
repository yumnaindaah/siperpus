<?php

include '../koneksi.php';

if(isset($_POST['save']))
{
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_level = 3;


$sql =mysqli_query($kon, "INSERT INTO anggota (nama, kelas, telp, username, password, id_level)
       VALUES ('$nama','$kelas','$telp','$username','$password', $id_level)");
       
       if($query>0){
        echo "
        <script>
            alert(Buku Berhasil Ditambahkan :) ');
            document.location.href='index.php';
        </script>
        ";
       }

var_dump($sql);
var_dump($_POST);

    $res = mysqli_query($kon, $sql);

 $count = mysqli_affected_rows($kon);

    if($count == 1)
    {
        header("location: tambah_anggota.php");

    }else{
        header("location: index.php");
    }

} else {
    header("location: index.php");

}
   

?>
