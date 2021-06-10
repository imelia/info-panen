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
<?php $this->load->view('pagee/topbar2'); ?>
</head>
<script>
    
    function hapus_confirm(){
  var msg;
  msg= "Anda yakin data sudah benar ?? " ;
  var agree=confirm(msg);
  if (agree)
  return true ;
  else
  return false ;
}
</script>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">EDIT DATA</h4>
                                    <div class="pull-right">
                                        <a href="<?=site_url('komoditas')?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                                    </div>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                
                                <form action="<?=base_url()?>komoditas/updatedata" method="post" enctype="multipart/form-data">
                                <?php if (NULL !== $this->session->flashdata('message')) {
                                    echo $this->session->flashdata('message');
                                } ?>
                                <div class="row">
                                      <div class="col-md-12">
                                      <label>Gambar</label>
                                          <div class="form-group">
                                              <input type="file" name="filefoto" class="form-control">
                                              <!-- file lama -->
                                                <input type="hidden" name="filelama" value="<?=$data->gambar?>" required>
                                                    <!-- ID -->
                                                <input type="hidden" name="id" value="<?=$data->id_komoditas?>" required>
                                          </div>
                                      </div>
                                  </div>
    
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Nama Komoditas</label>
                                          <div class="form-group">
                                              <input type="text" name="nama_komoditas" value="<?=$data->nama_komoditas?>" class="form-control">
                                              
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Nama Tanaman</label>
                                          <div class="form-group">
                                              <input type="text" name="nama_tanaman" value="<?=$data->nama_tanaman?>" class="form-control">
                                             
                                          </div>
                                      </div>
                                  </div> 
                                  
                                  <div class="form-group">
                                        <button type="submit" onclick="return update_confirm()" class="btn btn-success btn-flat">Update</button>
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
<script type="text/javascript">$(document).ready(function(){$("#table-ah").dataTable();});</script>
</html>

