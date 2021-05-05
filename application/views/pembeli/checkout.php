<?php $this->load->view('pembeli/header'); ?>
<?php $this->load->view('pembeli/topbar_riwayatpesan'); ?>
<div class="container-fluid">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <?= $this->session->flashdata('message') ?>
                    <table class="table text-center table-borderless table-hover" id="riwayat-pesan" width="100%" cellspacing="2">
                        <thead class="card text-center justify-content-center">
                            <tr>
                                <td class="text-center card" width="100%">
                                    <h4 class="text-center">Checkout Keranjang</h4>
                                </td>
                            </tr>
                        </thead>
                        <tbody class="card pt-5 pl-3 pr-3 mt-2 mb-2">
                            <tr>
                                <td colspan="" class="text-center d-flex align-items-center justify-content-right" style="border-top:0px solid white; margin-left:-2%">
                                    <div class="bg-secondary text-white p-2 rounded">
                                        <h6 class="text-center mt-2">Data Pesanan</h6>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($keranjang as $items) :  ?>
                                <?php if (NULL !== $this->session->flashdata('message')) {
                                    echo $this->session->flashdata('message');
                                } ?>

                                <tr class="text-center shadow mb-5 d-flex align-items-center justify-content-between">
                                    <td>
                                        <?= $no++; ?>
                                    </td>
                                    <td>
                                        <div class="card" style="width: 7rem;">
                                            <img class="card-img-top" src="<?= base_url() ?>/uploads/panen/<?= $items['image']; ?>" alt="Card image cap">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="p-2 text-center">
                                            <h4 class="card-title">
                                                <?= $items['name']; ?>
                                            </h4>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="p-2 text-center">
                                            <p class="card-text">
                                                <?= $items['qty']; ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="p-2 text-center">
                                            <p class="card-text">
                                                <?= $items['price']; ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="p-2 text-center">
                                            <p class="card-text">
                                                <?= $items['subtotal']; ?>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tr class="card  text-left">
                            <td colspan="4">Total Pesanan</td>
                            <td class="d-flex flex-row-reverse align-items-center justify-content-right">
                                <div class="bg-success text-white p-2 rounded">
                                    Rp. <?= number_format($this->cart->total(), 2, ',', '.') ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <form action="<?= base_url('Vtanam_panen/checkout'); ?>" method="POST" enctype="multipart/form-data">
                        <?php foreach ($keranjang as $item) : ?>
                            <input type="hidden" name="id_anggota[]" value="<?= $pembeli['id_anggota']; ?>">
                            <input type="hidden" name="id_produk[]" value="<?= $item['id']; ?>">
                            <input type="hidden" name="nama_produk[]" value="<?= $item['name']; ?>">
                            <input type="hidden" name="qty[]" value="<?= $item['qty']; ?>">
                            <input type="hidden" name="price[]" value="<?= $item['price']; ?>">
                            <!-- <input type="hidden" name="subtotal" value="<?= $item['subtotal']; ?>"> -->
                            <br>
                            <input type="hidden" name="jumlah_transaksi[]" value="<?= $this->cart->total(); ?>">
                        <?php endforeach; ?>
                        <table class="table mt-5">
                            <thead>
                                <tr>
                                    <td colspan="3" class="text-center d-flex align-items-center justify-content-right" style="border-top:0px solid white;margin-left:-2%">
                                        <div class="bg-secondary text-white p-2 rounded">
                                            <h6 class="text-center mt-2">Data Pembeli</h6>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th width="25%" style="border-top:0px solid white;">
                                        Username
                                    </th>
                                    <th style="border-top:0px solid white;">
                                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $pembeli['username']; ?>">
                                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                    </th>
                                </tr>
                                <td width="25%" style="border-top:0px solid white;">
                                    Sebagai
                                </td>
                                <td style="border-top:0px solid white;">
                                    <input type="hidden" name="id_akses" class="form-control" placeholder="id_akses" value="3">
                                    <?= form_error('id_akses', '<small class="text-danger">', '</small>'); ?>

                                    <input type="text" name="" class="form-control" placeholder="id_akses" value="<?= ($pembeli['id_akses'] === 'pembeli') ? (3 ? 'Pembeli' : '') : ''; ?>">
                                    <?= form_error('id_akses', '<small class="text-danger">', '</small>'); ?>
                                </td>
                            </tbody>
                            <tfoot>
                                <td width="44.6%" style="border-top:0px solid white;"></td>
                                <td class="d-flex align-items-center justify-content-end mb-4" style="border-top:0px solid white;">
                                    <button type="input" class="btn btn-sm btn-success">
                                        Lanjutkan Membayar
                                    </button>
                                </td>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('pembeli/footer'); ?>