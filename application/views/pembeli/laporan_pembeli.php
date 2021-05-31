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
                                    <h4 class="text-center">Halaman Laporan</h4>
                                </td>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php if ($laporan) { ?>
                                <table class="table text-center table-borderless table-hover" id="laporan-pem" width="100%" cellspacing="2">
                                    <thead class="bg-danger text-white">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pembeli</th>
                                            <th>Nama Panen</th>
                                            <th>Jumlah Transaksi</th>
                                            <th>Jumlah Bayar</th>
                                            <th>Item</th>
                                            <!-- <th class="invisible">Detail</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($laporan as $lp) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $lp['nama_pembeli']; ?></td>
                                                <td><?= $lp['nama_product']; ?></td>
                                                <td><?= "Rp" . number_format($lp['harga'], 2, '.', ','); ?></td>
                                                <td><?= "Rp" . number_format($lp['total_harga'], 2, '.', ','); ?></td>
                                                <td><?= $lp['jumlah']; ?></td>
                                                <!-- <td><?= $lp['status_bayar']; ?></td> -->
                                                <!-- <td class="invisible">
                                                    <a href="<?= base_url('Vtanam_panen/detail_riwayat/' . $ht['id_header_transaksi']); ?>" class="btn btn-success btn-sm">
                                                        <i class="fa fa-eye"></i> Detail
                                                    </a>
                                                </td> -->
                                            </tr>
                                        <?php endforeach; ?>
                                        <?php $i++; ?>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <p class="alert alert-success">
                                    <i class="fa fa-warning"></i>Belum ada data Transaksi
                                </p>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('pembeli/footer'); ?>