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
    <title>Home - Padi</title>
</head>
<!-- load sidebar in page/sidebar -->
<?php $this->load->view('pagee/sidebar'); ?>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/topbar'); ?>
<script>
    
    function hapus_confirm(){
  var msg;
  msg= "Anda yakin hapus data ? " ;
  var agree=confirm(msg);
  if (agree)
  return true ;
  else
  return false ;
}
</script>
<!--Form Home-->
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if ( NULL !== $this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
                                <div class="card-header ">
                                    <h4 class="card-title">PROFIL</h4>
                                </div>
                                <!-- DataTales Example -->
                                    <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Hak Akses</th> 
                                                        <th>Username</th>
                                                        <th>Password</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $this->fungsi->user_login()->id_akses?> </td>
                                                        <td><?= $this->fungsi->user_login()->username?> </td>
                                                        <td><?= $this->fungsi->user_login()->password?> </td>
                                                        
                                                            <!--<a href="<?= base_url(); ?>padi/edit/<?= $padi['produksi']; ?>" class="badge badge-primary badge-pill tampilModalUbah">Edit</a>
                                                            <a href="<?= base_url(); ?>padi/hapus/<?= $padi['id_tpadi']; ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
                                                        </td> -->
                                                    </tr>
                                                </tbody>
                                            </table>
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