<!-- Content Wrapper --> <div id="content-wrapper" class="d-flex flex-column"> <!-- Main Content --> <div id="content">

<!-- Topbar -->      <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<nav class="sb-topnav navbar mb-4 navbar-expand navbar-dark bg-dark"><!-- Sidebar Toggle (Topbar) -->                         <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
 <!-- Page Heading --> <a class="navbar-brand">Pustaka Booking</a> <!-- Topbar Navbar --> <ul class="navbar-nav ml-auto"> <div class="topbar-divider d-none d-sm-block"></div> <!-- Nav Item - User Information -->                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw" ></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('user'); ?>">Profile Saya</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('autentifikasi/logout'); ?>">Logout</a>
                    </div>
                </li> </ul> </nav> <!-- End of Topbar -->