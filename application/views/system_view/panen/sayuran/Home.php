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
                    <h4 class="card-title">DATA SAYURAN</h4>
                    <div class="pull-right">
                        <a href="<?= site_url('Sayuran/tambah') ?>" class="btn btn-primary"> + Tambah Data</a>
                    </div>

                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="sayuran-an" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Komoditi</th>
                                        <th>Luas Tanam</th>
                                        <th>Luas Panen</th>
                                        <th>Produksi Habis Dibongkar</th>
                                        <th>Produksi Belum Dibongkar</th>
                                        <th>Total</th>
                                        <th>Harga Min</th>
                                        <th>Harga Max</th>
                                        <th>Tahun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($sayur as $sayur) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $sayur['komoditi']; ?></td>
                                            <td><?= $sayur['luas_tanam']; ?></td>
                                            <td><?= $sayur['luas_panen']; ?></td>
                                            <td><?= $sayur['produksi_habis_dibongkar']; ?></td>
                                            <td><?= $sayur['produksi_belum_dibongkar']; ?></td>
                                            <td><?= $sayur['total']; ?></td>
                                            <td><?= $sayur['harga_min']; ?></td>
                                            <td><?= $sayur['harga_max']; ?></td>
                                            <td><?= $sayur['tahun']; ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>sayuran/edit/<?= $sayur['luas_tanam']; ?>" class="badge badge-primary badge-pill tampilModalUbah">Edit</a>
                                                <a href="<?= base_url(); ?>sayuran/hapus/<?= $sayur['id_tsayur']; ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
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