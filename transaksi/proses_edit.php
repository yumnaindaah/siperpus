<?php  
include '../koneksi.php';
include 'fungsi_transaksi.php';

$id_pinjam = $_POST['id_pinjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_jatuh_tempo = date('Y-m-d', strtotime($tgl_pinjam.'+7 days'));
$tgl_kembali = NULL;
$denda = NULL;
if(isset($_POST['tgl_kembali'])){
	$tgl_kembali = $_POST['tgl_kembali'];
	mysqli_query($kon, "UPDATE detail_pinjam SET tgl_kembali='$tgl_kembali' WHERE id_pinjam=$id_pinjam");
	mysqli_query($kon, "UPDATE peminjaman SET tgl_pinjam='$tgl_pinjam' WHERE id_pinjam=$id_pinjam");	 
}else{
	mysqli_query($kon, "UPDATE peminjaman SET tgl_pinjam='$tgl_pinjam' WHERE id_pinjam=$id_pinjam");	 
}
$count = mysqli_affected_rows($kon);

if($count == 1){
	$denda = hitungDenda($kon, $id_pinjam, $tgl_kembali);
	echo $denda;
	$sql = "UPDATE peminjaman SET denda=$denda WHERE id_pinjam=$id_pinjam";
	$res = mysqli_query($kon, $sql);
	header("Location: index.php");
}else{
	header("Location: index.php");
}