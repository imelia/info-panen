<?php $this->load->view('pembeli/header'); ?>
<?php $this->load->view('pembeli/topbar'); ?>
<section class="site-section" id="agents-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 text-left">
        <h2 class="section-title mb-3">DATA PANEN RAYA PETANI KABUPATEN PROBOLINGGO</h2>
        <p class="lead">Fitur ini merupakan form untuk para petani yang ada di Kabupaten Probolinggo untuk mempromosikan hasil panen raya agar lebih dikenal oleh masyarakat yang ada di Kabupaten Probolinggo</p>
      </div>
    </div>
    <!--Form Home-->
    <div class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-borderless table-hover dataTable" id="index-tanam" width="100%" cellspacing="2">
                  <thead class="card invisible" style="margin-top: -20%;">
                    <tr class="d-flex justify-content-center">
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($query as $key => $data) { ?>
                      <!-- <div class="col-lg-5"> -->
                      <?php if (NULL !== $this->session->flashdata('message')) {
                        echo $this->session->flashdata('message');
                      }
                      ?>
                      <tr class="card shadow mb-5 p-5 text-center">
                        <td>
                          <div class="card" style="width: 26rem;">
                            <img class="card-img-top" src="<?= base_url() ?>/uploads/panen/<?= $data->gambar_panen; ?>" alt="Card image cap">
                          </div>
                        </td>
                        <td>
                          <?= $data->atas_nama ?>
                        </td>
                        <td>
                          <span>Stok : <?= $data->stok_tanam . 'Kg'; ?></span>
                        </td>
                        <td>
                          <?= $data->keterangan ?>
                        </td>
                        <td>
                          <span>Desa atau Wilayah : <?= $data->desa; ?></span>
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $data->id_tanam_panen; ?>">
                            Detail Produk
                          </button>
                          <div class="modal fade" id="exampleModal<?= $data->id_tanam_panen; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel"><?= $data->atas_nama ?></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="card card-body">
                                    <p class="card-text">Nomer HP : <span class="text-muted"><?= $data->no_telp ?></span> </p>
                                    <p class="card-text">Alamat : <span class="text-muted"><?= $data->alamat ?></span> </p>
                                    <p class="card-text">Desa : <span class="text-muted"><?= $data->desa ?></span> </p>
                                    <p class="card-text">Komoditi : <span class="text-muted"><?= $data->komoditi ?></span> </p>
                                    <p class="card-text">Tanggal Tanam : <span class="text-muted"><?= $data->tanggal_tanam ?></span> </p>
                                    <p class="card-text">Tanggal Panen : <span class="text-muted"><?= $data->tanggal_panen ?></span> </p>
                                    <p class="card-text">Status Panen : <span class="text-muted"><?= $data->status_panen ?></span> </p>
                                    <p class="card-text">Hasil Panen : <span class="text-muted"><?= $data->hasil_panen . "kg" ?></span> </p>
                                    <p class="card-text">Harga Panen : <span class="text-muted"><?= "Rp " . number_format($data->harga_panen, 2, ',', '.'); ?></span> </p>
                                    <p class="card-text">Kondisi Panen : <span class="text-muted"><?= $data->kondisi_panen ?></span> </p>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <?php
                          if ($data->stok_tanam > 0) : ?>

                            <a href="<?= base_url('VTanam_panen/add_cart/' . $data->id_tanam_panen) ?>" class="btn btn-danger btn-sm">Pesan Sekarang</a>

                          <?php else : ?>

                            <a href="<?= base_url('VTanam_panen/add_cart/' . $data->id_tanam_panen) ?>" class="btn btn-danger btn-sm disabled">Pesan Sekarang</a>

                          <?php endif; ?>

                          <a href="https://api.whatsapp.com/send?phone=<?= $data->no_telp; ?>&text=Hai%20Pak%20Petani,%20saya%20ingin%20ingin%20memesan%20panen%20<?= $data->komoditi; ?>%20,%20Apakah%20masih%20ada%20?" target="_blank"><span class="btn btn-sm btn-success">Hubungi Petani !</span></a>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                  <!-- <div class="card-group">
                    <div class="card"> -->
                  <!-- 
                      <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        <p>

                        </p> -->
                  <!-- Start Modal Required -->
                  <!-- End Modal Required -->
                  <!-- </div> -->
                  <!-- <div class="card-footer">
                    <div class="text-center"> -->

                  <!-- </div>
                  </div> -->
                  <!-- </div>
                  </div> -->
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
    </div>


  </div>
  </div>
</section>
<?php $this->load->view('pembeli/footer'); ?>