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
    <title>Home - Berita</title>
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
                                    <h4 class="card-title">DATA BERITA</h4>
                                    <div class="pull-right">
                                        <a href="<?=site_url('berita/add')?>" class="btn btn-primary"> + Tambah Data</a>
                                    </div>
                                    
                                </div>
                                <!-- DataTales Example -->
                                    <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>Gambar</th> 
                                                <th>Judul</th>
                                                <th>Sumber</th>
                                                <th>Tanggal Rilis</th>
                                                <th>Link</th>
                                                <th>Aksi</th>
                                                </tr>
                                            </thead>
                                                <?php $no = 1;
                                           foreach($qr as $key => $data) { ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><img src="<?=base_url()?>/uploads/berita/<?=$data->nama_gambar;?>" width="100px" height="100px"></td>
                                                <td><?=$data->judul?></td>
                                                <td><?= $data->sumber?></td>
                                                <td><?= $data->tanggal?></td>
                                                <td><?= $data->link?></td>
                                                <td>
                                                    <a href="<?=site_url('berita/edit/'.$data->id_berita)?>" class="badge badge-primary badge-pill tampilModalUbah" onclick="return confirm('Edit Data?');">Edit</a>
                                                    <a href="<?=site_url('berita/deletedata/'.$data->id_berita)?>" class="badge badge-primary badge-pill tampilModalUbah" onclick="return confirm('Hapus Data?');">Edit</a>
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
                                <!-- /.container-fluid -->

                                </div>
                                <!-- End of Main Content -->
<!-- Load modal-->
<?php $this->load->view('pagee/modal'); ?>

    <!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/footer'); ?>

</body>

</html>