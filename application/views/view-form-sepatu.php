<head>
	<style>
	.login {
  padding: 1em;
  margin: 2em auto;
  width: 25em;
  background: ;
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
	<center> 
		<?php echo validation_errors();?>
		<form action="<?= base_url('sepatu/cetak')?>" method="post">
			<pre>










<div class="login">
			<table>
<tr>
	<th colspan="3"> Masukkan Data Pembelian
	</th> 
</tr><tr> 
	<td colspan="3"> 
		<hr> 
	</td> 
</tr>
<tr> 
	<td>Nama Pembeli</td> 
	<td>:</td> 
	<td> 
		<input type="text" name="nama" id="nama" placeholder="Masukkan Nama"> 
	</td> 
</tr> 
<tr> 
	<td>No Handphone</td> 
	<td>:</td> 
	<td> 
		<input type="text" name="hp" id="hp" placeholder="Masukkan No. Handphone"> </td> 
	</tr> 
	<tr> 
		<td>Merk Sepatu</td> 
		<td>:</td> 
		<td> <select name="ms" id="ms"> 
			<option value="">Pilih merek</option> 
			<option value="nike">nike</option> 
			<option value="adidas">adidas</option> 
			<option value="kickers">kicker</option>
			<option value="eiger">eiger</option> 
			<option value="bucherri">bucherri</option>  
			</select> 
	</td> 
</tr>
<tr> 
		<td>Ukuran Sepatu</td> 
		<td>:</td> 
		<td> <select name="ns" id="ns"> 
			<option value="">Pilih No.Sepatu</option> 
			<option value="32">32</option> 
			<option value="33">33</option> 
			<option value="34">34</option>
			<option value="34">34</option> 
			<option value="35">35</option> 
			<option value="36">36</option> 
			<option value="37">37</option> 
			<option value="38">38</option> 
			<option value="39">39</option>
			<option value="40">40</option> 
			<option value="41">41</option>  
			<option value="42">42</option>
			<option value="43">43</option> 
			<option value="44">44</option></select></td></tr>

  <tr> 
	<td>Banyak</td> 
	<td>:</td> 
	<td>
		<input type="text" name="banyak" id="banyak" placeholder="Masukkan Jumlah Barang"> 
	</td> 
</tr>
  <tr> 
	<td>Tanggal Pembelian</td> 
	<td>:</td> 
	<td>
		<input type="date" name="tanggal" id="tanggal"> 
	</td> 
</tr>
<tr> 
	<td colspan="3" align="center"> 
		
		<input type="submit" value="Submit" style="background-color: red ;color: white;" class="kembali">  
	</td> 
</tr>
</pre>
</table>
</form> 
</center> 
</body> 
</div>
</html>