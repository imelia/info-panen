<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Data</title>

</head>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/header'); ?>
<!-- load sidebar in page/sidebar -->
<?php $this->load->view('pagee/sidebar'); ?>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/topbar'); ?>
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
        msg = "Anda yakin data sudah benar ?? ";
        var agree = confirm(msg);
        if (agree)
            return true;
        else
            return false;
    }
</script>
<!--Form Tambah Data -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="<?= base_url() ?>biofarmaka/tambah" method="post">
                    <?php if (NULL !== $this->session->flashdata('message')) {
                        echo $this->session->flashdata('message');
                    } ?>
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">FORM TAMBAH DATA</h4>
                            <div class="pull-right">
                                <a href="<?= site_url('biofarmaka') ?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                            </div>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Komoditas</label>
                                    <div class="form-group">
                                        <select class="form-control" name="komoditi_biofarmaka" value="<?= $this->input->post('komoditi_biofarmaka') ?>" required>
                                            <?php foreach ($listKec as $row) : ?>
                                                <option value="<?= $row['nama_tanaman']; ?>"><?= $row['nama_tanaman']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <!--<option value="Jahe">Jahe</option>
                                        <option value="Lengkuas">Lengkuas</option>
                                        <option value="Kencur">Kencur</option>
                                        <option value="Kunyit">Kunyit</option>
                                        <option value="Lempuyang">Lempuyang</option>
                                        <option value="Temulawak">Temulawak</option>
                                        <option value="Temuireng">Temuireng</option>
                                        <option value="Temukunci">Temukunci</option>
                                        <option value="Dlingo">Dlingo</option>
                                        <option value="Kapulaga">Kapulaga</option>
                                        <option value="Mengkudu">Mengkudu</option>
                                        <option value="Mahkota Dewa">Mahkota Dewa</option>
                                        <option value="Kejibeling">Kejibeling</option>
                                        <option value="Sambiloto">Sambiloto</option>
                                        <option value="Lidah Buaya">Lidah Buaya</option>-->
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Luas Panen (m<sup>2</sup>)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="luas_panen" value="<?= set_value('luas_panen') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('luas_panen') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Luas Tanam (m<sup>2</sup>)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="luas_tanam" value="<?= set_value('luas_tanam') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('luas_tanam') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Provitas (kg/m<sup>2</sup>)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="provitas" value="<?= set_value('provitas') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('provitas') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Produksi (kg)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="produksi_biofarmaka" value="<?= set_value('produksi_biofarmaka') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('produksi_biofarmaka') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Harga</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="harga_biofarmaka" value="<?= set_value('harga_biofarmaka') ?>" id="rupiah" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('harga_biofarmaka') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tahun</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="tahun" value="<?= set_value('tahun') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('tahun') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" onclick="return hapus_confirm()" class="btn btn-primary">Simpan</button>
                                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End Tambah Data-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php $this->load->view('pagee/modal'); ?>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/footer'); ?>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $("#table-ah").dataTable();
    });
</script>

</html>