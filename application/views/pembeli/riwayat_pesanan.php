<?php $this->load->view('pembeli/header'); ?>
<?php $this->load->view('pembeli/topbar_riwayatpesan'); ?>
<div class="container-fluid">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <?= $this->session->flashdata('message') ?>
                    <input type="hidden" name="" id="" class="timer" value="<?= date('M, d Y H:i:s', strtotime('+6 minute', strtotime(date('H:i:s')))); ?>">
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
                                            <!-- <th>show</th> -->
                                            <!-- <th>btn</th> -->
                                            <th>Nama Pembeli</th>
                                            <th>Role</th>
                                            <th>Harga</th>
                                            <th>Jumlah Bayar</th>
                                            <th>Status</th>
                                            <th>Detail</th>
                                            <th>Batal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($header_transaksi as $ht) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <!-- <td id="hello">
                                                    <?= $ht['time']; ?>
                                                </td> -->
                                                <td><?= $ht['nama_pembeli']; ?>
                                                <td><?= ($ht['role'] == 3 ? 'Pembeli' : ''); ?></td>
                                                <td><?= $ht['jumlah_transaksi']; ?></td>
                                                <td><?= $ht['jumlah_bayar']; ?></td>
                                                <td><?= ($ht['status_bayar'] == 1) ? 'Confirmed' : 'Pending'; ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="<?= base_url('Vtanam_panen/laporan/' . $ht['id_header_transaksi']); ?>" class="btn btn-success btn-sm mr-2">
                                                            <i class="fa fa-eye"></i> Detail
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php
                                                    $now = date('H:i:s', strtotime(date('H:i:s')));
                                                    $later = date('H:i:s', strtotime($ht['time']));

                                                    $selisih = strtotime($later) - strtotime($now);

                                                    // echo date('i:s', $selisih);

                                                    if ($ht['status_bayar'] == 1) :
                                                        echo 'Berhasil Dipesan';
                                                    ?>
                                                        <?php else :
                                                        if ($now >= $later) :
                                                            $data = [
                                                                'panen_id' => $ht['id_produk'],
                                                                'nama' => $ht['nama_produk'],
                                                                'jumlah' => $ht['jumlah'],
                                                            ];
                                                            $query = $this->db->insert('barang_masuk', $data);
                                                        ?>
                                                            <?php if ($query) :
                                                                $query1 = $this->db->get_where('barang_masuk', ['panen_id' => $data['panen_id']])->row_array();
                                                                $this->db->where('panen_id', $query1['panen_id']);
                                                                $this->db->delete('barang_masuk', $data);
                                                            ?>
                                                                <?php if ($query1) :
                                                                    $query2 = $this->db->get_where('header_transaksi', ['id_header_transaksi' => $ht['id_header_transaksi']])->row_array();
                                                                    $this->db->where('id_header_transaksi', $query2['id_header_transaksi']);
                                                                    $this->db->delete('header_transaksi');
                                                                ?>
                                                                    <?php if ($query2) :
                                                                        $query3 = $this->db->get_where('transaksi', ['id_header_transaksi' => $ht['id_header_transaksi']])->row_array();
                                                                        $this->db->where('id_header_transaksi', $query3['id_header_transaksi']);
                                                                        $this->db->delete('transaksi');
                                                                    ?>
                                                                        <?php if ($query3) :
                                                                            $query4 = $this->db->get_where('header_transaksi', ['id_header_transaksi' => $ht['id_header_transaksi']])->row_array();
                                                                            $this->db->set('status_bayar', 1);
                                                                            $this->db->where('id_header_transaksi', $query4['id_header_transaksi']);
                                                                            $this->db->delete('header_transaksi');
                                                                        ?>
                                                                            <?php if ($query4) : ?>
                                                                                <?php if ($ht['status_bayar'] == 1) : ?>
                                                                                    <a href="<?= site_url('Vtanam_panen/konfirmasi/' . $ht['id_header_transaksi']); ?>" class="btn badge-primary btn-sm disabled">
                                                                                        <i class="fa fa-upload"></i> Bayar
                                                                                    </a>
                                                                                <?php else : ?>
                                                                                    <form action="<?= base_url('Vtanam_panen/konfirmasi') ?>" method="post">
                                                                                        <input type="hidden" name="id_header_transaksi" value="<?= $ht['id_header_transaksi']; ?>">
                                                                                        <input type="hidden" name="id_penjual" value="<?= $ht['id_penjual']; ?>">
                                                                                        <button type="submit" role="button" class="btn badge-primary btn-sm" value="<?= $ht['id_penjual']; ?>">
                                                                                            <i class="fa fa-upload"></i> Bayar
                                                                                        </button>
                                                                                    </form>
                                                                                <?php endif; ?>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endif;
                                                                echo 'Cancel Done'; ?>
                                                            <?php else :
                                                                echo 'Waktu Cancel : ' . date('i:s', $selisih); ?>
                                                            <?php endif; ?>
                                                        <?php else :
                                                            echo 'Waktu Cancel : ' . date('i:s', $selisih); ?>
                                                            <form action="<?= base_url('Vtanam_panen/konfirmasi') ?>" method="post">
                                                                <input type="hidden" name="id_header_transaksi" value="<?= $ht['id_header_transaksi']; ?>">
                                                                <input type="hidden" name="id_penjual" value="<?= $ht['id_penjual']; ?>">
                                                                <button type="submit" role="button" class="btn badge-primary btn-sm" value="<?= $ht['id_penjual']; ?>">
                                                                    <i class="fa fa-upload"></i> Bayar
                                                                </button>
                                                            </form>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
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