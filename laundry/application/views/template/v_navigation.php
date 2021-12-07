<?php include('v_header.php');

$hal    = $this->uri->segment(1);
$aktif  = 'active';
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tshirt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Ngelaundry</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= ($hal == 'dashboard') ? $aktif : ''; ?>">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= ($hal == 'transaksi') ? $aktif : ''; ?>">
                <a class="nav-link" href="<?= base_url('transaksi') ?>">
                    <i class="fas fa-database"></i>
                    <span>Data Transaksi</span></a>
            </li>
            <li class="nav-item <?= ($hal == 'admin') ? $aktif : ''; ?>">
                <a class="nav-link" href="<?= base_url('admin') ?>">
                    <i class="fas fa-users"></i>
                    <span>Data Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tentang
            </div>


            <!-- Nav Item - Charts -->
            <li class="nav-item <?= ($hal == 'tentangkami') ? $aktif : ''; ?>">
                <a class="nav-link" href="<?= base_url('tentangkami') ?>">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Tentang Kami</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('auth') ?>">Keluar<i class="fas fa-angle-right"></i>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->