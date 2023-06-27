<!-- <?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
// memanggil file konek.php untuk membuat konek
include '../konek.php';

// mengecek apakah di url ada nilai GET id
if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM administrasi WHERE id_administrasi ='$id'";
    $result = mysqli_query($konek, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if (!$result) {
        die("Query Error: " . mysqli_errno($konek) .
            " - " . mysqli_error($konek));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
    // apabila data tidak ada pada database maka akan dijalankan perintah ini
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
    }
} else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST">
							<div class="card">
								<div class="card-header">
									<div class="card-title">FORM UBAH USER</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												
												<div class="form-group">
													<label>Nama</label>
													<input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" placeholder="Nama..">
												</div>
												
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="ubah" class="btn btn-success btn-sm">Ubah</button>
									<a href="?halaman=tampil_user" class="btn btn-default btn-sm">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

?> -->



<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="proses_edit.php" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">UBAH Administrasi</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                
                             
                                <input name="id" value="<?php echo $id; ?>" hidden/>
                                <div class="form-group">
                                    <label>Nama Administrasi</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" value="<?php echo $data['keterangan']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Jenis Administrasi</label>
                                    <input type="text" name="id_jenis_administrasi" class="form-control" required="" value="<?php echo $data['id_jenis_administrasi']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Gambar Produk</label>
                                    <img src="gambar/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                    <input type="file" name="gambar_produk" class="form-control" />
                                    <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" name="link" class="form-control" required="" value="<?php echo $data['link']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Periode</label>
                                    <input type="text" name="periode" class="form-control" required="" value="<?php echo $data['periode']; ?>" />
                                </div>
                               

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Ubah</button>
                        <a href="?halaman=beranda" class="btn btn-default">Batal</a>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>