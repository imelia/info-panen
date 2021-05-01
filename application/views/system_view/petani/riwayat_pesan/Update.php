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
                            <a href="<?= site_url('Riwayat_pesan') ?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                        </div>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">

                        <form action="<?= base_url() ?>Riwayat_pesan/update" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nama Pembeli</label>
                                    <div class="form-group">
                                        <input type="hidden" name="id_header" value="<?= $query->id_header_transaksi ?>" class="form-control">
                                        <input type="text" name="nama_pembeli" value="<?= $query->nama_pembeli ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nama Panen</label>
                                    <div class="form-group">
                                        <input type="text" name="nama_produk" value="<?= $query->nama_produk ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Jumlah Transaksi</label>
                                    <div class="form-group">
                                        <input type="text" name="jumlah_transaksi" value="<?= $query->jumlah_transaksi ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Jumlah Bayar</label>
                                    <div class="form-group">
                                        <input type="text" name="jumlah_bayar" value="<?= $query->jumlah_bayar ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>
                            </div>
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