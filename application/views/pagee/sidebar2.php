<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <br>
            <div class="text-center">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url('assets8/images/icon.png'); ?>" alt="Image" class="img-profile rounded-circle justify-content-center text-center" style="width:50%; height:50%;">
                </div>
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

            <!-- Divider -->
            <hr class="sidebar-divider my-0 pt-1">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Petani
            </div>

            <!-- Nav Item - Data Petani -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('petani'); ?>">
                    <span>Data Petani</span></a>
            </li>
            <!-- Nav Item - Data Petani -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('tanam_panen'); ?>">
                    <span>Rekam Data</span></a>
            </li>

            <!-- Nav Item - Info Berita -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Dash_petani/rekening'); ?>">
                    <span>Rekening</span></a>
            </li> -->

            <!-- Nav Item - Data Petani -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Riwayat_pesan'); ?>">
                    <span>Riwayat Pesan</span></a>
            </li>

            <!-- Nav Item - Data Petani -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Riwayat_pesan/laporan_transaksi'); ?>">
                    <span>Laporan Transaksi</span></a>
            </li>

            <!-- Nav Item - My Profile -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Dash_petani/my_profile'); ?>">
                    <span>My Profile</span></a>
            </li>

            <!-- Nav Item - Edit Profile -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Dash_petani/edit_profile'); ?>">
                    <span>Edit Profile</span></a>
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