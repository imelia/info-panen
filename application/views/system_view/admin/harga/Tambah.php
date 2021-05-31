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
    <?php $this->load->view('pagee/topbar2'); ?>
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
        msg = "Anda yakin simpan data ? ";
        var agree = confirm(msg);
        if (agree)
            return true;
        else
            return false;
    }
</script>
<!--Form Tambah Data-->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="<?= base_url() ?>harga/tambah" method="post">
                    <?php if (NULL !== $this->session->flashdata('message')) {
                        echo $this->session->flashdata('message');
                    } ?>
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">FORM TAMBAH DATA</h4>
                            <div class="pull-right">
                                <a href="<?= site_url('harga') ?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                            </div>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Harga (Rp)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="harga" value="<?= set_value('harga') ?>" id="rupiah" onkeypress="return hanyaAngka(event)" class="form-control" >
                                                <?= form_error('harga') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Komoditas</label>
                                            <div class="form-group">
                                                <select class="form-control" name="komoditas" value="<?= set_value('komoditas') ?>" required>
                                                    <?php foreach ($listKom as $row) : ?>
                                                        <option value="<?= $row['nama_komoditas']; ?>"><?= $row['nama_komoditas']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Pasar</label>
                                            <div class="form-group">
                                                <input type="text" name="pasar" value="<?= set_value('pasar') ?>" class="form-control">
                                                <?= form_error('pasar') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Kecamatan</label>
                                            <div class="form-group">
                                                <select class="form-control" name="kecamatan" value="<?= set_value('kecamatan') ?>" required>
                                                    <?php foreach ($listKec as $row) : ?>
                                                        <option value="<?= $row['nama_kecamatan']; ?>"><?= $row['nama_kecamatan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Keterangan</label>
                                            <div class="form-group">
                                                <input type="text" name="keterangan" value="<?= set_value('keterangan') ?>" class="form-control">
                                                <?= form_error('keterangan') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tanggal Update</label>
                                            <div class="form-group">
                                                <input type="date" name="tanggal_update" value="<?= set_value('tanggal_update') ?>" class="form-control">
                                                <?= form_error('tanggal_update') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" onclick="return hapus_confirm()" class="btn btn-primary">Simpan</button>
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
<!-- Load modal-->
<?php $this->load->view('pagee/modal'); ?>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/footer'); ?>

</body>

</html>