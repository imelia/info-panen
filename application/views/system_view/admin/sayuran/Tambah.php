<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Data</title>
    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('pagee/header'); ?>
    <!-- load sidebar in page/sidebar -->
    <?php $this->load->view('pagee/sidebar'); ?>
    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('pagee/topbar'); ?>
</head>
<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>

<script>
    function hapus_confirm() {
        var msg;
        msg = "Anda yakin update data ? ";
        var agree = confirm(msg);
        if (agree)
            return true;
        else
            return false;
    }
</script>
<!--FOrm Tambah Data-->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="<?= base_url() ?>sayuran/tambah" method="post">
                    <?php if (NULL !== $this->session->flashdata('message')) {
                        echo $this->session->flashdata('message');
                    } ?>
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">FORM TAMBAH DATA</h4>
                            <div class="pull-right">
                                <a href="<?= site_url('sayuran') ?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                            </div>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Komoditi</label>
                                    <div class="form-group">
                                        <select class="form-control" name="komoditi" value="<?= set_value('komoditi') ?>" required>
                                            <?php foreach ($listKec as $syr) : ?>
                                                <option value="<?= $syr['nama_tanaman']; ?>"><?= $syr['nama_tanaman']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Luas Tanam (Ha)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="luas_tanam" value="<?= set_value('luas_tanam') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('luas_tanam') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Luas Panen (Ha)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="luas_panen" value="<?= set_value('luas_panen') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('luas_panen') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Produksi Habis Dibongkar(Kui)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="produksi_habis_dibongkar" value="<?= set_value('produksi_habis_dibongkar') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('produksi_habis_dibongkar') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Produksi Belum Dibongkar(Kui)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="produksi_belum_dibongkar" value="<?= set_value('produksi_belum_dibongkar') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('produksi_belum_dibongkar') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Total (Kui)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="total" value="<?= set_value('total') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('total') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Harga Min (Rp/Kui)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="harga_min" value="<?= set_value('harga_min') ?>" id="rupiah" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('harga_min') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Harga Max (Rp/Kui)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="harga_max" value="<?= set_value('harga_max') ?>" id="rupiah" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('harga_max') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tahun</label>
                                            <div class="form-group">
                                                <input type="text" name="tahun" value="<?= set_value('tahun') ?>" class="form-control">
                                                <?= form_error('tahun') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" onclick="return hapus_confirm()" class="btn btn-primary">Simpan</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
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