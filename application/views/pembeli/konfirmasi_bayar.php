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
                                    <h4 class="text-center"><?= $title; ?></h4>
                                </td>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php if ($header_transaksi) { ?>
                                <table class="table table-borderless table-hover">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th class="">Nama Pembeli</th>
                                            <th>&nbsp;:&nbsp;</th>
                                            <th><?= $header_transaksi->nama_pembeli; ?></th>
                                            <!-- <th class="invisible">Detail</th> -->
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        <tr>
                                            <td class="">Produk</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?= $header_transaksi->nama_produk; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Jumlah Transaksi</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?= $header_transaksi->jumlah_transaksi; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Status Bayar</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?= ($header_transaksi->status_bayar == 1) ? 'Confirmed' : 'Pending' ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php
                                echo form_open_multipart(base_url('Vtanam_panen/konfirm_bayar/' . $header_transaksi->id_header_transaksi));
                                ?>
                                <table class="table table-borderless card">
                                    <tbody>
                                        <tr>
                                            <td>Pembayaran ke Rekening</td>
                                            <td>
                                                <select class="form-control" name="id_rekening" id="id_rekening">
                                                    <?php foreach ($rekening as $rk) : ?>
                                                        <option value="<?= $rk->id_tanam_panen ?>" <?php if ($header_transaksi->id_rekening == $rk->id_tanam_panen) {
                                                                                                        echo 'selected';
                                                                                                    } ?>>
                                                            <?= $rk->nama_bank; ?>
                                                            (No. Rek: <?= $rk->no_briva; ?> a.n <?= $rk->nama_petani; ?>) - <?= $rk->sebagai; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Bayar</td>
                                            <td>
                                                <input type="text" class="form-control" name="tanggal_bayar" id="tanggal_bayar" placeholder="dd-mm-yyyy" value="<?php if (isset($_POST['tanggal_bayar'])) {
                                                                                                                                                                    echo set_value('tanggal_bayar');
                                                                                                                                                                } elseif ($header_transaksi->tanggal_bayar != "") {
                                                                                                                                                                    $header_transaksi->tanggal_bayar;
                                                                                                                                                                } else {
                                                                                                                                                                    echo date('d-m-Y');
                                                                                                                                                                } ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Bayar</td>
                                            <td>
                                                <input type="text" class="form-control" name="jumlah_bayar" id="jumlah bayar" placeholder="Jumlah Bayar" value="<?php if (isset($_POST['jumlah_bayar'])) {
                                                                                                                                                                    echo set_value('jumlah_bayar');
                                                                                                                                                                } else {
                                                                                                                                                                    echo $header_transaksi->jumlah_transaksi;
                                                                                                                                                                } ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dari Bank</td>
                                            <td>
                                                <input type="text" class="form-control" name="nama_bank" id="nama_bank" placeholder="Nama Bank" value="<?= set_value('nama_bank'); ?>">
                                                <small>Misal: Bank BCA</small>
                                                <?= form_error('nama_bank', '<small class="text-danger">', '</small>') ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dari Rekening</td>
                                            <td>
                                                <input type="text" class="form-control" name="rekening_pembayaran" id="rekening_pembayaran" placeholder="Nomor Rekening" value="<?= set_value('rekening_pembayaran'); ?>">
                                                <small>Misal: 0007-xxxx-xxxx-xxxx</small>
                                                <?= form_error('rekening_pembayaran', '<small class="text-danger">', '</small>') ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Atas Nama</td>
                                            <td>
                                                <input type="text" class="form-control" name="rekening_pelanggan" id="rekening_pelanggan" placeholder="Atas Nama" value="<?= set_value('rekening_pelanggan'); ?>">
                                                <small>Misal: Imelda Triyanti</small>
                                                <?= form_error('rekening_pelanggan', '<small class="text-danger">', '</small>') ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Upload Bukti Bayar</td>
                                            <td>
                                                <input type="file" class="form-control" name="bukti_bayar" id="bukti_bayar" placeholder="Upload Bukti Bayar">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn mr-2" type="submit" name="submit">
                                                        <i class="fa fa-upload"></i> Bayar
                                                    </button>
                                                    <button class="btn btn-info btn" type="reset" name="reset">
                                                        <i class="fa fa-times"></i> Reset
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php
                                echo form_close();
                            } else { ?>
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