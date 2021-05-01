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
                    <h4 class="card-title">DATA PETANI</h4>
                    <div class="pull-right">
                        <a href="<?= site_url('petani/add') ?>" class="btn btn-primary"> + Tambah Data</a>
                    </div>

                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>KTP</th>
                                        <th>Komoditas</th>
                                        <th>Luas Sawah</th>
                                        <th>Alamat Sawah</th>
                                        <th>Desa/Kelurahan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($query as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><img src="<?= base_url() ?>/uploads/ktp/<?= $data->ktp; ?>" width="100px" height="100px"></td>
                                            <td><?= $data->komoditas ?></td>
                                            <td><?= $data->luas_sawah ?></td>
                                            <td><?= $data->alamat_sawah ?></td>
                                            <td><?= $data->desa_kelurahan ?></td>
                                            <td>
                                                <a href="<?= site_url('petani/edit/' . $data->id_daftar_petani) ?>" class="badge badge-primary badge-pill tampilModalUbah" onclick="return confirm('Edit Data?');">Edit</a>
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