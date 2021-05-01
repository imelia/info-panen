<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Data</title>
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
</head>
    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('pagee/header'); ?>
    <!-- load sidebar in page/sidebar -->
    <?php $this->load->view('pagee/sidebar2'); ?>
    <!-- Load navbar in page/navbar -->
    <?php $this->load->view('pagee/topbar'); ?>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                    
                            <?php if ( NULL !== $this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">EDIT DATA</h4>
                                    <div class="pull-right">
                                        <a href="<?=site_url('tanam_panen')?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                                    </div>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                
                                <form action="<?=base_url()?>tanam_panen/updatedata" method="post" enctype="multipart/form-data">
                                
                                <div class="row">
                                      <div class="col-md-12">
                                      <label>Gambar</label>
                                          <div class="form-group">
                                              <input type="file" name="filefoto" class="form-control">
                                              <!-- file lama -->
                                                <input type="hidden" name="filelama" value="<?=$data->gambar_panen?>" required>
                                                    <!-- ID -->
                                                <input type="hidden" name="id" value="<?=$data->id_tanam_panen?>" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Nama Petani</label>
                                          <div class="form-group">
                                              <input type="text" name="nama_petani" value="<?=$data->nama_petani?>" class="form-control">
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>No Hp Petani</label>
                                          <div class="form-group">
                                              <input type="text" name="no_hp_petani" value="<?=$data->no_hp_petani?>" class="form-control">
                                              
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Alamat Petani</label>
                                          <div class="form-group">
                                              <input type="text" name="alamat_petani" value="<?=$data->alamat_petani?>" class="form-control">
                                              
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Kecamatan</label>
                                          <div class="form-group">
                                              <input type="text" name="desa" value="<?=$data->desa?>" class="form-control">
                                              
                                          </div>
                                      </div>
                                  </div>  
    
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Komoditas</label>
                                          <div class="form-group">
                                              <input type="text" name="komoditi" value="<?=$data->komoditi?>" class="form-control">
                                              
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Tanggal Tanam</label>
                                          <div class="form-group">
                                              <input type="date" name="tanggal_tanam" value="<?=$data->tanggal_tanam?>" class="form-control">
                                             
                                          </div>
                                      </div>
                                  </div> 
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Tanggal Panen</label>
                                          <div class="form-group">
                                              <input type="date" name="tanggal_panen" value="<?=$data->tanggal_panen?>" class="form-control">
                                             
                                          </div>
                                      </div>
                                  </div> 
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Status Panen</label>
                                          <div class="form-group">
                                              <input type="text" name="status_panen" value="<?=$data->status_panen?>" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Hasil</label>
                                          <div class="form-group">
                                              <input type="text" name="hasil_panen" value="<?=$data->hasil_panen?>" id="grams" onclick="kilo()" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Harga</label>
                                          <div class="form-group">
                                              <input type="text" name="harga_panen" value="<?=$data->harga_panen?>" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Kondisi</label>
                                          <div class="form-group">
                                              <input type="text" name="kondisi_panen" value="<?=$data->kondisi_panen?>" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Keterangan</label>
                                          <div class="form-group">
                                              <input type="text" name="keterangan" value="<?=$data->keterangan?>" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Nomor Briva</label>
                                          <div class="form-group">
                                              <input type="text" name="no_briva" value="<?=$data->no_briva?>" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Bank</label>
                                          <div class="form-group">
                                              <input type="text" name="nama_bank" value="<?=$data->nama_bank?>" class="form-control">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Sebagai</label>
                                          <div class="form-group">
                                              <input type="text" name="sebagai" value="<?=$data->sebagai?>" class="form-control">
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
    <!--End Tambah Data-->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php $this->load->view('pagee/modal'); ?>

    <!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/footer'); ?>

</body>
<script type="text/javascript">$(document).ready(function(){$("#table-ah").dataTable();});</script>
<script type="text/javascript">

    function kilo() {
        document.getElementById('convert').innerHTML =
            (document.getElementById('grams').value/1000 + "kg");
    }

</script>
</html>
