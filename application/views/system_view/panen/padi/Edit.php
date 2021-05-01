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
                            <a href="<?= site_url('padi') ?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                        </div>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">

                        <form action="<?= base_url() ?>padi/edit" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Kecamatan</label>
                                    <div class="form-group">
                                        <select class="form-control" name="nama_kecamatan" value="<?= $this->input->post('nama_kecamatan') ?? $row->nama_kecamatan ?>" required>
                                            <option value="<?= $row->nama_kecamatan ?>"><?= $row->nama_kecamatan ?></option>
                                            <?php foreach ($listKec as $list) : ?>
                                                <option value="<?= $list['nama_kecamatan']; ?>"><?= $list['nama_kecamatan']; ?></option>
                                            <?php endforeach; ?>
                                            <!-- <option value=""></option>
                                            <option value="Sukapura">Sukapura</option>
                                            <option value="Sumber">Sumber</option>
                                            <option value="Kuripan">Kuripan</option>
                                            <option value="Bantaran">Bantaran</option>
                                            <option value="Leces">Leces</option>
                                            <option value="Tegalsiwalan">Tegalsiwalan</option>
                                            <option value="Banyuanyar">Banyuanyar</option>
                                            <option value="Tiris">Tiris</option>
                                            <option value="Krucil">Krucil</option>
                                            <option value="Gading">Gading</option>
                                            <option value="Pakuniran">Pakuniran</option>
                                            <option value="Kotaanyar">Kotaanyar</option>
                                            <option value="Paiton">Paiton</option>
                                            <option value="Besuk">Besuk</option>
                                            <option value="Kraksaan">Kraksaan</option>
                                            <option value="Krejengan">Krejengan</option>
                                            <option value="Pajarakan">Pajarakan</option>
                                            <option value="Maron">Maron</option>
                                            <option value="Gading">Gading</option>
                                            <option value="Dringu">Dringu</option> -->
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tanam</label>
                                            <div class="form-group">
                                                <input type="text" name="tanam" value="<?= $this->input->post('tanam') ?? $row->tanam ?>" class="form-control">
                                                <?= form_error('tanam') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Panen</label>
                                            <div class="form-group">
                                                <input type="text" name="panen" value="<?= $this->input->post('panen') ?? $row->panen ?>" class="form-control">
                                                <?= form_error('panen') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Produksi</label>
                                            <div class="form-group">
                                                <input type="text" name="produksi" value="<?= $this->input->post('produksi') ?? $row->produksi ?>" class="form-control">
                                                <?= form_error('produksi') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tahun</label>
                                            <div class="form-group">
                                                <input type="text" name="tahun" value="<?= $this->input->post('tahun') ?? $row->tahun ?>" class="form-control">
                                                <?= form_error('tahun') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" onclick="return hapus_confirm()" class="btn btn-success btn-flat">Update</button>

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
<script type="text/javascript">
    $(document).ready(function() {
        $("#table-ah").dataTable();
    });
</script>

</html>