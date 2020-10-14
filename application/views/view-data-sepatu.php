<html> 
<head> 
	<title>Transaksi Pembelian Sepatu</title> 
</head> 
<style>
	.login {
  padding: 1em;
  margin: 2em auto;
  width: 25em;
  background: silver;
  border-radius: 50px;
}
    .kembali {
  padding: 1em;
  margin: 2em auto;
  width: 8em;
  background: red;
  border-radius: 10px;
</style>
<body bgcolor="brown" text="darkred">
	<?php
$nama=$_POST['nama'];
$hp=$_POST['hp'];
$ms=$_POST['ms'];
$ns=$_POST['ns'];
$tanggal=$_POST['tanggal'];
$banyak=$_POST['banyak'];
if($ms=="nike")
{
	$harga=375000;
}
elseif($ms=="adidas")
{
	$harga=300000;
}
elseif($ms=="kickers")
{
	$harga=250000;
}
elseif($ms=="eiger")
{
	$harga=275000;
}
elseif($ms=="bucherri")
{
	$harga=400000;
}
else
{
	$harga=0;
}
$total=$harga*$banyak;
?>
	<center>  
		<form action="sepatu/cetak" method="post"> 
	 
			<pre>









<div class="login">
		<table>
			<tr> 
				<th colspan="3"> Transaksi Pembelian Sepatu </th> 
			</tr> 
			<tr> 
				<td colspan="3"> 
					<hr> 
				</td> 
			</tr> 
			<td>No.transaksi</td> <td>:</td> <td> <?= $tanggal,'.',$ns,'.',$banyak; ?> 
			</td> 
		</tr> 
			<tr> 
		<td>Nama Pembeli</td> <td>:</td> <td> <?= $nama; ?> 
			</td> 
		</tr> 
		<tr>
			<td>No Handphone</td> 
			<td>:</td> 
			<td> <?= $hp; ?> 
		</td> 
	</tr> 
	<tr> 
		<td>Merk Sepatu</td> 
		<td>:</td> 
		<td> <?= $ms; ?> 
	</td> 
</tr> 
<tr> 
		<td>Ukuran Sepatu</td> 
		<td>:</td> 
		<td> <?= $ns; ?> 
	</td> 
</tr> 
<tr> 
		<td>Banyak</td> 
		<td>:</td> 
		<td> <?= $banyak; ?> 
	</td> 
</tr>
		<tr><td>Harga</td> <td>:</td> <td> <?= $harga; ?> 
			</td> 
		</tr> 
		<tr> 
	<td colspan="3"> 
		<hr> 
	</td> 
</tr>
	<tr><td>Total Harga</td> <td>:</td> <td> <?= $total; ?> 
			</td> 
		</tr> 
		<tr>
	<td colspan="3" align="center">
<div class="kembali"><a href="<?= base_url('sepatu'); 
?>">                     <-- Kembali</a></div></td></tr>
</td> 
</tr> 
</table> 
</div>
</pre>
</center> 
</body> 
</html>

