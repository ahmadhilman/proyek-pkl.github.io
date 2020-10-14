<!-- Begin Page Content --> 
<div class="container-fluid"> 
<div class="row"> 
<div class="col-lg-9"> 
<?= form_open_multipart('member/ubahprofil'); ?> 
<div class="form-group row"> 
<label for="email" class="col-sm-2 col-form-label">Email</label> 
<div class="col-sm-10"> 
<input type="text" class="form-control" id="email" name="email" value="<?= $profile['email']; ?>" readonly> </div> </div> 
<div class="form-group row"> 
<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label> 
<div class="col-sm-10"> 
<input type="text" class="form-control" id="nama" name="nama" value="<?= $profile['nama']; ?>"> 
<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div>
<div class="form-group row"> 
<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label> 
<div class="col-sm-10"> 
<input type="text" class="form-control" id="jk" name="jk" value="<?= $profile['jk']; ?>"> 
<?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div>
<div class="form-group row"> 
<label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label> 
<div class="col-sm-10"> 
<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $profile['tempat_lahir']; ?>"> 
<?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div>
<div class="form-group row"> 
<label for="tgl_lahir" class="col-sm-2 col-form-label">Tangal Lahir</label> 
<div class="col-sm-10"> 
<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $profile['tgl_lahir']; ?>"> 
<?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div>
<div class="form-group row"> 
<label for="agama" class="col-sm-2 col-form-label">Agama</label> 
<div class="col-sm-10"> 
<input type="text" class="form-control" id="agama" name="agama" value="<?= $profile['agama']; ?>"> 
<?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div>
<div class="form-group row"> 
<label for="telepon" class="col-sm-2 col-form-label">No Handphone</label> 
<div class="col-sm-10"> 
<input type="text" class="form-control" id="telepon" name="telepon" value="<?= $profile['telepon']; ?>"> 
<?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div>

<div class="form-group row"> 
<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
<div class="col-sm-10"> 
<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $profile['alamat']; ?>"> 
<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
<div class="form-group row">
<div class="col-sm-2">Gambar</div> 
<div class="col-sm-10"> 
<div class="row"> 
<div class="col-sm-3"> 
<img src="<?= base_url('assets/img/profile/') . $profile
['image']; ?>" class="img-thumbnail" alt=""> </div> 
<div class="col-sm-9"> 
<div class="custom-file"> 
<input type="file" class="custom-file-input" id="image" name="image"> 
<label class="custom-file-label" for="image">Pilih file</label> </div> </div> </div> </div> </div> 
<div class="form-group row justify-content-end"> 
<div class="col-sm-10"> 
<button type="submit" class="btn btn-primary">Ubah</button> 
<button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button> 
</div> 
</div> 
</form> 
</div> 
</div> 
</div> 
<!-- /.container-fluid --> 
</div> 
<!-- End of Main Content -->