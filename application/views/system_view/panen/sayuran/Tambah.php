<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Data</title>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/header'); ?>
<!-- load sidebar in page/sidebar -->
<?php $this->load->view('pagee/sidebar'); ?>
<!-- Load navbar in page/navbar -->
<?php $this->load->view('pagee/topbar'); ?>
</head>
<!--FOrm Tambah Data-->

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <form action="<?=base_url()?>sayuran/tambah" method="post">
                            <?php if ( NULL !== $this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">FORM TAMBAH DATA</h4>
                                    <div class="pull-right">
                                        <a href="<?=site_url('sayuran')?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                                    </div>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                <div class="row">
                                    <div class="col-md-12">
                                    <label>Komoditi</label>
                                    <div class="form-group">
                                    <select class="form-control" name="komoditi" value="<?=set_value('komoditi')?>" required>
                                        <option value="Bawang Merah">Bawang Merah</option>
                                        <option value="Bawang Putih">Bawang Putih</option>
                                        <option value="Bawang Daun">Bawang Daun</option>
                                        <option value="Kentang">Kentang</option>
                                        <option value="Kubis">Kubis</option>
                                        <option value="Sawi">Sawi</option>
                                        <option value="Wortel">Wortel</option>
                                        <option value="Cabe Besar">Cabe Besar</option>
                                        <option value="Cabe Rawit">Cabe Rawit</option>
                                        <option value="Tomat">Tomat</option>
                                        <option value="Terong">Terong</option>
                                        <option value="Timun">Timun</option>
                                        <option value="Labu Siam">Labu Siam</option>
                                        <option value="Semangka">Semangka</option>
                                    </select>
                                </div>
    
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Luas Tanam (Ha)</label>
                                          <div class="form-group">
                                              <input type="text" name="luas_tanam" value="<?=set_value('luas_tanam')?>" class="form-control">
                                              <?=form_error('luas_tanam')?>
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Luas Panen (Ha)</label>
                                          <div class="form-group">
                                              <input type="text" name="luas_panen" value="<?=set_value('luas_panen')?>" class="form-control">
                                              <?=form_error('luas_panen')?>
                                          </div>
                                      </div>
                                  </div> 
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Produksi Habis Dibongkar(GKG)</label>
                                          <div class="form-group">
                                              <input type="text" name="produksi_habis_dibongkar" value="<?=set_value('produksi_habis_dibongkar')?>" class="form-control">
                                              <?=form_error('produksi_habis_dibongkar')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Produksi Belum Dibongkar(GKG)</label>
                                          <div class="form-group">
                                              <input type="text" name="produksi_belum_dibongkar" value="<?=set_value('produksi_belum_dibongkar')?>" class="form-control">
                                              <?=form_error('produksi_belum_dibongkar')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Total</label>
                                          <div class="form-group">
                                              <input type="text" name="total" value="<?=set_value('total')?>" class="form-control">
                                              <?=form_error('total')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Harga Min</label>
                                          <div class="form-group">
                                              <input type="text" name="harga_min" value="<?=set_value('harga_min')?>" class="form-control">
                                              <?=form_error('harga_min')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Harga Max</label>
                                          <div class="form-group">
                                              <input type="text" name="harga_max" value="<?=set_value('harga_max')?>" class="form-control">
                                              <?=form_error('harga_max')?>
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Tahun</label>
                                          <div class="form-group">
                                              <input type="text" name="tahun" value="<?=set_value('tahun')?>" class="form-control">
                                              <?=form_error('tahun')?>
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


