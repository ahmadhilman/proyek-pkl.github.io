<!-- Begin Page Content --> 
<div class="container-fluid"> 
<div class="row"> <div class="col-lg-9"> 
<?= form_open_multipart('buku/Buku'); ?> 
<div class="form-group row"> 
	<label for="ID" class="col-sm-2 col-form-label">Judul Buku</label> <div class="col-sm-10"> 
		<input type="text" class="form-control" id="ID" name="ID" value="<?= $buku['ID']; ?>" readonly> </div> 
	</div> 
	<div class="form-group row"> 
		<label for="pengarang" class="col-sm-2 col-form-label">Nama Lengkap</label> 
		<div class="col-sm-10"> 
			<input type="text" class="form-control" id="isbn" name="isbn" value="<?= $buku['isbn']; ?>"> 
			<?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
			<div class="form-group row"> 
				<div class="col-sm-2">Gambar</div> 
			<div class="col-sm-10"> 
				<div class="row"> 
					<div class="col-sm-3"> 
						<img src="<?= base_url('assets/img/profile/') . $b['image']; ?>" class="img-thumbnail" alt=""> </div> 
						<div class="col-sm-9"> <div class="custom-file"> 
							<input type="file" class="custom-file-input" id="image" name="image"> 
							<label class="custom-file-label" for="image">Pilih file</label>
</div> </div> </div> </div> </div> 
<div class="form-group row justify-content-end"> 
<div class="col-sm-10"> 
<button type="submit" class="btn btn-primary">Ubah</button> 
<button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button> </div> </div> </form> </div> </div> </div> <!-- /.container-fluid --> 
</div> </div>
<!-- End of Main Content -->