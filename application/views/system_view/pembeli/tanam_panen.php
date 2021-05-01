<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IP | Info Panen</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets7/assets/img/loog.png');?>" rel="icon">
  <link href="<?php echo base_url('assets7/assets/img/loog.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets5/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="<?php echo base_url('assets5/css/sb-admin-2.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets5/vendor/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets7/assets/vendor/aos/aos.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets7/assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets7/assets/css/style.css');?>" rel="stylesheet">

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
        <li><a href="dashboard" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="pembeli" class="nav-link"><i class="bx bx-book-content"></i> <span>Info Komoditi</span></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="bi bi-info-square-fill"></i> <span>Info Rekap Panen</span></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo site_url('VPadi'); ?>">Tanaman Padi</a>
            <a class="dropdown-item" href="<?php echo site_url('VSayuran'); ?>">Tanaman Sayur</a>
            <a class="dropdown-item" href="<?php echo site_url('VBuah'); ?>">Tanaman Buah</a>
            <a class="dropdown-item" href="<?php echo site_url('VBiofarmaka'); ?>">Tanaman Biofarmaka</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="bi bi-info-square-fill"></i> <span>Info Panen</span></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo site_url('Kpadi'); ?>">Tanaman Padi</a>
            <a class="dropdown-item" href="<?php echo site_url('Ksayuran'); ?>">Tanaman Sayur</a>
            <a class="dropdown-item" href="<?php echo site_url('Kbuah'); ?>">Tanaman Buah</a>
            <a class="dropdown-item" href="<?php echo site_url('Kbiofarmaka'); ?>">Tanaman Biofarmaka</a>
          </div>
        </li>
        
        <li><a href="#portfolio" class="nav-link"><i class="bx bx-book-content"></i> <span>Info Panen</span></a></li>
        <li><a href="#services" class="nav-link"><i class="bx bx-server"></i> <span>Data Panen</span></a></li>
        <li><a href="#services" class="nav-link"><i class="bx bx-server"></i> <span>Riwayat Pesan</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Selamat Datang</h1>
      <p>di <span class="typed" data-typed-items="INFO PANEN"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>DATA PANEN PETANI</h2>
          <p>Aplikasi Info Panen merupakan aplikasi yang menyediakan form untuk para petani yang ingin mempromosikan hasil panennya, dan masyarakat Kabupaten Probolinggo dapat melihat di halaman beranda tentang panen-panen yang ada di Kabupaten Probolinggo seperti info panen per-tanaman, info rekap panen dari tahun-ke tahun, info komoditas, dan data panen dari para petani.</p>
        </div>

        <div class="row">
                        <!-- Main Content -->
                <div id="content">
                  <!-- Begin Page Content -->
                  <div class="container-fluid">
                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800">Tabel Data Panen Petani</h1>
                            <p class="mb-4">Tabel dibawah ini merupakan data-data tanam-panen para petani yang mempromosikan hasil panennya.</p>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Panen</h6>
                        </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th> 
                                        <th>Komoditi</th>
                                        <th>Tanggal Tanam</th>
                                        <th>Tanggal Panen</th>
                                        <th>Status Panen</th>
                                        <th>Hasil Panen</th>
                                        <th>Harga Panen</th>
                                        <th>Kondisi</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                        <tr>
                                        <th>No</th>
                                        <th>Gambar</th> 
                                        <th>Komoditi</th>
                                        <th>Tanggal Tanam</th>
                                        <th>Tanggal Panen</th>
                                        <th>Status Panen</th>
                                        <th>Hasil Panen</th>
                                        <th>Harga Panen</th>
                                        <th>Kondisi</th>
                                        <th>Keterangan</th>
                                        </tr>
                                    </tfoot>
                                <?php $no = 1;
                                    foreach($query as $key => $data) { ?>
                                <tbody>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><img src="<?=base_url()?>/uploads/panen/<?=$data->gambar_panen;?>" width="100px" height="100px"></td>
                                        <td><?=$data->komoditi?></td>
                                        <td><?= $data->tanggal_tanam?></td>
                                        <td><?= $data->tanggal_panen?></td>
                                        <td><?= $data->status_panen?></td>
                                        <td><?= $data->hasil_panen?></td>
                                        <td><?= $data->harga_panen?></td>
                                        <td><?= $data->kondisi_panen?></td>
                                        <td><?= $data->keterangan?></td>
                                    </tr>
                                </tbody>
                                <?php
                                } ?>
                            </table>
                        </div>
                    </div>
                </div>
                  <!-- /.container-fluid -->
             </div>
                <!-- End of Main Content -->
          </div>
        </div>
    </div>

          
    </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Brandon Johnson</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
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
  <script src="<?php echo base_url('assets7/assets/vendor/aos/aos.js');?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/php-email-form/validate.js');?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/purecounter/purecounter.js')?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/swiper/swiper-bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/typed.js/typed.min.js');?>"></script>
  <script src="<?php echo base_url('assets7/assets/vendor/waypoints/noframework.waypoints.js');?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets7/assets/js/main.js');?>"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets5/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets5/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets5/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets5/js/sb-admin-2.min.js');?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets5/vendor/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets5/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets5/js/demo/datatables-demo.js');?>"></script>
</body>

</html>