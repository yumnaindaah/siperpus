<?php

include '../koneksi.php';

include '../aset/header.php';

$query = mysqli_query($kon, "SELECT * FROM nama");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Anggota</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
      <div class="col-md">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title"><i class="fas fa-user-plus"></i> Tambah Anggota </h2>
    

    <form action="proses_tambah.php"method="post">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" name="nama" placeholder="Nama" required>
    </div>

    <div class="form-group">
      <label for="kelas">Kelas</label>
      <input type="text" class="form-control" name="kelas" placeholder="Kelas" required>
    </div>
    <div class="form-group">
      <label for="telp">Telepon</label>
      <input type="number" class="form-control" name="telp" placeholder="Telepon"required>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Username" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
  <center><button type="submit" name="save" class="btn btn-primary" >Tambahkan</button></center>

</form>
        </div>
      </div>
    </div>
  </div>
</div>  


</body>
</html>

<?php
include '../aset/footer.php';
?>