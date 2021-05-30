<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('pagee/header'); ?>
    <title>Edit Data</title>
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
        msg = "Anda yakin data sudah benar ?? ";
        var agree = confirm(msg);
        if (agree)
            return true;
        else
            return false;
    }
</script>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <?php if (NULL !== $this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                } ?>
                <div class="card card-plain table-plain-bg">
                    <div class="card-header ">
                        <h4 class="card-title">EDIT DATA</h4>
                        <div class="pull-right">
                            <a href="<?= site_url('biofarmaka') ?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                        </div>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">

                        <form action="<?= base_url() ?>biofarmaka/edit" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Komoditas</label>
                                    <div class="form-group">
                                        <input type="hidden" name="id" id="id" value="<?= $row->id_tbiofarmaka; ?>">
                                        <select class="form-control" name="komoditi_biofarmaka" value="<?= $this->input->post('komoditi_biofarmaka') ?? $row->komoditi_biofarmaka ?>" required>
                                            <option value="<?= $row->komoditi_biofarmaka ?>"><?= $row->komoditi_biofarmaka ?></option>
                                            <?php foreach ($listKec as $list) : ?>
                                                <option value="<?= $list['nama_tanaman']; ?>"><?= $list['nama_tanaman']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Luas Panen</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="luas_panen" value="<?= $this->input->post('luas_panen') ?? $row->luas_panen ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('luas_panen') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Luas Tanam</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="luas_tanam" value="<?= $this->input->post('luas_tanam') ?? $row->luas_tanam ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('luas_tanam') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Provitas</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="provitas" value="<?= $this->input->post('provitas') ?? $row->provitas ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('provitas') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Produksi</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="produksi_biofarmaka" value="<?= $this->input->post('produksi_biofarmaka') ?? $row->produksi_biofarmaka ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('produksi_biofarmaka') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Harga</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="harga_biofarmaka" value="<?= $this->input->post('harga_biofarmaka') ?? $row->harga_biofarmaka ?>" onkeypress="return hanyaAngka(event)" id="rupiah" class="form-control">
                                                <?= form_error('harga_biofarmaka') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tahun</label>
                                            <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                            <div class="form-group">
                                                <input type="text" name="tahun" value="<?= $this->input->post('tahun') ?? $row->tahun ?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                                <?= form_error('tahun') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" onclick="return hapus_confirm()" class="btn btn-success btn-flat">Update</button>

                                    </div>

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
<script type="text/javascript">
    $(document).ready(function() {
        $("#table-ah").dataTable();
    });
</script>

</html>