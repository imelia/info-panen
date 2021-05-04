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
                            <h5 class="card-title text-center pb-1 pt-2">My Profil</h5>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <h5>Data <?= $user['id_akses']; ?></h5>
                                <div class="col-md-12 d-flex justify-content-center gbr">
                                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="pict" width="25%" class="img-thumbnail rounded-circle shadow p-3 bg-white rounded gbr-gbr">
                                </div>
                            </div>
                            <div class="row text-center mt-4">
                                <div class="col-md-12">
                                    <div class="card-body pt-1 ml-2 mr-2 rounded">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-lg-6 mx-auto lab">
                                                <p class="labelku pb-1 pt-2"><?= $user['username']; ?></p>
                                                <p class="labelku pb-1"><?= $user['alamat']; ?></p>
                                                <p class="labelku" class="pb-1"><?= $user['no_telp']; ?></p>
                                                <label for="since"><?= $user['id_akses']; ?> yang bergabung sejak <?= date('d F Y', $user['date_created']); ?></label><br><br>
                                            </div>
                                            <div class="col-md-12 col-lg-6 mx-auto lab">
                                                <p class="labelku-lab">No Rekening</p>
                                                <p class="text-center"><?= $user['no_rekening']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="now-ui-icons arrows-1_refresh-69"></i> Infopanen
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End List Data -->
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