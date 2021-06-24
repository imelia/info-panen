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
                    <h4 class="card-title">DATA KOMODITAS</h4>
                    <div class="pull-right">
                        <a href="<?= site_url('komoditas/add') ?>" class="btn btn-primary"> + Tambah Data</a>
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
                                        <th>Gambar Komoditas</th>
                                        <th>Nama Komoditas</th>
                                        <th>Nama Tanaman</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $no = 1;
                                foreach ($query as $key => $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><img src="<?= base_url() ?>/uploads/komoditas/<?= $data->gambar; ?>" width="100px" height="100px"></td>
                                        <td><?= $data->nama_komoditas ?></td>
                                        <td><?= $data->nama_tanaman ?></td>
                                        <td>
                                            <a href="<?= site_url('Komoditas/edit/' . $data->id_komoditas) ?>" class="badge badge-primary badge-pill tampilModalUbah" onclick="return confirm('Edit Data?');">Edit</a>
                                            <form action="<?= site_url('Komoditas/deletedata/') ?>" method="post">
                                                <input type="hidden" name="id" id="id" value="<?= $data->id_komoditas ?>">
                                                <input type="hidden" name="image" id="image" value="<?= $data->gambar ?>">
                                                <button type="submit" class="badge badge-danger badge-pill tampilModalUbah" onclick="return confirm('Hapus Data?');">Delete</button>
                                            </form>
                                        </td>
                                        </button>
                                        </form>
                                        </td>
                                    </tr>
                                <?php
                                } ?>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <!-- Load modal-->
        <?php $this->load->view('pagee/modal'); ?>

        <!-- Load navbar in page/navbar -->
        <?php $this->load->view('pagee/footer'); ?>

        </body>

</html>