<?php  
include '../koneksi.php';
include 'fungsi_transaksi.php';

$buku 		= ambilBuku($kon);
$anggota 	= ambilAnggota($kon);

include '../aset/header.php';

?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h3>Form Tambah Peminjaman</h3>
				</div>
				<div class="card-body">
					<form method="post" action="proses_pinjam.php">
						<div class="form-group">
							<label for="anggota">Nama Anggota</label>
							<select name="id_anggota" class="form-control">
								<?php  
								foreach ($anggota as $a) { ?>
									<option value="<?=$a['id_anggota']?>"><?=$a['nama']?></option>
								<?php }
								?>
							</select>
						</div>

						<div class="form-group">
							<label for="buku">Judul Buku</label>
							<select name="id_buku" class="form-control">
								<?php  
								foreach ($buku as $b) {?>
									<option value="<?=$b['id_buku']?>"><?=$b['judul']?></option>
								<?php }
								?>
							</select>
						</div>

						<div class="form-group">
							<label for="datepicter">Tanggal Pinjam</label>
							<input type="date" name="tgl_pinjam" class="form-control" require>
						</div>
						
						<div class="form-group">
							<label for="petugas">Nama Petugas</label>
							<select name="id_petugas" class="form-control">
								<?php  
								foreach ($petugas as $c) {?>
									<option value="<?=$c['id_petugas']?>"><?=$c['nama_petugas']?></option>
								<?php }
								?>
							</select>
						</div>

						<div class="form-group">
							<button type="submit" name="save" class="btn btn-primary mt-auto">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php  
include '../aset/footer.php';
?>