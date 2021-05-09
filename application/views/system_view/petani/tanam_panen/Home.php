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
                    <h4 class="card-title">DATA PANEN</h4>
                    <div class="pull-right">
                        <a href="<?= site_url('tanam_panen/add') ?>" class="btn btn-primary"> + Tambah Data</a>
                    </div>

                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered display" id="tanam-panen" cellspacing="0" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Kecamatan</th>
                                        <th>Komoditi</th>
                                        <th>Stok</th>
                                        <th>Tanggal Tanam</th>
                                        <th>Tanggal Panen</th>
                                        <th>Status Panen</th>
                                        <th>Hasil Panen</th>
                                        <th>Harga Panen</th>
                                        <th>Kondisi</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tanam as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><img src="<?= base_url() ?>/uploads/panen/<?= $data->gambar_panen; ?>" width="100px" height="100px"></td>

                                            <!--<td><?= $data->atas_nama ?></td>
                                            <td><?= $data->no_telp ?></td>
                                            <td><?= $data->alamat ?></td> -->
                                            <td><?= $data->desa ?></td>
                                            <td><?= $data->komoditi ?></td>
                                            <td class="text-center"><?= $data->stok_tanam; ?></td>
                                            <td><?= $data->tanggal_tanam ?></td>
                                            <td><?= $data->tanggal_panen ?></td>
                                            <td><?= $data->status_panen ?></td>
                                            <td><?= "" . number_format($data->hasil_panen, 0, '.', '.') . "kg"; ?> </td>
                                            <td><?= "Rp" . number_format($data->harga_panen, 0, '.', '.'); ?></td>
                                            <td><?= $data->kondisi_panen ?></td>
                                            <td><?= $data->keterangan ?></td>
                                            <!--<td><?= $data->no_rekening ?></td>
                                            <td><?= $data->nama_bank ?></td>
                                            <td><?= $data->atas_nama ?></td>-->
                                            <td>
                                                <a href="<?= site_url('tanam_panen/edit/' . $data->id_tanam_panen) ?>" class="badge badge-primary badge-pill tampilModalUbah" onclick="return confirm('Anda yakin ingin update data?');">Edit</a>
                                                <a href="<?php echo site_url('tanam_panen/hapus/' . $data->id_tanam_panen); ?>" class="badge badge-primary badge-pill tampilModalUbah" onclick="return confirm('Anda yakin ingin menghapus data ini  <?= $data->komoditi; ?>?');">Hapus</a>
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
    </div>
</div>
<!-- End of Main Content -->
<?php $this->load->view('pagee/modal'); ?>
<?php $this->load->view('pagee/footer'); ?>
</body>

</html>