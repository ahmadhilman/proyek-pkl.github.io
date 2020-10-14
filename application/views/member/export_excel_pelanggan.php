<?php 
header("Content-type: application/vnd-ms-excel"); 
header("Content-Disposition: attachment; filename=$title.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
?> 
<style type="text/css"> 
.table-data{ 
width: 100%; 
border-collapse: collapse; 
} 
.table-data tr th,
.table-data tr td{ 
border:1px solid black; 
font-size: 11pt; 
font-family:Verdana; 
padding: 10px 10px 10px 10px; 
} 
.table-data th{ 
background-color:orange; 
} 
h3{ 
font-family:Verdana; 
} 
</style> 
				<h3>
					<center>LAPORAN DATA PELANGGAN</center>
				</h3> 
				<br/> 
<table class="table-data" border="1"> 
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
<td scope="row">
<?= $a++; ?></td> 
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
</tbody></table> 
			</body>
			</html>