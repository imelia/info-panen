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
                    
                            <?php if ( NULL !== $this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">EDIT DATA</h4>
                                    <div class="pull-right">
                                        <a href="<?=site_url('padi')?>" class="tombol"><i class="fa fa-undo"></i>KEMBALI</a>
                                    </div>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                
                        <form action="<?=base_url()?>padi/edit" method="post">
                        <div class="row">
                            <div class="col-md-12">
                            <label>Kecamatan</label>
                                <div class="form-group">
                                    <input type="text" name="kecamatan" value="<?=$this->input->post('kecamatan') ?? $row->kecamatan?>" class="form-control" >
                                    <?=form_error('kecamatan')?>
                                </div>
                            </div>
                        </div>       
                        <div class="row">
                            <div class="col-md-12">
                            <label>Tanam</label>
                                <div class="form-group">
                                    <input type="text" name="tanam" value="<?=$this->input->post('tanam') ?? $row->tanam?>" class="form-control">
                                    <?=form_error('tanam')?>
                                </div>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-md-12">
                            <label>Panen</label>
                                <div class="form-group">
                                    <input type="text" name="panen" value="<?=$this->input->post('panen') ?? $row->panen?>" class="form-control">
                                    <?=form_error('panen')?>
                                </div>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-md-12">
                            <label>Produksi</label>
                                <div class="form-group">
                                    <input type="text" name="produksi" value="<?=$this->input->post('produksi') ?? $row->produksi?>" class="form-control">
                                    <?=form_error('produksi')?>
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

        <?php $this->load->view('page/footer'); ?>

</body>

    <!--   Core JS Files   -->
    <?php $this->load->view('page/js'); ?>

<script type="text/javascript">$(document).ready(function(){$("#table-ah").dataTable();});</script>
</html>
