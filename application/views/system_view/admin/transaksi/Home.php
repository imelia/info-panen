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
    <title>Home - Padi</title>
</head>
<!-- load sidebar in page/sidebar -->
<?php $this->load->view('pagee/sidebar'); ?>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/topbar'); ?>
<script>
    function hapus_confirm() {
        var msg;
        msg = "Anda yakin hapus data ? ";
        var agree = confirm(msg);
        if (agree)
            return true;
        else
            return false;
    }
</script>
<!--Form Home-->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php if (NULL !== $this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                } ?>
                <div class="card-header ">
                    <h4 class="card-title">DATA TRANSAKSI</h4>

                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table table-bordered" id="header-transaksi" width="100%" cellspacing="0">
                            <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nama Produk Dipesan</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Rekening Pembayaran</th>
                                        <th>Atas Nama</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Jumlah Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($query as $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data->nama_pembeli ?></td>
                                            <td><?= $data->nama_produk ?></td>
                                            <td><?= $data->jumlah_bayar ?></td>
                                            <td><?= $data->rekening_pembayaran ?></td>
                                            <td><?= $data->rekening_pelanggan ?></td>
                                            <td><?= $data->tanggal_bayar ?></td>
                                            <td><?= $data->bukti_bayar ?></td>
                                            <td><?= $data->jumlah_transaksi ?></td>
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