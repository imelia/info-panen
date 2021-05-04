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
        <!-- Input Data -->
        <div class="content mt-5">
            <!-- List Data -->
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">Selamat Datang <?= $user['username']; ?></h5>
                            <?= $this->session->flashdata('message') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header bg-info m-1 text-white">
                            <h5 class="card-title text-center pb-1 pt-2">Edit Profile</h5>
                        </div>
                        <div class="card-body">
                            <?= form_open_multipart('Dash_petani/edit_profile') ?>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-6">
                                    <label for="username">Usename</label>
                                    <input type="username" class="form-control" name="username" id="username" value="<?= $user['username']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-12 col-lg-6">
                                    <label for="No Telpon">No Telpon</label>
                                    <input type="tel" class="form-control" name="no_telp" id="no_telp" value="<?= $user['no_telp']; ?>">
                                    <?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-6">
                                    <label for="No Rekening">No Rekening</label>
                                    <input type="text" class="form-control" name="no_rekening" id="no_rekening" value="<?= $user['no_rekening']; ?>">
                                    <?= form_error('no_rekening', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-12 col-lg-6">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control"><?= $user['alamat']; ?></textarea>
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-2">Picture</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info ">Simpan</button>
                            <?= form_close(); ?>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="now-ui-icons arrows-1_refresh-69"></i> Baru Update
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End List Data -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php $this->load->view('pagee/modal'); ?>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/footer'); ?>

</body>

</html>