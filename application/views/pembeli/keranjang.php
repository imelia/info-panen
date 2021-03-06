<?php $this->load->view('pembeli/header'); ?>
<?php $this->load->view('pembeli/topbar_riwayatpesan'); ?>
<section class="site-section" id="agents-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-left mt-5">
                <h2 class="section-title mb-3 text-center">Keranjang</h2>
                <p class="lead text-center">Fitur ini merupakan form untuk para petani yang ada di Kabupaten Probolinggo untuk mempromosikan hasil panen raya agar lebih dikenal oleh masyarakat yang ada di Kabupaten Probolinggo</p>
            </div>
        </div>
        <!--Form Home-->
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless table-hover" id="riwayat-pesan" width="100%" cellspacing="2">
                                    <thead class="">
                                        <tr class="d-flex align-items-center invisible" style="margin-top: -20%;">
                                            <td class="p-5 text-center">No</td>
                                            <td class="p-5 text-center">Gambar</td>
                                            <td class="p-5 text-center">Nama</td>
                                            <td class="p-5 text-center">Jumlah</td>
                                            <td class="p-5 text-center">Harga</td>
                                            <td class="p-5 text-center">Subtotal</td>
                                            <td class="p-5 text-center">Status</td>
                                            <td class="p-5 text-center">Status</td>
                                        </tr>
                                    </thead>
                                    <tbody class="card p-3">
                                        <tr class="shadow mb-5 d-flex justify-content-center">
                                            <td style="padding-left:4%;">No</td>
                                            <td style="padding-right: 4%; padding-left:4%;">Gambar</td>
                                            <td class="pl-4 pr-5">Nama</td>
                                            <td class="pl-4 pr-5">Jumlah</td>
                                            <td style="padding-right: 11%;">Harga</td>
                                            <td style="padding-right: 11%;">Subtotal</td>
                                            <td style="padding-right: 15%;">Aksi</td>
                                        </tr>
                                        <?php
                                        $no = 1;
                                        foreach ($this->cart->contents() as $items) :
                                            // if ($items['username'] == $this->session->userdata('username')) :
                                        ?>
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
                                                            <?= $items['qty'] . 'Kg'; ?>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="p-2 text-center">
                                                        <p class="card-text">
                                                            <?= "Rp" . number_format($items['price'], 2, '.', ','); ?>
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
                                                <td>
                                                    <div class="p-2">
                                                        <form action="<?= base_url('VTanam_panen/hapus'); ?>" method="post">
                                                            <input type="hidden" name="rowid" value="<?= $items['rowid'] ?>">
                                                            <input type="hidden" name="id" value="<?= $items['id'] ?>">
                                                            <input type="hidden" name="name" value="<?= $items['name'] ?>">
                                                            <input type="hidden" name="qty" value="<?= $items['qty'] ?>">
                                                            <button type="submit" class="btn btn-sm btn-primary">Hapus</button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="invisible">
                                                    <div class="mt-5 pt-5">
                                                        <a href="<?= base_url('VTanam_panen/checkout'); ?>" class="btn btn-sm btn-warning" disabled>
                                                            Checkout Panen
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                    <tr class="card">
                                        <td colspan="4"> Total Pesanan</td>
                                        <td class="d-flex flex-row-reverse align-items-center justify-content-right">
                                            <div class="bg-success text-white p-2 rounded">
                                                Rp. <?= number_format($this->cart->total(), 2, ',', '.') ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tfoot class="card">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td width="44.6%"></td>
                                        <td>
                                            <form action="<?= base_url('VTanam_panen/delAll_order'); ?>" method="post" style="display: inline-block;">
                                                <?php foreach ($this->cart->contents() as $itm) :  ?>
                                                    <input type="hidden" name="rowid[]" value="<?= $itm['rowid'] ?>">
                                                    <input type="hidden" name="id[]" value="<?= $itm['id'] ?>">
                                                    <input type="hidden" name="name[]" value="<?= $itm['name'] ?>">
                                                    <input type="hidden" name="qty[]" value="<?= $itm['qty'] ?>">
                                                <?php endforeach; ?>
                                                <button type="submit" class="btn btn-sm btn-danger">Bersihkan Pesanan</button>
                                            </form>
                                            <a href="<?= base_url('VTanam_panen'); ?>" class="btn btn-sm btn-primary">
                                                Lanjutkan Memesan
                                            </a>
                                            <a href="<?= base_url('VTanam_panen/checkout'); ?>" class="btn btn-sm btn-warning">
                                                Bayar Panen
                                            </a>
                                        </td>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    </div>


    </div>
    </div>
</section>
<?php $this->load->view('pembeli/footer'); ?>