<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('pagee/header'); ?>
</head>
<!-- load sidebar in page/sidebar -->
<?php $this->load->view('pagee/sidebar2'); ?>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/topbar'); ?>

<!--Form Home-->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php if (NULL !== $this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                } ?>
                <div class="card-header ">
                    <h4 class="card-title"><?= $title; ?></h4>
                    <!-- <div class="pull-right">
                        <a href="<?= site_url('Riwayat_pesan/edit') ?>" class="btn btn-primary"> + Tambah Data</a>
                    </div> -->
                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nama Produk Dipesan</th>
                                        <th>Bukti Bayar</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Sebagai</th>
                                        <th>Jumlah Transaksi</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Waktu Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($getByIdPenjual as $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data->nama_pembeli ?></td>
                                            <td><?= $data->nama_produk ?></td>
                                            <td><img src="<?= base_url() ?>/uploads/bayar/<?= $data->bukti_bayar ?>" width="300px" height="300px"></td>
                                            <td><?= "Rp " . number_format($data->jumlah_bayar, 2, ',', '.'); ?></td>
                                            <td><?= ($data->role == 3) ? 'Pembeli' : '' ?></td>
                                            <td><?= "Rp " . number_format($data->jumlah_transaksi, 2, ',', '.'); ?></td>
                                            <td>
                                                <?= date('d-M-Y', strtotime($data->tanggal_update)); ?>
                                            </td>
                                            <td>
                                                <?= date('H:i:s', strtotime($data->tanggal_update)); ?>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
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

</html>