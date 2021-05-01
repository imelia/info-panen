<div class="site-section" id="properties-section">
      <div class="container">
      <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3 text-black">DATA PANEN</h2>
          </div>
            <h8 class="section-title text-black">Fitur Data Panen menyediakan form untuk para petani agar hasil panennya dapat diketahui oleh masyarakat Kabupaten Probolinggo</h8>
        </div>
        <div class="row large-gutters">
        <?php foreach($query as $key => $data) { ?>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-10 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="property-single.html" class="d-inline-block mb-4" alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3> </h3>
                </div>
  
              </div> 
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <center>
    <div class="card card-horizontal verso-shadow-15 verso-shadow-hover-20 verso-transition" style="max-width: 1000px;">
        <div class="row">
            <div class="col-lg-4">
                <div class="card-img-container">
                    <img class="card-img" src="<?=base_url()?>/uploads/komoditas/<?=$data->gambar;?>" style="max-height: 250px;" alt="Card image">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card-block">
                    <p class="card-text"></p><p align ="left">Nama Komoditas : <?=$data->nama_komoditas?></p>
                    <p class="card-text"></p><p align ="left">Tanggal Panen : <?= $data->nama_tanaman?></p>
                </div>
                
            </div>
        </div>
    </div>
    <?php
    } ?>
    </center>
