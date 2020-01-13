<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="<?php echo base_url('assets/'); ?>img/favicon.png" type="image/png" />
    <title>Sewain.online - <?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendors/sb-admin-2/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/vendors/sb-admin-2/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<? base_url('Home') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sewain</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manajemen
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('profile/index') ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('sewakan/index') ?>">
                    <i class="fas fa-fw fa-exchange-alt"></i>
                    <span>Sewakan Barang</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('riwayat/index') ?>">
                    <i class="fas fa-fw fa-history"></i>
                    <span>Riwayat Saya</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('akun/index') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Akun Saya</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/keluar'); ?>">
                    <i class="fas fa-fw"></i>
                    <span>Keluar</span></a>
            </li>

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