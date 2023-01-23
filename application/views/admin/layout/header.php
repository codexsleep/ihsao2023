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
    <link href="<?= base_url(); ?>assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="<?= base_url(); ?>assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- third party css -->
    <link href="<?= base_url(); ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->


    <!-- Bootstrap css -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="<?= base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href="<?= base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="<?= base_url(); ?>assets/js/head.js"></script>

</head>

<!-- body start -->

<body data-layout-mode="detached" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>


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
                            <?= $admin['name'];?> <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Selamat Datang !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Profile</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Ganti Password</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="<?= base_url()?>admin/auth/logout" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="<?= base_url();?>" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="<?= base_url(); ?>assets/images/favicon.png" alt="sm-ihsao-logo" height="43">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url(); ?>assets/images/logo.png" alt="lg-ihsao-logo" height="50">
                            <!-- <span class="logo-lg-text-light">U</span> -->
                        </span>
                    </a>

                    <a href="<?= base_url();?>" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="<?= base_url(); ?>assets/images/favicon.png" alt="sm-ihsao-logo" height="43">
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url(); ?>assets/images/logo.png" alt="lg-ihsao-logo" height="50">
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
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="text-black h5 mt-2 mb-1 d-block"><?= $admin['name'];?></a>
                   
                    </div>
                    <p class="text-muted"><?php if($admin['role']==1){ echo "Superadmin"; }elseif($admin['role']==1){ echo "Admin"; }?></p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">
                        
                        <li>
                            <a href="<?= base_url();?>admin/dashboard">
                            <i class="dripicons-view-apps"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="#sidebarQuiz" data-bs-toggle="collapse">
                                <i class="dripicons-document"></i>
                                <span> Quiz </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarQuiz">
                                <ul class="nav-second-level">
                                <li>
                                        <a href="<?= base_url()?>admin/quiz">Semua Quiz</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url()?>admin/quiz/tambah">Tambah Quiz</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebarPeserta" data-bs-toggle="collapse">
                            <i class="dripicons-user-group"></i>
                                <span> Peserta </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPeserta">
                                <ul class="nav-second-level">
                                <li>
                                        <a href="<?= base_url();?>admin/peserta">Semua Peserta</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url();?>admin/peserta/tambah">Tambah Peserta</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#<?= base_url();?>admin/dashboard">
                            <i class="dripicons-trophy"></i>
                                <span> Nilai </span>
                            </a>
                        </li>
                        <li>
                            <a href="#sidebarAdmin" data-bs-toggle="collapse">
                                <i class="dripicons-user-id"></i>
                                <span> Admin </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarAdmin">
                                <ul class="nav-second-level">
                                <li>
                                        <a href="<?= base_url();?>admin/administrator">Semua Admin</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url();?>admin/administrator/tambah">Tambah Admin</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>


                        

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->