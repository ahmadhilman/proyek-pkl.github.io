<!-- Begin Page Content --> <html>
<head>
<title></title>
</head>
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
<?php if(validation_errors())
{
?> 
<div class="alert alert-danger" role="alert"> 
<?= validation_errors();?> 
</div> 
<?php 
}
?>
<?= $this->session->flashdata('pesan'); ?> 
<a href="<?= base_url('laporan/cetak_laporan_anggota'); ?>" class="btn btn-primary mb-3">
<i class="fas fa-print"></i> Print</a> 
<a href="<?= base_url('laporan/laporan_anggota_pdf'); ?>" class="btn btn-warning mb-3">
<i class="far fa-file-pdf"></i> Download Pdf</a> 
<a href="<?= base_url('laporan/export_excel_anggota'); ?>" class="btn btn-success mb-3">
<i class="far fa-file-excel"></i> Export ke Excel</a> 
<div class="table-responsive">
<table class="table table-bordered" id="table1" width="100%" cellspacing="0">
<thead> 
<tr> 
<th scope="col">#</th> 
<th scope="col">Nama Anggota</th>
<th scope="col">Gender</th> 
<th scope="col">Tempat & TTL</th>
<th scope="col">agama</th>
<th scope="col">telepon</th>    
<th scope="col">Alamat</th> 
<th scope="col">Email</th>
<th scope="col">Member Sejak </th> 
 
</tr> 
</thead> 
<tbody> 
<?php $a = 1; 
foreach ($anggota as $u) 
{ 
?> 
<tr> 
<th scope="row">
<?= $a++; ?></th> 
<td><?= $u['nama']; ?></td>
<td><?= $u['jk']; ?></td>  
<td><?= $u['tempat_lahir']; ?>,<?= $u['tgl_lahir']; ?></td>
<td><?= $u['agama']; ?></td> 
<td><?= $u['telepon']; ?></td>
<td><?= $u['alamat']; ?></td> 
<td><?= $u['email']; ?></td>
<td><?= date('d-m-Y',$u['tanggal_input']); ?></td> 
</tr> 
<?php 
} 
?> 
</tbody> 
</table> 
</div> 
</div> 
</div> 
</div>
</div>
</html>
<!-- /.container-fluid --> 

<!-- End of Main Content -->