<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Data</title>
</head>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/header'); ?>
<!-- load sidebar in page/sidebar -->
<?php $this->load->view('pagee/sidebar2'); ?>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/topbar'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <?php if (NULL !== $this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                } ?>
                <div class="card card-plain table-plain-bg">
                    <div class="card-header ">
                        <h4 class="card-title">EDIT DATA</h4>
                        <div class="pull-right">
                            <a href="<?= site_url('petani') ?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                        </div>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">

                        <form action="<?= base_url() ?>petani/updatedata" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Ktp</label>
                                    <div class="form-group">
                                        <input type="file" name="filefoto" class="form-control">
                                        <!-- file lama -->
                                        <input type="hidden" name="filelama" value="<?= $data->ktp ?>" required>
                                        <!-- ID -->
                                        <input type="hidden" name="id" value="<?= $data->id_daftar_petani ?>" required>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row">
                                      <div class="col-md-12">
                                      <label>Nama</label>
                                          <div class="form-group">
                                              <input type="text" name="nama_petani" value="<?= $data->nama_petani ?>" class="form-control">
                                              
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Alamat</label>
                                          <div class="form-group">
                                              <input type="text" name="alamat_petani" value="<?= $data->alamat_petani ?>" class="form-control">
                                             
                                          </div>
                                      </div>
                                  </div> 
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Nomor Hp</label>
                                          <div class="form-group">
                                              <input type="text" name="no_hp_petani" value="<?= $data->no_hp_petani ?>" class="form-control">
                                          </div>
                                      </div>
                                  </div> -->
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Komoditas</label>
                                    <div class="form-group">
                                        <input type="text" name="komoditas" value="<?= $data->komoditas ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Luas Sawah</label>
                                    <div class="form-group">
                                        <input type="text" name="luas_sawah" value="<?= $data->luas_sawah ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Alamat Sawah</label>
                                    <div class="form-group">
                                        <input type="text" name="alamat_sawah" value="<?= $data->alamat_sawah ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Desa / Kelurahan</label>
                                    <div class="form-group">
                                        <input type="text" name="desa_kelurahan" value="<?= $data->desa_kelurahan ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" onclick="return hapus_confirm()" class="btn btn-success btn-flat">Update</button>
                                <button type="reset" class="btn btn-default">Batal</button>
                            </div>
                            <div class="clearfix"></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End Tambah Data-->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php $this->load->view('pagee/modal'); ?>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/footer'); ?>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $("#table-ah").dataTable();
    });
</script>

</html>