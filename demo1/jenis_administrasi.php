<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Jenis Kategori</h4>
                            <a href="?halaman=tambah_jenis_administrasi" class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                    Tambah Jenis Kategori
                            </a>
                    </div>
                </div>
                <div class="card-body">
                <!-- Modal -->
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header no-bd">
                                <h5 class="modal-title">
                                    <span class="fw-mediumbold">
                                        New
                                    </span> 
                                    <span class="fw-light">
                                        Row
                                    </span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <p class="small">Create a new row using this form, make sure you fill them all</p>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Name</label>
                                            <input id="addName" type="text" class="form-control" placeholder="fill name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group form-group-default">
                                            <label>Position</label>
                                                <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Office</label>
                                                                        <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer no-bd">
                                                        <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="">
                                            <div class="table-responsive">
                                                <table id="add" class="display table table-striped table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Nama</th>     
                                                            <th style="width: 10%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $no=1;
                                                            $tampil = "SELECT * FROM jenis_administrasi";
                                                            $query = mysqli_query($konek,$tampil);
                                                            while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
                                                                $id_jenis_administrasi  = $data['id_jenis_administrasi'];
                                                                $nama_jenis = $data['nama_jenis'];
                                                              
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $no++;?></td>
                                                            <td><?php echo $nama_jenis;?></td>
                                                            <td>
                                                                <div class="form-button-action">
                                                                    <a href="?halaman=ubah_jenis_administrasi&id_jenis_administrasi=<?php echo $id_jenis_administrasi;?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit User">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                    <a href="?halaman=kelola_jenis_administrasi&id_jenis_administrasi=<?php echo $id_jenis_administrasi;?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus User">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                            }   
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
        </div>
</div>


<?php
    if(isset($_GET['id_jenis_administrasi'])){
        $sql_hapus = "DELETE FROM jenis_administrasi WHERE id_jenis_administrasi='".$_GET['id_jenis_administrasi']."'";
        $query_hapus = mysqli_query($konek,$sql_hapus);
        if($query_hapus){
            echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>" ;
            echo '<meta http-equiv="refresh" content="3; url=?halaman=kelola_jenis_administrasi">';
          }else{
            echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>" ;
            echo '<meta http-equiv="refresh" content="3; url=?halaman=kelola_jenis_administrasi">';
          }
    }
?>