<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets7/assets/img/loog.png">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            font-family: sans-serif;
            background-image: url('<?php echo base_url(); ?>assets7/assets/img/cobalah.jpg');
            background-size: contain;
        }

        h1 {
            text-align: center;
            /*ketebalan font*/
            font-weight: 300;
        }

        .tulisan_login {
            text-align: center;
            /*membuat semua huruf menjadi kapital*/
            text-transform: uppercase;
        }

        .kotak_login {
            width: 350px;
            background: #FFFAF0;
            /*meletakkan form ke tengah*/
            margin: 80px auto;
            padding: 30px 20px;
        }

        label {
            font-size: 11pt;
        }

        .form_login {
            /*membuat lebar form penuh*/
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;
        }

        .tombol_login {
            background-color: #4CAF50;
            ;
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
        }

        .link {
            color: #008000;
            text-decoration: none;
            font-size: 10pt;
        }
    </style>
</head>

<body>

    <!--<h1 style="font-family: CocogooseNarrows">Selamat Datang Di Sistem Informasi "INFO PANEN" <br/></h1> -->

    <div class="kotak_login" style="font-family: streetslab">
        <div class="text-center">
            <img src="<?php echo base_url(); ?>/assets7/assets/img/loog.png" class="profile-img" alt="logo images" style="height: 90px; width: 90px; border-radius: 50%;">
        </div>
        <h3 class="tulisan_login">INFO PANEN</h3>
        <p class="tulisan_login">dari petani untuk kita</p>
        <label></label>
        <form action="<?php echo base_url('register/proses'); ?>" method="POST" class="form1">
            <div class="row">
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
        </form>


        <!-- Form Petani -->
        <!-- Form Petani -->
        <!-- Form Petani -->


        <form action="<?php echo base_url('register/proses'); ?>" method="POST" enctype="multipart/form-data" class="form2">
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
</body>

</html>