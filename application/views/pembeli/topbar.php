<style>
  /* Dropdown Button */
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
  }

  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  }

  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {
    background-color: #f1f1f1
  }

  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
    display: block;
  }

  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }
</style>

<body>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

      <div class="site-mobile-menu site-navbar-target">

        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile">
          <ul class="main-menu">
            <li class="main-menu">
              <a href="<?php echo site_url('VTanam_panen'); ?>" class="nav-link">Produk Panen</a>
            </li>
            <li>
              <a href="<?php echo site_url('VTanam_panen/detail_cart'); ?>" class="nav-link">
                <?php if ($user['username'] == $this->session->userdata('username')) : ?>
                  <?php
                  $keranjang = 'Keranjang : ' . $this->cart->total_items() . ' items';
                  ?>
                  <?= $keranjang; ?>
                <?php endif; ?>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('VTanam_panen/riwayat_pesan'); ?>" class="nav-link">
                Riwayat Pesanan
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('VTanam_panen/laporan_pembeli'); ?>" class="nav-link">
                Laporan
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link" onclick="window.confirm()">
                Logout
                <i class="fas fa-sign-out-alt"></i>
              </a>
            </li>
            <li>
              <a class="btn bg-info ml-2 text-white" href="<?= base_url('VTanam_panen/my_profile'); ?>" class="nav-link">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
              </a>
            </li>
          </ul>
        </div>

      </div>


      <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-xl-2">
              <h1 class="mb-0 site-logo m-0 p-0"><a href="pembeli" class="mb-0">INFO PANEN</a></h1>
            </div>

            <div class="col-12 col-md-10 d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li><a href="<?php echo site_url('VTanam_panen'); ?>" class="nav-link">Produk Panen</a></li>
                  <li>
                    <a href="<?php echo site_url('VTanam_panen/detail_cart'); ?>" class="nav-link">
                      <?php
                      $keranjang = 'Keranjang : ' . $this->cart->total_items() . ' items';
                      ?>
                      <?= $keranjang; ?>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('VTanam_panen/riwayat_pesan'); ?>" class="nav-link">
                      Riwayat Pesanan
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('VTanam_panen/laporan_pembeli'); ?>" class="nav-link">
                      Laporan
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('Auth/logout'); ?>" onclick="window.confirm()">
                      <i class="fas fa-sign-out-alt"></i>
                      Logout
                    </a>
                  </li>
                  <li>
                    <a class="bg-info rounded-circle ml-5" href="<?= base_url('VTanam_panen/my_profile'); ?>">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                    </a>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>
      <div class="site-block-wrap">
        <div class="owl-carousel with-dots">
          <div class="site-blocks-cover overlay overlay-2" style="background-image: url(assets7/assets/img/icon2.png);" data-aos="fade" id="home-section">


            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-6 mt-lg-5 text-center">
                  <h1 class="text-shadow">INFO PANEN</h1>
                </div>
              </div>
            </div>
          </div>

          <div class="site-blocks-cover overlay overlay-2" style="background-image: url(assets7/assets/img/icon2.png);" data-aos="fade" id="home-section">


            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-6 mt-lg-5 text-center">
                  <p class="mb-5 text-shadow">Wadah untuk para petani yang ingin menjual hasil produk panen secara online.</p>
                </div>
              </div>
            </div>


          </div>
        </div>

      </div>