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
<?php $this->load->view('pagee/sidebar'); ?>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/topbar2'); ?>

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
                        <a href="<?= site_url('data/tambah') ?>" class="btn btn-primary"> + Tambah Data</a>
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
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Komoditas</th>
                                        <th>Luas Sawah</th>
                                        <th>Alamat Sawah</th>
                                        <th>Desa/Kelurahan</th>
                                        <th>No HP</th>
                                        <th>No Rekening</th>
                                        <th>Nama Bank</th>
                                        <th>Atas Nama</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($query as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><img src="<?= base_url() ?>/uploads/ktp/<?= $data->ktp; ?>" width="100px" height="100px"></td>
                                            <td><?= $data->username ?></td>
                                            <td><?= $data->password ?></td>
                                            <td><?= $data->komoditas ?></td>
                                            <td><?= $data->luas_sawah ?></td>
                                            <td><?= $data->alamat_sawah ?></td>
                                            <td><?= $data->desa_kelurahan ?></td>
                                            <td><?= $data->no_telp ?></td>
                                            <td><?= $data->no_rekening ?></td>
                                            <td><?= $data->nama_bank ?></td>
                                            <td><?= $data->atas_nama ?></td>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <!-- <div class="col-xxl-6 pr-1">
                                                        <a href="<?= base_url('Data/update/') . $data->id_daftar_petani ?>" class="badge badge-primary" role="badge" data-id="<?= $datusr['id']; ?>" data-toggle="modal">
                                                            <i class="fa fa-user-alt"></i> Active
                                                        </a>
                                                    </div> -->

                                                    <form action="<?= base_url('Data/delete'); ?>" method="get">
                                                        <button type="submit" class="btn btn-danger" role="button">
                                                            <i class="fa fa-trash"></i>
                                                            <input type="hidden" name="id" id="id" value="<?= $data->id_anggota; ?>">
                                                        </button>
                                                    </form>
                                                </div>
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