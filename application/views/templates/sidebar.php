<!-- Sidebar -->       
<ul class="navbar-nav bg-gray-900 sidebar  sidebar-dark accordion" id="accordionSidebar"> 
	<!-- Sidebar - Brand --> <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user'); ?>">				<img class="img-profile rounded-circle " src="<?= base_url('assets/img/profile/') . $user['image']; ?>" style="width:70px;height:70px;"><br>
  </a>
<div class="sidebar-heading " style="text-align: center"><?=  $user['nama']; ?> </div> <!-- Divider --> 
	 <!-- Divider -->
	 <hr class="sidebar-divider">
           

<!-- Looping Menu-->
	<div class="sidebar-heading">
		Home
	</div>
		<li class="nav-item active">
			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
					<i class="fa fa-fw fa-home"></i>
					<span>Dashboard</span></a>
			</li>
		</li>

	 <hr class="sidebar-divider"><!-- Looping Menu-->
<!-- Heading --> 
<div class="sidebar-heading"> Master Data </div> 

<!-- Nav Item - Dashboard --> 
<li class="nav-item active"> 
	<!-- Nav Item - Dashboard --> 
	<li class="nav-item"> 
		<a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>"> 
	<i class="fa fa-fw fa-list"></i> 
	<span>Kategori</span></a> </li> 
	<li class="nav-item"> 
		<a class="nav-link pb-0" href="<?= base_url('buku'); ?>"> 
	<i class="fa fa-fw fa-book"></i> 
	<span>Data Buku</span></a> </li> 
	<li class="nav-item"> 
		<a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>"> 
			<i class="fa fa-fw fa-users"></i> <span>Data Anggota</span></a> </li> </li>
				<li class="nav-item"> 
		<a class="nav-link pb-0" href="<?= base_url('user/pelanggan'); ?>"> 
			<i class="fa fa-fw fa-users"></i> <span>Data Pelanggan</span></a> </li> </li>
<!-- Divider --> 
<hr class="sidebar-divider mt-3"> 
<!-- Heading --> 
<div class="sidebar-heading"> Transaksi </div> 

<!-- Nav Item - Dashboard --> 
<li class="nav-item active"> 
	<!-- Nav Item - Dashboard --> 
	<li class="nav-item"> 
		<a class="nav-link pb-0" href="<?= base_url('pinjam'); ?>"> 
	<i class="fa fa-fw fa-shopping-cart"></i> 
	<span>Data Peminjaman</span></a> </li> 
	<li class="nav-item"> 
		<a class="nav-link pb-0" href="<?= base_url('pinjam/daftarBooking'); ?>"> 
	<i class="fa fa-fw fa-list"></i> 
	<span>Data Booking</span></a> </li> 
	<hr class="sidebar-divider mt-3">

<div class="sidebar-heading"> Laporan </div>

	<li class="nav-item"> 
		<a class="nav-link pb-0" href="<?= base_url('laporan/laporan_buku'); ?>"> 
	<i class="fa fa-fw fa-address-book"></i> 
	<span>Laporan Data Buku</span></a> </li> 
	<li class="nav-item"> 
		<a class="nav-link pb-0" href="<?= base_url('laporan/laporan_anggota'); ?>"> 
	<i class="fa fa-fw fa-address-book"></i> 
	<span>Laporan Data Anggota</span></a> </li> 
	<li class="nav-item"> 
		<a class="nav-link pb-0" href="<?= base_url('laporan/laporan_pelanggan'); ?>"> 
	<i class="fa fa-fw fa-address-book"></i> 
	<span>Laporan Data pelanggan</span></a> </li> 
	<li class="nav-item"> 
		<a class="nav-link pb-0" href="<?= base_url('laporan/laporan_pinjam'); ?>"> 
			<i class="fa fa-fw fa-address-book"></i> 
			<span>Laporan Peminjaman</span></a> </li> </li>
<!-- Divider --> <hr class="sidebar-divider mt-3"> 
<!-- Sidebar Toggler (Sidebar) --> 
<div class="text-center d-none d-md-inline"> 

</div> </ul><!-- End of Sidebar -- >