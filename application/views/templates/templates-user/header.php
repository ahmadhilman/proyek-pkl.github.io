<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PusBok|<?= $judul ?> </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/'); ?>img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/flaticon.css">
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/slicknav.css">
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.min.css">
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/magnific-popup.css">
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/themify-icons.css">
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/slick.css">
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/nice-select.css">
            <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
            
            <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> 
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> <!-- Custom styles for this template--> 
<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet"> 

   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    PUSBOK
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            
               <div class="header-bottom subscribe_part header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                  <a href="index.html"><h3>PUSBOKMAN</h3></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="<?= base_url('home'); ?>">Home</a></li>
                                            <?php if (!empty($this->session->userdata('email'))) 
                        { 
                            ?>
                            <li><a class="nav-item nav-link" href="<?= base_url('booking'); ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a></li>
                           <li> <a class="nav-item nav-link" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a></li> <li> <a class="nav-item nav-link" href="<?= base_url('member/logout'); ?>"><i class="fas fw fa-login"></i> Log out</a></li> <?php } else { ?> <li><a class="nav-item nav-link" data-toggle="modal" data-target="#daftarModal" href="#">
                                 Daftar</a></li> <li><a class="nav-item nav-link" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fw fa-login"></i> Log in</a></li>
                                                        <?php } ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    
                                    <li >
                                        <div class="favorit-items">
                                            <i class="fas fa-shopping-cart"></i>
                                        </div>
                                    </li>
                                    <li class="d-none d-lg-block">
                                   <span class="nav-item nav-link  nav-right" style="display:block; margin-left:20px;">Selamat Datang <b><?= $user; ?></b></span></li>  <li><img class="img-profile rounded-circle" style="width:40px;height:40px;" src="<?= base_url('assets/img/profile/'). $image; ?>">
                    </a></li>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>