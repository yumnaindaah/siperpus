<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama DESC";

$res = mysqli_query($kon,$sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
    $pinjam[] = $data;
}

include '../aset/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
</head>
<body>
    
<div class="container">
    <div class="row mt-4">
        <div class="col-md">   
            <div class="card">
                <div class="card-header">
                <h2 class="card-title"> <i class="fas fa-user"></i> Data Anggota  </h2>
                </div>
                <div class="card-body">
                <center><h3><i class="fas fa-user-plus"></i><a href="tambah_anggota.php" class="badge badge-light">Tambah Anggota</a></h3></center>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
            <?php
                $no = 1;
                foreach ($pinjam as $p) { 
                    ?>

                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $p['nama'] ?></td>
                    <td><?= $p['kelas']?></td>
                    <td>
                    <a href="#" class="badge badge-success">Detail</a>
                    <a href="#" class="badge badge-warning">Edit</a>
                    <a href="#" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
            </tbody> 
            </table>   
        </div>
    </div>
</div>    
         
</body>
</html>

<?php
include '../aset/footer.php';
?>