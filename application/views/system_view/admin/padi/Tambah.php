<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Data</title>

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
<!--Form Tambah Data-->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="<?= base_url() ?>padi/tambah" method="post">
                    <?php if (NULL !== $this->session->flashdata('message')) {
                        echo $this->session->flashdata('message');
                    } ?>
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">FORM TAMBAH DATA</h4>
                            <div class="pull-right">
                                <a href="<?= site_url('padi') ?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                            </div>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Kecamatan</label>
                                    <div class="form-group">
                                        <select class="form-control" name="nama_kecamatan" value="<?= set_value('nama_kecamatan') ?>" required>
                                            <?php foreach ($listKec as $row) : ?>
                                                <option value="<?= $row['nama_kecamatan']; ?>"><?= $row['nama_kecamatan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tanam (Ha)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="tanam" value="<?= set_value('tanam') ?>" onkeypress="return hanyaAngka(event)" class="form-control" >
                                                <?= form_error('tanam') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Panen (Ha)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="panen" value="<?= set_value('panen') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('panen') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Provitas (Ton/Ha)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="provitas" value="<?= set_value('provitas') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('provitas') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Produksi ( Ton GKG)</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="produksi" value="<?= set_value('produksi') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('produksi') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tahun</label>
                                            <div class="form-group">
                                                <input type="text" name="tahun" value="<?= set_value('tahun') ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('tahun') ?>
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