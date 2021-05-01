<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Data</title>
    <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
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
                        <form action="<?=base_url()?>tanam_panen/insert" method="post" enctype="multipart/form-data">
                        <?=$this->session->flashdata('pesan')?>
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">FORM TAMBAH DATA</h4>
                                    <div class="pull-right">
                                        <a href="<?=site_url('tanam_panen')?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                                    </div>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                <div class="row">
                                      <div class="col-md-8">
                                      <label>Nama Petani</label>
                                          <div class="form-group">
                                              <input type="text" name="nama_petani" class="form-control" placeholder="Masukkan nama">
                                              
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>No Hp Petani</label>
                                          <div class="form-group">
                                              <input type="text" name="no_hp_petani" class="form-control" onkeypress="return hanyaAngka(event)" placeholder="Diisi hanya dengan angka" >
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Alamat Petani</label>
                                          <div class="form-group">
                                              <input type="text" name="alamat_petani" class="form-control" Placeholder="Masukkan alamat">
                                              
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                  <div class="col-md-8">
                                  <label>Kecamatan</label>
                                    <div class="form-group">
                                        <?php
                                        if (!empty($tanam)) { ?>
                                            <input list="desa" name="desa" class="form-control" Placeholder="Masukkan nama kecamatan/desa">
                                            <datalist id="desa">
                                                <?php foreach ($tanam as $item) { ?>
                                                    <option value="<?php echo $item["nama_kecamatan"]; ?>">
                                                    <?php } ?>
                                            </datalist>
                                        <?php } ?>
                                    </div>
                                   </div>
                                  </div>  
                                <div class="row">
                                      <div class="col-md-8">
                                      <label>Gambar</label>
                                          <div class="form-group">
                                          
                                              <input type="file" name="filefoto" class="form-control">
                                          </div>
                                      </div>
                                  </div>
    
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Komoditas</label>
                                    <?php
                                    if (!empty($komo)) { ?>
                                        <input list="komoditas" id="komoditas1" name="komoditi" class="form-control" Placeholder="Masukkan komoditas">
                                        <datalist id="komoditas">
                                            <?php foreach ($komo as $itemss) { ?>
                                                <option value="<?php echo $itemss["nama_tanaman"]; ?>">
                                                <?php } ?>
                                        </datalist>
                                    <?php } ?>
                                    </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Tanggal Tanam</label>
                                          <div class="form-group">
                                              <input type="date" name="tanggal_tanam" class="form-control" Placeholder="Pilih tanggal">
                                             
                                          </div>
                                      </div>
                                  </div> 
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Tanggal Panen</label>
                                          <div class="form-group">
                                              <input type="date" name="tanggal_panen" class="form-control" Placeholder="Pilih tanggal">
                                             
                                          </div>
                                      </div>
                                  </div> 
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Status Panen</label>
                                          <div class="form-group">
                                              <input type="text" name="status_panen" class="form-control" Placeholder="Masukkan status panen">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Hasil Panen</label>
                                          <div class="form-group">
                                              <input type="text" name="hasil_panen" class="form-control" onkeypress="return hanyaAngka(event)" Placeholder="Diisi hanya dengan angka">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Harga Panen</label>
                                          <div class="form-group">
                                              <input type="text" name="harga_panen" class="form-control" onkeypress="return hanyaAngka(event)" Placeholder="Diisi hanya dengan angka">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Kondisi</label>
                                          <div class="form-group">
                                              <input type="text" name="kondisi_panen" class="form-control" Placeholder="Masukkan kondisi produk">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Keterangan</label>
                                          <div class="form-group">
                                              <input type="text" name="keterangan" class="form-control" Placeholder="Masukkan keterangan kondisi produk">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Nomor Briva</label>
                                          <div class="form-group">
                                              <input type="text" name="no_briva" class="form-control" Placeholder="Masukkan keterangan kondisi produk">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Bank</label>
                                          <div class="form-group">
                                              <input type="text" name="nama_bank" class="form-control" Placeholder="Masukkan keterangan kondisi produk">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-8">
                                      <label>Sebagai</label>
                                          <div class="form-group">
                                              <input type="text" name="sebagai" class="form-control" Placeholder="Masukkan keterangan kondisi produk">
                                          </div>
                                      </div>
                                  </div>
                        <div class="form-group">
                            <button type="submit" onclick="return hapus_confirm()" class="btn btn-primary">Simpan</button>
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
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</html>
