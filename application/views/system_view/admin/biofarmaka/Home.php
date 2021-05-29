<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>

    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('pagee/header'); ?>

    <!-- load sidebar in page/sidebar -->
    <?php $this->load->view('pagee/sidebar'); ?>
    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('pagee/topbar2'); ?>
</head>
<script>
    function hapus_confirm() {
        var msg;
        msg = "Anda yakin update data ? ";
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
                    <h4 class="card-title">DATA BIOFARMAKA</h4>
                    <div class="pull-right">
                        <a href="<?= site_url('Biofarmaka/tambah') ?>" class="btn btn-primary"> + Tambah Data</a>
                    </div>
                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Tabel</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="biofarmakan-an" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Komoditi</th>
                                        <th>Luas Tanam (m<sup>2</sup>)</th>
                                        <th>Luas Panen (m<sup>2</sup>)</th>
                                        <th>Provitas (kg/m<sup>2</sup>)</th>
                                        <th>Produksi (kg)</th>
                                        <th>Harga</th>
                                        <th>Tahun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($biofarmaka as $biofarmaka) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $biofarmaka['komoditi_biofarmaka']; ?></td>
                                            <td><?= "" . number_format($biofarmaka['luas_tanam'], 0, ',', '.'); ?></td>
                                            <td><?= "" . number_format($biofarmaka['luas_panen'], 0, ',', '.'); ?></td>
                                            <td><?= "" . number_format($biofarmaka['provitas'], 0, ',', '.'); ?></td>
                                            <td><?= "" . number_format($biofarmaka['produksi_biofarmaka'], 0, ',', '.'); ?></td>
                                            <td><?= $biofarmaka['harga_biofarmaka']; ?></td>
                                            <td><?= $biofarmaka['tahun']; ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>biofarmaka/edit/<?= $biofarmaka['id_tbiofarmaka']; ?>" class="badge badge-primary badge-pill tampilModalUbah">Edit</a>
                                                <a href="<?= base_url(); ?>biofarmaka/hapus/<?= $biofarmaka['id_tbiofarmaka']; ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
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