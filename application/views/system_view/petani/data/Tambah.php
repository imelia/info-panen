<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Data</title>
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
                <form action="<?= base_url() ?>petani/insert" method="post" enctype="multipart/form-data">
                    <?= $this->session->flashdata('pesan') ?>
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">FORM TAMBAH DATA</h4>
                            <div class="pull-right">
                                <a href="<?= site_url('petani') ?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                            </div>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Ktp</label>
                                    <div class="form-group">
                                        <input type="file" name="filefoto" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Komoditas</label>
                                    <div class="form-group">
                                        <input type="text" name="komoditas" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Luas Sawah</label>
                                    <div class="form-group">
                                        <input type="text" name="luas_sawah" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Alamat Sawah</label>
                                    <div class="form-group">
                                        <input type="text" name="alamat_sawah" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Desa / Kelurahan</label>
                                    <div class="form-group">
                                        <input type="text" name="desa_kelurahan" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" onclick="return hapus_confirm()" class="btn btn-primary">Simpan</button>
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
<!-- Load modal-->
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