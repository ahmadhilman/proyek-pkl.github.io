<!-- Begin Page Content --> 
<div class="container-fluid"> 
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?= $judul ?></li>
  </ol>
</nav>
<?= $this->session->flashdata('pesan'); ?> 
<div class="row"> 
<div class="col-lg-12"> 
<?php 
if(validation_errors())
{?> 
<div class="alert alert-danger" role="alert"> 
<?= validation_errors();?> </div> 
<?php 
}?> 
<?= $this->session->flashdata('pesan'); ?>
<a href="<?= base_url('laporan/cetak_laporan_buku'); ?>" class="btn btn-primary mb-3">
<i class="fas fa-print"></i> Print</a> 
<a href="<?= base_url('laporan/laporan_buku_pdf'); ?>" class="btn btn-warning mb-3">
<i class="far fa-file-pdf"></i> Download Pdf</a> 
<a href="<?= base_url('laporan/export_excel'); ?>" class="btn btn-success mb-3">
<i class="far fa-file-excel"></i> Export ke Excel</a> 
<div class="table-responsive">
<table class="table table-bordered" id="table1" width="100%" cellspacing="0">
<thead> <tr> <th scope="col">#</th> 
<th scope="col">Judul</th> 
<th scope="col">Pengarang</th> 
<th scope="col">Penerbit</th> 
<th scope="col">Tahun Terbit</th> 
<th scope="col">ISBN</th> 
<th scope="col">Stok</th> 
</tr> 
</thead> 
<tbody> 
<?php $a = 1; 
foreach ($buku as $b) 
{ 
?> 
<tr> 
<th scope="row"><?= $a++; ?></th> 
<td><?= $b['judul_buku']; ?></td> 
<td><?= $b['pengarang']; ?></td> 
<td><?= $b['penerbit']; ?></td> 
<td><?= $b['tahun_terbit']; ?></td> 
<td><?= $b['isbn']; ?></td> 
<td><?= $b['stok']; ?></td> </tr> <?php 
} ?> 
</tbody> </table> </div> </div>
<!-- /.container-fluid --> 
</div> 
<!-- End of Main Content -->