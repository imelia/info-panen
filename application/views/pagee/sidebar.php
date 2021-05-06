<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <br>
            <div class="sidebar-brand-icon justify-content-center text-center">
                <img src="<?php echo base_url('assets7/assets/img/loog.png'); ?>" alt="Image" class="img-fluid justify-content-center text-center" style="width:80px; height:80px;">
            </div>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dash'); ?>">
                <div class="sidebar-brand-text mx-3">INFO PANEN<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="bg-primary text-white color-white pt-3">
                <p class="text-center"><b>Hai, </b> <?= $this->session->userdata('username'); ?></p>
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('dash'); ?>">
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Panen
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>Rekap Panen</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Info Rekap Panen:</h6>
                        <a class="collapse-item" href="<?php echo site_url('padi'); ?>">Padi</a>
                        <a class="collapse-item" href="<?php echo site_url('sayuran'); ?>">Sayuran</a>
                        <a class="collapse-item" href="<?php echo site_url('buah'); ?>">Buah</a>
                        <a class="collapse-item" href="<?php echo site_url('biofarmaka'); ?>">Biofarmaka</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Komoditas -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('komoditas'); ?>">
                    <span>Komoditas</span></a>
            </li>
            <!-- Nav Item - Info Berita -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('berita'); ?>">
                    <span>Berita</span></a>
            </li>
            <!-- Nav Item - Info Harga -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('harga'); ?>">
                    <span>Info Harga</span></a>
            </li>

            <!-- Nav Item - Info Berita -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('transaksi'); ?>">
                    <span>Transaksi Petani</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">