<?php $this->load->view('page/header'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.css"/>
<link href="<?=base_url()?>assets/css/button_style.css" rel="stylesheet">
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.js"></script>

<!-- load sidebar in page/sidebar -->
<?php $this->load->view('page/sidebar'); ?>

<!-- Load navbar in page/navbar -->
<?php $this->load->view('page/navbar'); ?>

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
                        <form action="<?=base_url()?>anggota/tambah" method="post">
                            <?php if ( NULL !== $this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">FORM TAMBAH ANGGOTA</h4>
                                    <div class="pull-right">
                                        <a href="<?=site_url('anggota')?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                                    </div>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
    
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Username</label>
                                          <div class="form-group">
                                              <input type="text" name="username" value="<?=set_value('username')?>" class="form-control">
                                              <?=form_error('username')?>
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Password</label>
                                          <div class="form-group">
                                              <input type="text" name="password" value="<?=set_value('password')?>" class="form-control">
                                              <?=form_error('password')?>
                                          </div>
                                      </div>
                                  </div> 
                                  <div class="row">
                                        <div class="col-md-12">
                                        <label>Akses</label>
                                        <div class="form-group">
                                        <select class="form-control" name="id_akses" required>
                                        <option value="">Pilih akses</option>
                                            <option value="1" <?='id_akses' == 1 ? "selected" : null?>>1</option>
                                            <option value="2" <?='id_akses'== 2 ? "selected" : null?>>2</option>
                                            <option value="3" <?='id_akses' == 3 ? "selected" : null?>>3</option>
                                        </select>
                                   </div>
                        <div class="form-group">
                            <button type="submit" onclick="return hapus_confirm()" class="tombol">Simpan</button>
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
    <?php $this->load->view('page/footer'); ?>
</body>
    <!--   Core JS Files   -->
    <?php $this->load->view('page/js'); ?>

<script type="text/javascript">$(document).ready(function(){$("#table-ah").dataTable();});</script>
</html>
