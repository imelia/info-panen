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
    <title>Home</title>
</head>
<!-- load sidebar in page/sidebar -->
<?php $this->load->view('pagee/sidebar'); ?>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/topbar2'); ?>
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
                    <h4 class="card-title">DATA BUAH</h4>
                    <div class="pull-right">
                        <a href="<?= site_url('Buah/tambah') ?>" class="btn btn-primary"> + Tambah Data</a>
                    </div>

                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="buahan-an" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Komoditi</th>
                                        <th>Jumlah Tanaman (Pohon)</th>
                                        <th>Tanaman Baru (Pohon)</th>
                                        <th>Tanaman Belum Menghasilkan (Pohon)</th>
                                        <th>Tanaman Produktif(Pohon)</th>
                                        <th>Produksi (Kuintal)</th>
                                        <th>Provitas (kg/ph)</th>
                                        <th>Rerata Harga (Rp/Kg)</th>
                                        <th>Tahun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($buah as $buah) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>

                                            <td><?= $buah['nama_tanaman']; ?></td>
                                            <td><?= "" . number_format($buah['jumlah_tanaman'], 0, ',', '.'); ?></td>
                                            <td><?= "" . number_format($buah['tanaman_baru'], 0, ',', '.'); ?></td>
                                            <td><?= "" . number_format($buah['tanaman_menghasilkan'], 0, ',', '.'); ?></td>
                                            <td><?= "" . number_format($buah['tanaman_produktif'], 0, ',', '.'); ?></td>
                                            <td><?= "" . number_format($buah['produksi_buah'], 0, ',', '.'); ?></td>
                                            <td><?= "" . number_format($buah['provitas'], 0, ',', '.'); ?></td>
                                            <td><?= $buah['harga']; ?></td>
                                            <td><?= $buah['tahun']; ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>buah/edit/<?= $buah['id_tbuah']; ?>" class="badge badge-primary badge-pill">Edit</a>
                                                <a href="<?= base_url(); ?>buah/hapus/<?= $buah['id_tbuah']; ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
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