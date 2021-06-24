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
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url('data/proses'); ?>" method="POST" class="form1">
                    <!--<div class="row">
                        <div class="col-md-12">
                            <label>Akses</label>
                            <div class="form-group">
                                <select class="form-control" name="id_akses" required>
                                    <option value="">Pilih akses</option>
                                    <option value="admin" <?= 'id_akses' == 1 ? "selected" : null ?>>admin</option>
                                    <option value="pembeli" <?= 'id_akses' == 3 ? "selected" : null ?>>pembeli</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Username</label>
                                    <div class="form-group">
                                        <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Silahkan masukkan password" required>
                                        <?= form_error('username') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password">Password</label>
                                    <div class="form-group">
                                        <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="Silahkan masukkan password" required>
                                        <?php echo form_error('password'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row invisible">
                                <div class="col-md-12">
                                    <label for="No Telpon">No Telpon</label>
                                    <div class="form-group">
                                        <input type="telp" name="no_telp" value="<?= set_value('no_telp') ?>" class="form-control" placeholder="Silahkan masukkan No Telpon">
                                        <?php echo form_error('no_telp'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row invisible">
                                <div class="col-md-12">
                                    <label for="Alamat">Alamat</label>
                                    <div class="form-group">
                                        <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" placeholder="Silahkan masukkan Alamat">
                                        <?php echo form_error('alamat'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row invisible">
                                <div class="col-md-12">
                                    <label for="No Rekening">No Rekening</label>
                                    <div class="form-group">
                                        <input type="number" name="no_rekening" value="<?= set_value('no_rekening') ?>" class="form-control" placeholder="Silahkan masukkan No Rekening">
                                        <?php echo form_error('no_rekening'); ?>
                                        <input type="number" name="nama_bank" value="<?= set_value('nama_bank') ?>" class="form-control" placeholder="Silahkan masukkan Nama Bank">
                                        <?php echo form_error('nama_bank'); ?>
                                        <input type="number" name="atas_nama" value="<?= set_value('atas_nama') ?>" class="form-control" placeholder="Silahkan masukkan No Rekening">
                                        <?php echo form_error('atas_nama'); ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Daftar</button> &nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="btn btn-sm btn-success btn1">Klik disini jika anda daftar sebagai petani</div>
                        </div>
                        <br>
                    </div>
                </form>-->


                <!-- Form Petani -->
                <!-- Form Petani -->
                <!-- Form Petani -->


                <form action="<?php echo base_url('data/proses'); ?>" method="POST" enctype="multipart/form-data" class="form2">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Akses</label>
                            <div class="form-group">
                                <select class="form-control" name="id_akses" required>
                                    <option value="">Pilih akses</option>
                                    <option value="petani" <?= 'id_akses' == 2 ? "selected" : null ?>>petani</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Username</label>
                                    <div class="form-group">
                                        <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Silahkan masukkan password" required>
                                        <?= form_error('username') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password">Password</label>
                                    <div class="form-group">
                                        <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="Silahkan masukkan password" required>
                                        <?php echo form_error('password'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="No Telpon">No Telpon</label>
                                    <div class="form-group">
                                        <input type="tel" name="no_telp" value="<?= set_value('no_telp') ?>" class="form-control" placeholder="Silahkan masukkan No Telpon" required>
                                        <?php echo form_error('no_telp'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="Alamat">Alamat</label>
                                    <div class="form-group">
                                        <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" placeholder="Silahkan masukkan Alamat" required>
                                        <?php echo form_error('alamat'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="No Rekening">No Rekening</label>
                                    <div class="form-group">
                                        <input type="number" name="no_rekening" value="<?= set_value('no_rekening') ?>" class="form-control" placeholder="Silahkan masukkan No Rekening" required>
                                        <?php echo form_error('no_rekening'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="Nama Bank">Nama Bank</label>
                                    <div class="form-group">
                                        <input type="text" name="nama_bank" value="<?= set_value('nama_bank') ?>" class="form-control" placeholder="Silahkan masukkan Nama Bank" required>
                                        <?php echo form_error('nama_bank'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="Atas Nama">Atas Nama</label>
                                    <div class="form-group">
                                        <input type="text" name="atas_nama" value="<?= set_value('atas_nama') ?>" class="form-control" placeholder="Silahkan masukkan Rekening Atas Nama" required>
                                        <?php echo form_error('atas_nama'); ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Daftar</button> &nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="btn btn-sm btn-success btn2">Kembali</div>
                        </div>
                    </div>
                </form>
                <?php if (isset($error)) echo "<b><span style='color:red;'>$error</span></b>";
                if (isset($logout)) echo "<b><span style='color:red;'>$logout</span></b>"; ?>
            </div>
            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $(".form2").hide();
        $(".btn1").click(function() {
            $(".form1").hide();
            $(".form2").show();
        });
        $(".btn2").click(function() {
            $(".form2").hide();
            $(".form1").show();
        });
    });
</script>
<?php echo form_close() ?>

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
</div>
<!-- Load modal-->
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