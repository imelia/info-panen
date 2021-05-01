<head>
    <title>INFO PANEN</title>
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet"> <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/button_style.css" rel="stylesheet"> <!-- MEMANGGIL STYLE DARI FILE CSS -->
</head>
<?php $this->load->view('page/header'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.js"></script>

<!-- load sidebar in page/sidebar -->
<?php $this->load->view('page/sidebar'); ?>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('page/navbar'); ?>

<script>
    $(function() {
        $("#datepicker").datepicker({

            dateFormat: "dd-mm-yy",
            showAnim: "",
            minDate: -0,
            maxDate: "+1M",

        });

        $("#datepicker2").datepicker({

            dateFormat: "dd-mm-yy",
            showAnim: "",
            minDate: -0,
            maxDate: "+2W",

        });
    });
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
                        <h4 class="card-title">DATA ANGGOTA</h4>
                        <div class="pull-right">
                            <a href="<?= site_url('anggota/tambah') ?>" class="tombol"> + Tambah Anggota</a>
                        </div>
                        <br>
                        <br>
                        <br>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                            <?php $no = 1;
                            foreach ($anggota as $anggota) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $anggota['username']; ?></td>
                                    <td><?= $anggota['password']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>anggota/edit/<?= $anggota['id_anggota']; ?>" class="badge badge-primary badge-pill tampilModalUbah">Edit</a>
                                        <a href="<?= base_url(); ?>anggota/hapus/<?= $anggota['id_anggota']; ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
                                    </td>
                                    </button>
                                    </form>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('page/footer'); ?>

</body>

<!--   Core JS Files   -->
<?php $this->load->view('page/js'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#table-ah").dataTable();
    });
</script>

</html>