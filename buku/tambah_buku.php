<?php

include '../koneksi.php';

include '../aset/header.php';

$query = mysqli_query($kon, "SELECT * FROM buku");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Buku</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
          <div class="card">
            <div class="card-header">
              <h3><i class="fas fa-book-medical"></i>Tambah Buku</h3>

<form action="proses_tambah.php"method="post">
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" name="judul" placeholder="Judul" required>
  </div>
  <div class="form-group">
    <label for="penerbit">Penerbit</label>
    <input type="text" class="form-control" name="penerbit" placeholder="penerbit" required>
  </div>
  <div class="form-group">
    <label for="pengarang">Pengarang</label>
    <input type="text" class="form-control" name="pengarang" placeholder="pengarang"required>
  </div>
  <div class="form-group">
    <label for="ringkasan">Ringkasan</label>
    <textarea class="form-control" name="ringkasan" placeholder="ringkasan" required rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="cover">Cover</label>
    <input type="file" class="form-control-file" name="cover" placeholder="cover" required>
  </div>
  <div class="form-group">
    <label for="stok">Stok</label>
    <input type="number" class="form-control" name="stok" placeholder="stok"required>
  </div>
  <div class="form-group">
                 <label for="buku">ID Kategori</label>
                 <select name="id_kategori" class="form-control" id="id_kategori">
                      <option value="">-- Pilih Kategori --</option>

                      <?php
                        while($kategori = mysqli_fetch_assoc($query)):
                      ?>

                      <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori["kategori"]; ?></option>

                      <?php
                       endwhile;
                      ?>
                 </select>
                </div>
  
  <center><button type="submit" name="save" class="btn btn-primary">Tambahkan</button></center>
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