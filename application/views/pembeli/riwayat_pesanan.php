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
                                    <h4 class="text-center">Halaman Konfirmasi Pesanan</h4>
                                </td>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php if ($header_transaksi) { ?>
                                <table class="table text-center table-borderless table-hover" id="riwayat-pesan" width="100%" cellspacing="2">
                                    <thead class="bg-success">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pembeli</th>
                                            <th>Role</th>
                                            <th>Jumlah Total</th>
                                            <th>Status</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($header_transaksi as $ht) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $ht['nama_pembeli']; ?></td>
                                                <td><?= ($ht['role'] == 3 ? 'Pembeli' : ''); ?></td>
                                                <td><?= $ht['jumlah_transaksi']; ?></td>
                                                <td><?= ($ht['status_bayar'] == 1) ? 'Confirmed' : 'Pending'; ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="<?= base_url('Vtanam_panen/laporan/' . $ht['jumlah_transaksi']); ?>" class="btn btn-success btn-sm mr-2">
                                                            <i class="fa fa-eye"></i> Detail
                                                        </a>
                                                        <?php if ($ht['status_bayar'] == 1) : ?>
                                                            <a href="<?= site_url('Vtanam_panen/konfirmasi/' . $ht['id_header_transaksi']); ?>" class="btn badge-primary btn-sm disabled">
                                                                <i class="fa fa-upload"></i> Bayar
                                                            </a>
                                                        <?php else : ?>
                                                            <a href="<?= site_url('Vtanam_panen/konfirmasi/' . $ht['id_header_transaksi']); ?>" class="btn badge-primary btn-sm">
                                                                <i class="fa fa-upload"></i> Bayar
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <?php $i++; ?>
                                    </tbody>
                                    <tfoot>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        </td>
                                    </tfoot>
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