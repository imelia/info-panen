<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Data</title>
    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('pagee/header'); ?>
    <!-- load sidebar in page/sidebar -->
    <?php $this->load->view('pagee/sidebar2'); ?>
    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('pagee/topbar'); ?>
</head>
<script>
    function hapus_confirm() {
        var msg;
        msg = "Anda yakin data sudah benar ? ";
        var agree = confirm(msg);
        if (agree)
            return true;
        else
            return false;
    }
</script>

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9 col-md-offset-3">
                <form action="<?= base_url('Dash_petani/add_rekening') ?>" method="post">
                    <?php if (NULL !== $this->session->flashdata('message')) {
                        echo $this->session->flashdata('message');
                    } ?>
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">FORM TAMBAH DATA REKENING</h4>
                            <div class="pull-right">
                                <a href="<?= site_url('Dash_petani/rekening') ?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                            </div>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nama Bank</label>
                                    <div class="form-group">
                                        <input type="text" name="nama_bank" value="<?= set_value('nama_bank') ?>" class="form-control">
                                        <?= form_error('nama_bank', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Nomor Rekening</label>
                                    <div class="form-group">
                                        <input type="text" name="nomor_rekening" value="<?= set_value('nomor_rekening') ?>" class="form-control">
                                        <?= form_error('nomor_rekening', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Atas Nama</label>
                                    <div class="form-group">
                                        <input type="text" name="nama_pemilik" value="<?= set_value('nama_pemilik') ?>" class="form-control">
                                        <?= form_error('nama_pemilik', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" onclick="return hapus_confirm()" class="btn btn-primary">Simpan</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                </form>
            </div>
        </div>
    </div>
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