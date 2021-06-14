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
                            <table class="table text-center table-borderless table-hover" id="laporan-pem" width="100%" cellspacing="2">
                                <thead class="bg-danger text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Panen</th>
                                        <th>Harga</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Item</th>
                                        <!-- <th class="invisible">Detail</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($transaksi as $ht) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $ht['nama_product']; ?></td>
                                            <td><?= "Rp" . number_format($ht['harga'], 2, '.', ','); ?></td>
                                            <td><?= "Rp" . number_format($ht['harga'], 2, '.', ','); ?></td>
                                            <td><?= $ht['jumlah']; ?></td>
                                            <!-- <td><?= $ht['status_bayar']; ?></td> -->
                                            <!-- <td class="invisible">
                                                    <a href="<?= base_url('VTanam_panen/detail_riwayat/' . $ht['id_header_transaksi']); ?>" class="btn btn-success btn-sm">
                                                        <i class="fa fa-eye"></i> Detail
                                                    </a>
                                                </td> -->
                                        </tr>
                                    <?php endforeach; ?>
                                    <?php $i++; ?>
                                </tbody>
                                <tr class="">
                                    <td colspan="4"></td>
                                    <td class="d-flex flex-row-reverse align-items-center justify-content-right">
                                        <div class="bg-success text-white rounded p-1">
                                            Total Pesanan : Rp. <?= number_format($ht['total_harga'], 2, ',', '.') ?>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('pembeli/footer'); ?>