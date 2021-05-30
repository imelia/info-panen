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
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>

<script>
    function hapus_confirm() {
        var msg;
        msg = "Anda yakin update data ? ";
        var agree = confirm(msg);
        if (agree)
            return true;
        else
            return false;
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
                                        <a href="<?=site_url('sayuran')?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                                    </div>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                
                        <form action="<?=base_url()?>sayuran/update" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                    <label>Komoditi</label>
                                    <div class="form-group">
                                    <select class="form-control" name="komoditi" value="<?= $query->komditi ?>" required>
                                            <option value="<?= $query->komoditi?>"><?= $query->komoditi?></option>
                                            <?php foreach ($listKec as $list) : ?>
                                                <option value="<?= $list['nama_tanaman']; ?>"><?= $list['nama_tanaman']; ?></option>
                                            <?php endforeach; ?>
                                    </select>
                                </div>   
                                <div class="row">
                                      <div class="col-md-12">
                                      <label>Luas Tanam</label>
                                      <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                          <div class="form-group">
                                              <input type="hidden" name="id_tsayur" value="<?= $query->id_tsayur ?>" class="form-control">
                                              <input type="text" name="luas_tanam" value="<?= $query->luas_tanam?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                              <?=form_error('luas_tanam')?>
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Luas Panen (Ha)</label>
                                      <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                          <div class="form-group">
                                              <input type="text" name="luas_panen" value="<?=$query->luas_panen?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                              <?=form_error('luas_panen')?>
                                          </div>
                                      </div>
                                  </div> 
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Produksi Habis Dibongkar (Kui)</label>
                                      <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                          <div class="form-group">
                                              <input type="text" name="produksi_habis_dibongkar" value="<?=$query->produksi_habis_dibongkar?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                              <?=form_error('produksi_habis_dibongkar')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Produksi Belum Dibongkar (Kui)</label>
                                      <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                          <div class="form-group">
                                              <input type="text" name="produksi_belum_dibongkar" value="<?=$query->produksi_belum_dibongkar?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                              <?=form_error('produksi_belum_dibongkar')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Total (Kui)</label>
                                      <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                          <div class="form-group">
                                              <input type="text" name="total" value="<?=$query->total?>" onkeypress="return hanyaAngka(event)" class="form-control">
                                              <?=form_error('total')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Harga Min (Rp/Kui)</label>
                                      <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                          <div class="form-group">
                                              <input type="text" name="harga_min" value="<?=$this->input->post('harga_min') ?? $query->harga_min?>" id="rupiah" onkeypress="return hanyaAngka(event)" class="form-control">
                                              <?=form_error('harga_min')?>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Harga Max (Rp/Kui)</label>
                                      <h6><i><b>*Hanya boleh diisi dengan angka </b></i></h6>
                                          <div class="form-group">
                                              <input type="text" name="harga_max" value="<?=$query->harga_max?>" id="rupiah" onkeypress="return hanyaAngka(event)" class="form-control">
                                              <?=form_error('harga_max')?>
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="row">
                                      <div class="col-md-12">
                                      <label>Tahun</label>
                                          <div class="form-group">
                                              <input type="text" name="tahun" value="<?=$query->tahun?>" onkeypress="return hanyaAngka(event)" class="form-control">
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
