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
                    <ul>
                        <li>
                            <a href="<?php echo site_url('Vtanam_panen'); ?>" class="nav-link">Produk Panen</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Vtanam_panen/detail_cart'); ?>" class="nav-link">
                                <?php
                                $keranjang = 'Keranjang : ' . $this->cart->total_items() . ' items';
                                ?>
                                <?= $keranjang; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Vtanam_panen/riwayat_pesan'); ?>" class="nav-link">
                                Riwayat Pesanan
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Vtanam_panen/laporan_pembeli'); ?>" class="nav-link">
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
                            <a class="btn btn-info text-white" href="<?= base_url('Vtanam_panen/my_profile'); ?>" class="nav-link">
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

                        <div class="col-12 col-md-10 d-none d-xl-block">
                            <nav class="site-navigation position-relative text-right" role="navigation">

                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                    <li>
                                        <a href="<?php echo site_url('Vtanam_panen'); ?>" class="nav-link">Produk Panen</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Vtanam_panen/detail_cart'); ?>" class="nav-link">
                                            <?php
                                            $keranjang = 'Keranjang : ' . $this->cart->total_items() . ' items';
                                            ?>
                                            <?= $keranjang; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Vtanam_panen/riwayat_pesan'); ?>" class="nav-link">
                                            Riwayat Pesanan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Vtanam_panen/laporan_pembeli'); ?>" class="nav-link">
                                            Laporan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('auth/logout'); ?>" onclick="window.confirm()">
                                            <i class="fas fa-sign-out-alt"></i>
                                            Logout
                                        </a>
                                    </li>
                                    <li>
                                        <a class="bg-info rounded-circle ml-5" href="<?= base_url('Vtanam_panen/my_profile'); ?>">
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
            <div class="site-block-wrap-riwayat">

            </div>