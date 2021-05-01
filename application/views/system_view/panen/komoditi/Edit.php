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
                    
                            <?php if ( NULL !== $this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
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
                            <button type="submit" onclick="return hapus_confirm()" class="btn btn-success btn-flat">Update</button>
                            <button type="reset" class="btn btn-default">Batal</button>
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

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
    </div>
    </div>
  </div>
</div>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/footer'); ?>

</body>
<script type="text/javascript">$(document).ready(function(){$("#table-ah").dataTable();});</script>
</html>

