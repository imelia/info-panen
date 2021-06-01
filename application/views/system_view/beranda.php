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
      color: #A7A1AE;
      background-color: #1F2739;
    }

    h1 {
      font-size: 2em;
      font-weight: 300;
      line-height: 1em;
      text-align: center;
      color: #4DC3FA;
    }

    h2 {
      font-size: 2em;
      font-weight: 300;
      text-align: center;
      display: block;
      line-height: 1em;
      padding-bottom: 2em;
      color: #FB667A;
    }

    h2 a {
      font-weight: 700;
      text-transform: uppercase;
      color: #FB667A;
      text-decoration: none;
    }

    .blue {
      color: #185875;
    }

    .yellow {
      color: #FFF842;
    }

    .container th h1 {
      font-weight: bold;
      font-size: 2em;
      text-align: left;
      color: #185875;
    }

    .container td {
      font-weight: normal;
      font-size: 2em;
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

    .container td,
    .container th {
      padding-bottom: 2%;
      padding-top: 2%;
      padding-left: 2%;
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

    .container td:first-child {
      color: #FB667A;
    }

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
      .container th:nth-child(4) {
        display: none;
      }
    }
  </style>
  <style>
    .mySlides {
      display: none;
    }
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
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets7/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet">
  </link>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet">
  </link>
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
        <!--<br>
        <li><a href="<?= base_url('beranda2') ?>" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Info Panen</span></a></li>-->

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

        <div class="section-title">
          <h2>Hasil Panen Raya (Dengan grafik poliygon)</h2>
          <h3>
            <p>Grafik dibawah merupakan hasil rekap panen dari padi palawija, sayuran, buah, dan biofarmaka. Sehingga masyarakat dapat melihat grafik dari tahun pertahun.</p>
          </h3>
        </div>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="card shadow pb-5" style="height: 200%;">
            <div class="row justify-content-center">

              <!-- Area Chart -->
              <div class="col-lg-5 p-5">
                <!-- Card Body -->
                <div class="card-body">
                  <h4 class="m-0 font-weight-bold text-primary">Biofarmaka</h4>
                  <div class="chart-area">
                    <canvas id="chartBio"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-lg-5 p-5">
                <!-- Card Body -->
                <div class="card-body">
                  <h4 class="m-0 font-weight-bold text-primary">Buah</h4>
                  <div class="chart-area">
                    <canvas id="chartBuah"></canvas>
                  </div>
                </div>

              </div>
              <div class="col-lg-5 p-5">
                <!-- Card Body -->
                <div class="card-body">
                  <h4 class="m-0 font-weight-bold text-primary">Padi Palawija</h4>
                  <div class="chart-area">
                    <canvas id="chartPadiPal"></canvas>
                  </div>
                </div>

              </div>
              <div class="col-lg-5 p-5">
                <!-- Card Body -->
                <div class="card-body">
                  <h4 class="m-0 font-weight-bold text-primary">Sayuran</h4>
                  <div class="chart-area">
                    <canvas id="sayurChart"></canvas>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- End Content row -->
        </div>
      </div>
    </section>
    <!-- End Hasil Rekap Panen -->


    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data kemajuan infopanen</h2>
          <h3>
            <p>Data kemajuan digunakan untuk menampilkan seberapa banyak transaksi, petani, dan pembeli yang aktif dalam jual beli ini</p>
          </h3>
        </div>

        <!-- Content Row -->

        <div class="row d-flex justify-content-lg-center align-items-center align-self-center">
          <div class="col-lg-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header text-dark">Data Petani</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <span class="text-center"><i class="fa fa-4x fa-users" aria-hidden="true"></i></span>
                  </div>
                  <div class="pl-4 col-md-9">
                    <h5 class="card-title text-center">Jumlah Petani yang gabung</h5>
                    <h5 class="card-text text-center">
                      <?php foreach ($countPetani as $cp) : ?>
                        <?= $cp['petani']; ?>
                      <?php endforeach; ?>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header text-dark">Data Pembeli</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <span class="text-center"><i class="fa fa-4x fa-users" aria-hidden="true"></i></span>
                  </div>
                  <div class="pl-4 col-md-9">
                    <h5 class="card-title text-center">Jumlah pembeli yang gabung</h5>
                    <h5 class="card-text text-center">
                      <?php foreach ($countPembeli as $cpm) : ?>
                        <?= $cpm['pembeli']; ?>
                      <?php endforeach; ?>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
              <div class="card-header text-dark">Data Transaksi</div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <span class="text-center"><i class="fa fa-4x fa-handshake-o" aria-hidden="true"></i></span>
                  </div>
                  <div class="pl-4 col-md-9">
                    <h5 class="card-title text-center">Jumlah transaksi yang dilakukan</h5>
                    <p class="card-text text-center">
                      <?php foreach ($countTransaksi as $ct) : ?>
                        <?= $ct['transaksi']; ?>
                      <?php endforeach; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Content row -->
    </section>


    <!-- ======= Hasil Panen Raya ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <!-------------------------- DATA HARGA --------------------------------------------->
        <div class="section-title">
          <h2>DAFTAR HARGA DI KABUPATEN PROBOLINGGO</h2>
        </div>
        <div class="w3-content w3-display-container">
          <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          <div class="mySlides">
            <h1><span class="blue"></span>HARGA KONSUMEN<span class="blue"></span></h1>
            <table class="container">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Harga</th>
                  <th>Komoditas</th>
                  <th>Pasar</th>
                  <th>Kecamatan</th>
                  <th>Keterangan</th>
                  <th>Tanggal Update</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($harga as $harga) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $harga['harga'] . "/Kg"; ?></td>
                    <td><?= $harga['komoditas']; ?></td>
                    <td><?= $harga['pasar']; ?></td>
                    <td><?= $harga['kecamatan']; ?></td>
                    <td><?= $harga['keterangan']; ?></td>
                    <td><?= $harga['tanggal_update']; ?></td>
                  </tr>
                <?php
                } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-------------------------- END DATA HARGA --------------------------------------------->
    </section>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Komoditas</h2>
          <h3>
            <p>Beberapa komoditas yang ada di Kabupaten Probolinggo.</p>
          </h3>
        </div>
        <div class="container">
          <div class="card mt-5 bg-warning">
            <div class="card-header">
              <div class="card-title">
                <h4 class="pt-2">Beberapa jenis tanaman dan komoditas</h4>
              </div>
            </div>
            <div class="row justify-content-center p-4">
              <div class="col-lg-12">
                <div class="form-row justify-content-center">
                  <div class="form-group">
                    <form action="<?= base_url('Beranda/komoditas_specify'); ?>" method="post">
                      <select name="nama_komoditas" id="nama_komoditas" class="form-control-sm">
                        <option value="<?= set_value('nama_komoditas'); ?>"><?= set_value('nama_komoditas'); ?></option>
                        <?php foreach ($Allkomoditas as $alk) : ?>
                          <option value="<?= $alk->nama_komoditas ?>"><?= $alk->nama_komoditas ?></option>
                        <?php endforeach; ?>
                      </select>
                      <button class="btn btn-primary">Cari</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 pt-4 mt-5 mb-5 pb-5 pt-lg-0 content justify-content-center">
                <?php if ($komoditas) : ?>
                  <?php foreach ($komoditas as $listes) : ?>
                    <div class="col-md-3">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= base_url() ?>/uploads/komoditas/<?= $listes->gambar; ?>" alt="Card image cap" height="200px" width="200px">
                        <div class="card-body">
                          <p class="card-text">
                          <h5>Nama Komoditas : <?= $listes->nama_komoditas; ?></h5>
                          </p>
                          <p class="card-text">
                          <h5>Nama Tanaman : <?= $listes->nama_tanaman; ?></h5>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                <?php else : ?>
                  <?php foreach ($Allkomoditas as $listes) : ?>
                    <div class="col-md-3 mb-5">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= base_url() ?>/uploads/komoditas/<?= $listes->gambar; ?>" alt="Card image cap" height="200px" width="200px">
                        <div class="card-body">
                          <p class="card-text">
                          <h5>Nama Komoditas : <?= $listes->nama_komoditas; ?></h5>
                          </p>
                          <p class="card-text">
                          <h5>Nama Tanaman : <?= $listes->nama_tanaman; ?></h5>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <!-- ======= Petunjuk Section ======= -->
        <section class="site-section" id="about-section">
          <div class="container">

            <div class="row large-gutters">
              <div class="col-lg-6 mb-5">

                <div class="owl-carousel slide-one-item with-dots">
                  <div><img src="<?= base_url('assets8/images/values-1.png') ?>" alt="Image" class="img-fluid"></div>
                </div>
              </div>
              <div class="col-lg-6 ml-auto">
                <h1>
                  <div class="section-title">Petunjuk Pemesanan</div>
                </h1>
                <h1>
                  <p class="section-title">Cara untuk pemesanan sebagai berikut :</p>
                </h1>

                <ul class="list-unstyled ul-check success">
                  <h3>
                    <li>1. Login terlebih dahulu jika sudah punya akun, apabila belum memiliki akun pilih menu registrasi</li>
                    </h1>
                    <h3>
                      <li>2. Pilih menu produk panen</li>
                    </h3>
                    <h3>
                      <li>3. Klik menu pesan sekarang. Kemudian anda harus menghubungi nomor handphone yang sudah tersedia di menu detail menyanyakan terkait dengan transaksi pengiriman.</li>
                    </h3>
                    <h3>
                      <li>4. Check Out pesanan di menu keranjang dengan klik menu bayar panen</li>
                    </h3>
                    <h3>
                      <li>5. Setelah check out pesanan, klik menu riwayat pesanan untuk mengkonfirmasi pembayaran</li>
                    </h3>
                    <h3>
                      <li>6. Lihat menu laporan untuk melihat riwayat pesanan dan pembayaran</li>
                    </h3>
                </ul>
              </div>
            </div>
          </div>
          <div class="section-title">
            <h2>Hasil Panen atau Produk Panen Berdasarkan Komoditas</h2>
          </div>
          <div class="container">
            <div class="card mt-5 mb-5 bg-info">
              <div class="card-header">
                <div class="card-title">
                  <h4 class="pt-2">Produk Panen dari Petani </h4>
                </div>
              </div>
              <div class="row justify-content-center p-4">
                <div class="col-lg-12">
                  <div class="form-row justify-content-center">
                    <div class="form-group">
                      <form action="<?= base_url('Beranda/produk_komoditas'); ?>" method="post">
                        <select name="komoditi" id="komoditi" class="form-control-sm">
                          <option value="<?= set_value('komoditi'); ?>"><?= set_value('komoditi'); ?></option>
                          <?php foreach ($Allproduk as $alp) : ?>
                            <option value="<?= $alp->komoditi ?>"><?= $alp->komoditi ?></option>
                          <?php endforeach; ?>
                        </select>
                        <button class="btn btn-primary">Cari</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 pt-4 mt-5 mb-5 pb-5 pt-lg-0 content justify-content-center">
                  <?php if ($produk) : ?>
                    <?php foreach ($produk as $prd) : ?>
                      <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="<?= base_url() ?>/uploads/panen/<?= $prd->gambar_panen; ?>" alt="Card image cap" height="200px" width="200px">
                          <div class="card-body">
                            <p class="card-text">
                            <h5>panenKomoditas : <td><?= $prd->komoditi ?></td>
                            </h5>
                            <h5>Kecamatan : <td><?= $prd->desa ?></td>
                            </h5>
                            <h5>Tanggal Panen : <td><?= $prd->tanggal_panen ?></td>
                            </h5>
                            <h5 class="detail-price"><?= $prd->harga_panen ?></h5>
                            </p>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <?php foreach ($Allproduk as $alpr) : ?>
                      <div class="col-md-3 mb-5">
                        <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="<?= base_url() ?>/uploads/panen/<?= $alpr->gambar_panen; ?>" alt="Card image cap" height="200px" width="200px">
                          <div class="card-body">
                            <p class="card-text">
                            <h5>Komoditas : <td><?= $alpr->komoditi ?></td>
                            </h5>
                            <h5>Kecamatan : <td><?= $alpr->desa ?></td>
                            </h5>
                            <h5>Tanggal Panen : <td><?= $alpr->tanggal_panen ?></td>
                            </h5>
                            <h5 class="detail-price"><?= $alpr->harga_panen ?></h5>
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


    <!-- ======= About Section ======= -->
    <!--<section id="about" class="about">
      <!--<div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pemesan</h2>
        </div>

        <!-- Content Row -->
    <!--<div class="row justify-content-center">
          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
    <!--<ul class="carousel-indicators">
              <?php
              $i = 0;
              foreach ($show_caro as $row) {
                $active = '';
                if ($i == 0) {
                  $active = 'active';
                }
              ?>
                <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $active; ?>"></li>
              <?php $i++;
              } ?>
            </ul>

            <!-- The slideshow -->
    <div class="carousel-inner">
      <?php
      $i = 0;
      foreach ($show_caro as $row) {
        $active = '';
        if ($i == 0) {
          $active = 'active';
        }
      ?>
        <!--<div class="text-center bg-primary text-white rounded pt-2 carousel-item <?= $active; ?>">
                  <p>Nama Produk</p>
                  <p><?= $row->nama_produk; ?></p>
                  <p>Nama Pembeli</p>
                  <p> <?= $row->nama_pembeli; ?></p>
                </div>
              <?php $i++;
            } ?>
            </div>

            <!-- Left and right controls -->
        <!--<a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

          </div>
        </div>
        <!-- End Content row -->
        </section>
        <!-- End About Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Info Hama</h2>
              <h4>
                <p>Hama adalah hewan yang merusak tanaman atau hasil tanaman atau tanaman karena aktivitas hidupnya, terutama yang disebabkan oleh aktivitas pengumpulan makanan. Hama tanaman adalah organisme yang menyerang tanaman untuk mengganggu pertumbuhan dan perkembangannya.</p>
                </h3>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <h3 class="resume-title">Jenis-Jenis Hama</h3>
                <div class="resume-item">
                  <ul>
                    <h5>Tikus</h5>
                    <li>
                      <h3>
                        <p>Tikus biasanya menyerang tanaman padi, dan sering bergerak pada malam hari. Biasanya biji dan tangkai adalah target utama tikus yang menyerang padi. Tikus bisa makan biji-bijian beras dengan gigi tajam Biasanya, tikus membuat lubang di dekat ladang dan bersembunyi di antara semak-semak. </p>
                      </h3>
                    </li>
                    <h5>Ulat</h5>
                    <li>
                      <h3>
                        <p>Ulat biasanya memakan daun dan batang tanaman. Anda bahkan mungkin sering melihatnya di lingkungan itu.</p>
                      </h3>
                    </li>
                  </ul>
                </div>
                <div class="resume-item">
                  <ul>
                    <h5>Walang Sangit</h5>
                    <li>
                      <h3>
                        <p>Walang sangit adalah salah satu hama yang agak mengganggu petani. Bau busuk dapat merusak tanaman dengan melompat atau terbang dari satu tanaman ke tanaman lain, melepaskan bau yang tidak menyenangkan.</p>
                      </h3>
                    </li>
                    <h5>Wereng</h5>
                    <li>
                      <h3>
                        <p>Wereng biasanya menyerang daun dan batang tanaman, menyebabkan tanaman mati. Hama wereng ini adalah salah satu pembawa virus yang menyebabkan penyakit tungsten.</p>
                        </h4>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <h3 class="resume-title">Cara Mengatasi Hama dan Penyakit Tanaman</h3>
                <div class="resume-item">
                  <ul>
                    <h5>Pengendalian Mekanis</h5>
                    <li>
                      <h3>
                        <p>Metode ini dapat dianggap sebagai metode tradisional karena tidak menggunakan bahan kimia seperti insektisida tetapi alat seperti sabit, gunting tanaman, dll. Metode ini membutuhkan waktu yang lama, hasilnya tidak optimal karena perkembangan hama dan penyakit pada tanaman yang banyak digunakan.</p>
                      </h3>
                    </li>
                    <h5>Pengendalian Biologis</h5>
                    <li>
                      <h3>
                        <p>Mengendalikan hama dan penyakit tanaman secara biologis adalah mengendalikan hama dengan menggunakan predator untuk memangsa para hama tersebut. Namun, dapat dikatakan bahwa kontrol biologis ini tidak optimal karena predator terkadang sulit ditemukan.</p>
                      </h3>
                    </li>
                    <h5>Pengendalian Kimia</h5>
                    <li>
                      <h3>
                        <p>Mengendalikan hama dan penyakit tanaman secara kimia adalah cara terakhir apabila cara sebelumnya tidak membuahkan hasil yang maksimal. Pestisida seperti insektisida, fungisida dan herbisida digunakan untuk mengendalikan hama dan penyakit dengan bahan kimia.</p>
                      </h3>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- End Resume Section -->

        <!-- Berita Section -->
        <section class="site-section" id="news-section">
          <div class="container">
            <div class="row mb-5">
              <div class="col-12 text-center">
                <h2 class="section-title mb-3">Berita &amp; Acara</h2>
              </div>
            </div>

            <div class="row">
              <?php foreach ($qr as $key => $data) { ?>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                  <div class="h-entry">
                    <a href="#"><img src="<?= base_url() ?>/uploads/berita/<?= $data->nama_gambar; ?>" alt="Image" class="img-fluid" style="height:260px;"></a>
                    <h3 class="font-size-regular"><a class="text-dark"><?= $data->judul ?></a></h5>
                      <h4>
                        <div class="meta mb-4"><?= $data->sumber ?><span class="mx-2">&bullet;</span><?= $data->tanggal ?><span class="mx-2">&bullet;</span> <a href="<?= $data->link ?>" target="_blank">News</a></div>
                      </h4>
                  </div>
                </div>
              <?php
              } ?>
            </div>
          </div>
        </section>
        <!-- End Berita Section -->

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      if (n > x.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = x.length
      }
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex - 1].style.display = "block";
    }
  </script>
  <script type="text/javascript">
    var ctx = document.getElementById('chartBio').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          <?php
          if (count($biochart) > 0) {
            foreach ($biochart as $data) {
              echo "'" . $data->tahun . "',";
            }
          }
          ?>
        ],
        datasets: [{
          label: 'Produksi',
          backgroundColor: '#ADD8E6',
          borderColor: '##93C3D2',
          data: [
            <?php
            if (count($biochart) > 0) {
              foreach ($biochart as $data) {
                echo $data->produksi_biofarmaka  . ", ";
              }
            }
            ?>
          ]
        }]
      },
    });

    var ctx = document.getElementById('chartBuah').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          <?php
          if (count($buahchart) > 0) {
            foreach ($buahchart as $list) {
              echo $list->tahun . ", ";
            }
          }
          ?>
        ],
        datasets: [{
          label: 'Produksi',
          backgroundColor: '#ADD8E6',
          borderColor: '##93C3D2',
          data: [
            <?php
            if (count($buahchart) > 0) {
              foreach ($buahchart as $list) {
                echo "'" . $list->produksi_buah . "',";
              }
            }
            ?>
          ]
        }]
      },
    });

    var ctx = document.getElementById('chartPadiPal').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          <?php
          if (count($padipal) > 0) {
            foreach ($padipal as $row) {
              echo $row->tahun . ", ";
            }
          }
          ?>
        ],
        datasets: [{
          label: 'Produksi',
          backgroundColor: '#ADD8E6',
          borderColor: '##93C3D2',
          data: [
            <?php
            if (count($padipal) > 0) {
              foreach ($padipal as $row) {
                echo "'" . $row->produksi . "',";
              }
            }
            ?>
          ]
        }]
      },
    });

    var ctx = document.getElementById('sayurChart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          <?php
          if (count($sayur) > 0) {
            foreach ($sayur as $chart) {
              echo $chart->tahun . ", ";
            }
          }
          ?>
        ],
        datasets: [{
          label: 'Produksi',
          backgroundColor: '#ADD8E6',
          borderColor: '##93C3D2',
          data: [
            <?php
            if (count($sayur) > 0) {
              foreach ($sayur as $chart) {
                echo "'" . $chart->produksi_habis_dibongkar . "',";
              }
            }
            ?>
          ]
        }]
      },
    });
  </script>
</body>

</html>