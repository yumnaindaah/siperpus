<?php
include '../koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul DESC";
        
$res = mysqli_query($kon,$sql);

$buku = array();

while ($data = mysqli_fetch_assoc($res)){
    $buku[] = $data;
}

// var_dump($query);
include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
</div>    
            
            <div class="card">
                <div class="card-header">
                <h2 class="card-title"> <i class="fas fa-book"></i> Data Buku </h2>
                </div>
                <div class="card-body">
                <center><h3><i class="fas fa-book-medical"></i><a href="form_tambah.php" class="badge badge-light">Tambah Buku</a></h3></center>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Ringkasan</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Kategori</th>
                    <th scope= "col">Aksi</th>
                    </tr>
                </thead>
            <?php
                $no = 1;
                foreach ($buku as $p) { 
                    ?>

                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $p['judul'] ?></td>
                    <td><?= $p['penerbit'] ?></td>
                    <td><?= $p['pengarang'] ?></td>
                    <td><?= $p['ringkasan'] ?></td>
                    <td><?= $p['cover'] ?></td>
                    <td><?= $p['stok'] ?></td>
                    <td><?= $p['id_kategori'] ?></td>

                    <td>
                    <a href="detail.php" class="badge badge-success">Detail</a>
                    <a href="edit.php" class="badge badge-warning">Edit</a>
                    <a href="hapus.php" class="badge badge-danger">Hapus</a>
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


<?php
include '../aset/footer.php';
?>

