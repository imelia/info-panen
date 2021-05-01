<!DOCTYPE html>
<html lang="en">

<head>
<style>

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
    font-weight: bold;
    font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
    -moz-box-shadow: 0 2px 2px -2px #0E1119;
          box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
    text-align: left;
    overflow: hidden;
    width: 80%;
    margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
    padding-bottom: 2%;
    padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3446;
}

.container th {
    background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
  background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
    -moz-box-shadow: 0 6px 6px -6px #0E1119;
          box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
</style>
<style>
.mySlides {display:none;}
</style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IP | Info Panen</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets7/assets/img/loog.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets7/assets/img/loog.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets7/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets7/assets/css/style.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets5/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets5/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.0.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->

  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <br>
        <li><a href="<?= base_url('auth') ?>" class="nav-link"><i class="bx bx-user"></i> <span>Login</span></a></li>
        <br>
        <li><a href="<?= base_url('beranda') ?>" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Beranda</span></a></li>
        <br>
        <li><a href="<?= base_url('beranda2') ?>" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Info Panen</span></a></li>
      
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Selamat Datang</h1>
      <p>di <span class="typed" data-typed-items="INFO PANEN (aplikasi web yang memberikan informasi tentang hasil panen yang ada di Kabupaten Probolinggo dan masyarakat dapat memesan hasil panen dari para petani.)"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">
<!-- ======= Hasil Panen Raya ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
<!--------------------------DATA Rekap Panen TANAMAN BUAH--------------------------------------------->
    <div class="section-title">
        <h2>DATA REKAP PANEN KABUPATEN PROBOLINGGO</h2>
    </div>
      <div class="w3-content w3-display-container">
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        <div class="mySlides">
          <h1><span class="blue"></span>REKAP PANEN<span class="blue"></span> <span class="yellow">TANAMAN BUAH</span></h1>
                <table class="container">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Komoditi</th>
                          <th>Jumlah Tanaman (Pohon)</th>
                          <th>Tanaman Baru (Pohon)</th>
                          <th>Tanaman Belum Menghasilkan (Pohon)</th>
                          <th>Tanaman Produktif(Pohon)</th>
                          <th>Produksi (Kuintal)</th>
                          <th>Provitas (kg/ph)</th>
                          <th>Rerata Harga (Rp/Kg)</th>
                          <th>Tahun</th>
                        </tr>
	                  </thead>
                    <tbody>
                      <?php $no = 1;
                        foreach ($bua as $buah) { ?>
                      <tr>
                        <td><?= $no++ ?></td>                                     
                        <td><?= $buah['nama_tanaman']; ?></td>
                        <td><?= "" . number_format($buah['jumlah_tanaman'], 0, ',', '.'); ?></td>
                        <td><?= "" . number_format($buah['tanaman_baru'], 0, ',', '.'); ?></td>
                        <td><?= "" . number_format($buah['tanaman_menghasilkan'], 0, ',', '.'); ?></td>
                        <td><?= "" . number_format($buah['tanaman_produktif'], 0, ',', '.'); ?></td>
                        <td><?= "" . number_format($buah['produksi_buah'], 0, ',', '.'); ?></td>
                        <td><?= "" . number_format($buah['provitas'], 0, ',', '.'); ?></td>
                        <td><?= $buah['harga']; ?></td>
                        <td><?= $buah['tahun']; ?></td>
                      </tr>
                      <?php
                      } ?>
                    </tbody>
                </table>
              </div>
            </div>
            <!-------------------------- END DATA Rekap Panen TANAMAN BUAH--------------------------------------------->

    <!--------------------------DATA Rekap Panen TANAMAN BIOFARMAKA--------------------------------------------->
      <div class="w3-content w3-display-container">
        <div class="mySlides">
          <h1><span class="blue"></span>REKAP PANEN<span class="blue"></span> <span class="yellow">TANAMAN BIOFARMAKA</span></h1>
                <table class="container">
                  <thead>
                      <tr>
                        <th>No</th>
                        <th>Komoditi</th>
                        <th>Luas Tanam (m<sup>2</sup>)</th>
                        <th>Luas Panen (m<sup>2</sup>)</th>
                        <th>Provitas (kg/m<sup>2</sup>)</th>
                        <th>Produksi (kg)</th>
                        <th>Harga</th>
                        <th>Tahun</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no = 1;
                      foreach ($bf as $biofarmaka) { ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $biofarmaka['komoditi_biofarmaka']; ?></td>
                        <td><?= "" . number_format($biofarmaka['luas_tanam'], 0, ',', '.'); ?></td>
                        <td><?= "" . number_format($biofarmaka['luas_panen'], 0, ',', '.'); ?></td>
                        <td><?= "" . number_format($biofarmaka['provitas'], 0, ',', '.'); ?></td>
                        <td><?= "" . number_format($biofarmaka['produksi_biofarmaka'], 0, ',', '.'); ?></td>
                        <td><?= $biofarmaka['harga_biofarmaka']; ?></td>
                        <td><?= $biofarmaka['tahun']; ?></td>
                      </tr>
                      <?php
                      } ?>
                  </tbody>
                </table>
        </div>
      </div>
<!-------------------------- END DATA Rekap Panen TANAMAN BIOFARMAKA--------------------------------------------->
      
<!--------------------------DATA Rekap Panen TANAMAN PADI--------------------------------------------->
      <div class="w3-content w3-display-container">
        <div class="mySlides">
          <h1><span class="blue"></span>REKAP PANEN<span class="blue"></span> <span class="yellow">TANAMAN PADI</span></h1>
                <table class="container">
                  <thead>
                      <tr>
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Tanam (Ha)</th>
                        <th>Panen (Ha)</th>
                        <th>Provitas (Ton/Ha)</th>
                        <th>Produksi (Ton GKG)</th>
                        <th>Tahun</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($pd as $padi) { ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $padi['nama_kecamatan']; ?></td>
                        <td><?= "" . number_format($padi['tanam'], 0, '.', '.') . "Ha"; ?></td>
                        <td><?= "" . number_format($padi['panen'], 0, '.', '.') . "Ha"; ?></td>
                        <td><?= "" . number_format($padi['provitas'], 0, '.', '.'); ?></td>
                        <td><?= "" . number_format($padi['produksi'], 0, '.', '.'); ?></td>
                        <td><?= $padi['tahun']; ?></td>
                      </tr>
                    <?php
                    } ?>
                  </tbody>
                </table>
          </div>  
        </div>
<!-------------------------- END DATA Rekap Panen TANAMAN PADI--------------------------------------------->

<!--------------------------DATA Rekap Panen TANAMAN SAYUR--------------------------------------------->
        <div class="w3-content w3-display-container">
          <div class="mySlides">
            <h1><span class="blue"></span>REKAP PANEN<span class="blue"></span> <span class="yellow">TANAMAN SAYUR</span></h1>
                <table class="container">
                  <thead>
                      <tr>
                        <th>No</th>
                        <th>Komoditi</th>
                        <th>Luas Tanam (Ha)</th>
                        <th>Luas Panen (Ha)</th>
                        <th>Produksi Habis Dibongkar (Kui)</th>
                        <th>Produksi Belum Dibongkar (Kui)</th>
                        <th>Total (Kui)</th>
                        <th>Harga Min (Rp/Kui)</th>
                        <th>Harga Max (Rp/Kui)</th>
                        <th>Tahun</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($syr as $sayur) { ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $sayur['komoditi']; ?></td>
                        <td><?= "" . number_format($sayur['luas_tanam'], 0, '.', '.') . "Ha"; ?></td>
                        <td><?= "" . number_format($sayur['luas_panen'], 0, '.', '.') . "Ha"; ?></td>
                        <td><?= "" . number_format($sayur['produksi_habis_dibongkar'], 0, '.', '.') . "Kui"; ?></td>
                        <td><?= "" . number_format($sayur['produksi_belum_dibongkar'], 0, '.', '.') . "Kui"; ?></td>
                        <td><?= "" . number_format($sayur['total'], 0, '.', '.') . "Kui"; ?></td>
                        <td><?= $sayur['harga_min'];?></td>
                        <td><?= $sayur['harga_max']; ?></td>
                        <td><?= $sayur['tahun']; ?></td>
                      </tr>
                    <?php
                     } ?>
                  </tbody>
                </table>
            </div>
          </div>
<!-------------------------- END DATA Rekap Panen TANAMAN PADI--------------------------------------------->
    <!-- ======= Petunjuk Section ======= -->
    <section class="site-section" id="about-section">
      <div class="container">
        
        <div class="row large-gutters">
          <div class="col-lg-6 mb-5">

              <div class="owl-carousel slide-one-item with-dots">
                  <div><img src="assets8/images/features-3.png" alt="Image" class="img-fluid"></div>
                </div>
          </div>
          <div class="col-lg-6 ml-auto">
            <h1><div class="section-title">Petunjuk Pemesanan</div></h1>
                <h1><p class="section-title">Cara untuk pemesanan sebagai berikut :</p></h1>

                <ul class="list-unstyled ul-check success">
                  <h3><li>1. Pilih fitur data panen</li></h1>
                  <h3><li>2. Setelah memilih fitur data panen, akan ada tabel data panen yang sudah disediakan. Tabel tersebut merupakan tabel data-data panen dari petani.</li></h3>
                  <h3><li>3. Klik pesan, jika sudah yakin untuk memesan. Kemudian anda harus menghubungi nomor handphone yang sudah tersedia untuk transaksi pembayarannya.</li></h3>
                  <h3><li>4. Pemesanan yang sudah dilakukan akan masuk ke fitur riwayat pesan. Klik riwayat pesan untuk melihat riwayat pemesanan anda.</li></h3>
                  <h3><li>5. Klik laporan jika anda ingin melihat pemesanan setiap bulannya.</li></h3>
                </ul>
          </div>
        </div>
      </div>
        <div class="container">
          <div class="card bg-success">
            <div class="card-header">
              <div class="card-title">
                <h4 class="pt-2">Produk Hasil Panen Berdasarkan Kecamatan</h4>
              </div>
            </div>
            <div class="row p-4 justify-content-center text-center">
              <div class="col-lg-12">
                <div class="form-row justify-content-center">
                  <div class="form-group">
                    <form action="<?= base_url('Beranda2/komoditi_wilayah'); ?>" method="post">
                      <select name="wilayah" id="wilayah" class="form-control-sm">
                        <option value="<?= set_value('wilayah'); ?>"><?= set_value('wilayah'); ?></option>
                        <?php foreach ($desa as $ds) : ?>
                          <option value="<?= $ds->desa ?>"><?= $ds->desa ?></option>
                        <?php endforeach; ?>
                      </select>
                      <button class="btn btn-primary">Cari</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 pt-4 mt-4 pt-lg-0 content justify-content-center">
                <?php if ($wilayah) : ?>
                  <?php foreach ($wilayah as $list) : ?>
                    <div class="col-md-3">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= base_url() ?>/uploads/panen/<?= $list->gambar_panen; ?>" alt="Card image cap" height="200px" width="200px">
                        <div class="card-body">
                          <p class="card-text">
                          <h5>
                            Nama : Petani<?= $list->nama_petani; ?>
                          </h5>
                          </p>
                          <p class="card-text">
                          <h5>Tanggal : Panen<?= $list->tanggal_panen; ?></h5>
                          </p>
                          <p class="card-text">
                          <h5>Kecamatan :<?= $list->desa; ?></h5>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                <?php else : ?>
                  <?php foreach ($desa as $list) : ?>
                    <div class="col-md-3 mb-5">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= base_url() ?>/uploads/panen/<?= $list->gambar_panen; ?>" alt="Card image cap" height="200px" width="200px">
                        <div class="card-body">
                          <p class="card-text">
                          <h5>Nama : Petani<?= $list->nama_petani; ?></h5>
                          </p>
                          <p class="card-text">
                          <h5>Tanggal : Panen<?= $list->tanggal_panen; ?></h5>
                          </p>
                          <p class="card-text">
                          <h5>Kecamatan :<?= $list->desa; ?></h5>
                          </p>
                          <div class="cart-section">
                            <div class="row">
                              <div class="col-md-6 col-sm-12 col-xs-6">
                                <a href="<?= base_url('auth') ?>" class="AddCart btn btn-info btn-lg">Pesan Sekarang</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Kontak Kami</h2>
            </div>

            <div class="row mt-1">

              <div class="col-lg-4">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Lokasi:</h4>
                    <p>Dusun Krajan Rt 18 Rw 05 Desa Maron Kidul, Kabupaten Probolinggo</p>
                  </div>

                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>infopanen@gmail.com</p>
                  </div>

                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Nomor Handphone:</h4>
                    <p>+6282213666744</p>
                  </div>

                </div>

              </div>
            </div>

          </div>
        </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Info Panen</h3>
      <p>Info Panen merupakan sistem informasi yang menyediakan informasi panen raya di Kabupaten Probolinggo. Info Panen menyediakan fitur untuk para petani mempromosikan hasil panen rayanya kepada masyarakat Kabupaten Probolinggo agar lebih dikenal.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets7/assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/php-email-form/validate.js'); ?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/purecounter/purecounter.js') ?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/typed.js/typed.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
  <script src="<?php echo base_url('assets5/vendor/chart.js/Chart.min.js'); ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets5/js/demo/chart-area-demo.js'); ?>"></script>
  <script src="<?php echo base_url('assets5/js/demo/chart-pie-demo.js'); ?>"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets7/assets/js/main.js'); ?>"></script>
  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets5/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets5/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets5/js/demo/datatables-demo.js'); ?>"></script>
  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }
</script>
</body>

</html>