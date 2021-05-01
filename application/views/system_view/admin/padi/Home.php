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
                    <h4 class="card-title">DATA PADI PALAWIJA</h4>
                    <div class="pull-right">
                        <a href="<?= site_url('Padi/tambah') ?>" class="btn btn-primary"> + Tambah Data</a>
                    </div>

                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="padi-palawija" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kecamatan</th>
                                        <th>Tanam (Ha)</th>
                                        <th>Panen (Ha)</th>
                                        <th>Provitas (Ton/Ha)</th>
                                        <th>Produksi (Ton GKG)</th>
                                        <th>Tahun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($padi as $padi) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $padi['nama_kecamatan']; ?></td>
                                            <td><?= "" . number_format($padi['tanam'], 0, '.', '.') . "Ha"; ?></td>
                                            <td><?= "" . number_format($padi['panen'], 0, '.', '.') . "Ha"; ?></td>
                                            <td><?= "" . number_format($padi['provitas'], 0, '.', '.'); ?></td>
                                            <td><?= "" . number_format($padi['produksi'], 0, '.', '.'); ?></td>
                                            <td><?= $padi['tahun']; ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>padi/edit/<?= $padi['produksi']; ?>" class="badge badge-primary badge-pill tampilModalUbah">Edit</a>
                                                <a href="<?= base_url(); ?>padi/hapus/<?= $padi['id_tpadi']; ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
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