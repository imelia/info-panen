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
                                        <a href="<?=site_url('buah')?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                                    </div>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                
                        <form action="<?=base_url()?>buah/edit" method="post">
                                  <div class="row">
                                    <div class="col-md-12">
                                    <label>Komoditi</label>
                                    <div class="form-group">
                                    <select class="form-control" name="komoditi_buah" value="<?=$this->input->post('komoditi_buah') ?? $row->komoditi_buah?>" required>
                                    <option value="Alpukat">Alpukat</option>
                                        <option value="Blimbing">Blimbing</option>
                                        <option value="Duku/Langsap">Duku/Langsap</option>
                                        <option value="Durian">Durian</option>
                                        <option value="Jambu Biji">Jambu Biji</option>
                                        <option value="Jambu Air">Jambu Air</option>
                                        <option value="Jeruk Siam">Jeruk Siam</option>
                                        <option value="Jeruk Besar">Jeruk Besar</option>
                                        <option value="Mangga">Mangga</option>
                                        <option value="Manggis">Manggis</option>
                                        <option value="Nangka / Cempedak">Nangka / Cempedak</option>
                                        <option value="Nanas">Nanas</option>
                                        <option value="Pepaya">Pepaya</option>
                                        <option value="Pisang">Pisang</option>
                                        <option value="Rambutan">Rambutan</option>
                                        <option value="Salak">Salak</option>
                                        <option value="Sawo">Sawo</option>
                                        <option value="Markisa">Markisa</option>
                                        <option value="Sirsak">Sirsak</option>
                                        <option value="Sukun">Sukun</option>
                                        <option value="Apel">Apel</option>
                                        <option value="Anggur">Anggur</option>
                                        <option value="Melinjo">Melinjo</option>
                                        <option value="Petani">Petai</option>
                                    </select>
                                  </div>   
    
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Jumlah Tanaman</label>
                                          <div class="form-group">
                                              <input type="text" name="jumlah_tanaman" value="<?=$this->input->post('jumlah_tanaman') ?? $row->jumlah_tanaman?>" class="form-control">
                                              <?=form_error('jumlah_tanaman')?>
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Tanaman Baru</label>
                                          <div class="form-group">
                                              <input type="text" name="tanaman_baru" value="<?=$this->input->post('tanaman_baru') ?? $row->tanaman_baru?>" class="form-control">
                                              <?=form_error('tanaman_baru')?>
                                          </div>
                                      </div>
                                  </div> 
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Tanaman Menghasilkan</label>
                                          <div class="form-group">
                                              <input type="text" name="tanaman_menghasilkan" value="<?=$this->input->post('tanaman_menghasilkan') ?? $row->tanaman_menghasilkan?>" class="form-control">
                                              <?=form_error('tanaman_menghasilkan')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Produksi Buah</label>
                                          <div class="form-group">
                                              <input type="text" name="produksi_buah" value="<?=$this->input->post('produksi_buah') ?? $row->produksi_buah?>" class="form-control">
                                              <?=form_error('produksi_buah')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Harga</label>
                                          <div class="form-group">
                                              <input type="text" name="harga" value="<?=$this->input->post('harga') ?? $row->harga?>" class="form-control">
                                              <?=form_error('harga')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Tahun</label>
                                          <div class="form-group">
                                              <input type="text" name="tahun" value="<?=$this->input->post('tahun') ?? $row->tahun?>" class="form-control">
                                              <?=form_error('tahun')?>
                                          </div>
                                      </div>
                                  </div>
                        
                        <div class="form-group">
                            <button type="submit" onclick="return hapus_confirm()" class="btn btn-success btn-flat">Update</button>
                            
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
<script type="text/javascript">$(document).ready(function(){$("#table-ah").dataTable();});</script>
</html>
