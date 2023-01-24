
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title><?= $title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.png">

        <!-- Plugins css -->
        <link href="<?= base_url();?>assets/admin/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url();?>assets/admin/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
        
        <!-- Bootstrap css -->
        <link href="<?= base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="<?= base_url();?>assets/admin/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="<?= base_url();?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- Head js -->
        <script src="<?= base_url();?>assets/admin/js/head.js"></script>

    </head>

    <!-- body start -->
    <body  data-layout-mode="detached" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>


        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-end mb-0">
    
                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?= base_url(); ?>assets/images/user.png" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                <?= $peserta['nama'];?> <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Selamat datang !</h6>
                                </div>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="<?= base_url()?>peserta/auth/logout" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Keluar</span>
                                </a>
    
                            </div>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                            <img src="<?= base_url();?>assets/front/images/maskot.png" alt="" height="40">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-lg">
                            <img src="<?= base_url();?>assets/front/images/logo.png" alt="" height="40">
                                <!-- <span class="logo-lg-text-light">U</span> -->
                            </span>
                        </a>
    
                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="<?= base_url();?>assets/front/images/maskot.png" alt="" height="40">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url();?>assets/front/images/logo.png" alt="" height="40">
                            </span>
                        </a>
                    </div>
    
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>   
            
                    
    
                    
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="<?= base_url(); ?>assets/images/user.png" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                            <a href="javascript: void(0);" class="text-black h5 mt-2 mb-1 d-block"
                               ><?= $peserta['nama'];?> </a>
                        <p class="text-muted">Peserta</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">
                            <li>
                                <a href="<?= base_url();?>peserta/beranda">
                                <i class="fe-home"></i>
                                    <span> Beranda </span>
                                </a>
                            </li>
                            <li>
                                <a href="apps-chat.html">
                                <i class="fe-book-open"></i>
                                    <span> Panduan </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

