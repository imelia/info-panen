<?php $this->load->view('pembeli/header'); ?>
<?php $this->load->view('pembeli/topbar_riwayatpesan'); ?>
<div class="container-fluid">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <?= $this->session->flashdata('message') ?>
                    <table class="table text-center table-borderless table-hover">
                        <thead class="card text-center justify-content-center">
                            <tr>
                                <td class="text-center card" width="100%">
                                    <h4 class="text-center">Detail Riwayat Pesan</h4>
                                </td>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php { ?>
                                <table class="table text-center table-borderless table-hover" id="riwayat-pesan" width="100%" cellspacing="2">
                                    <thead class="bg-success">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pembeli</th>
                                            <th>Jumlah Total</th>
                                            <th>Jumlah Item</th>
                                            <th>Status</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <!-- <?php } { ?>
                                <p class="alert alert-success">
                                    <i class="fa fa-warning"></i>Belum ada data Transaksi
                                </p>
                            <?php } ?> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('pembeli/footer'); ?>