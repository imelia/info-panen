<?php $this->load->view('pembeli/header'); ?>
<?php $this->load->view('pembeli/topbar_riwayatpesan'); ?>
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
                                <a href="<?= base_url('VTanam_panen/edit_profile'); ?>" class="btn btn-sm btn-warning">
                                    <i class="fa fa-edit"></i>Edit
                                </a>
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
<?php $this->load->view('pembeli/footer'); ?>