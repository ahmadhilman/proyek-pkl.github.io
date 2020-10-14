<!-- Begin Page Content --> 
<div class="container-fluid"> 
	<?= $this->session->flashdata('pesan'); ?> 
	<div class="row"> 
		<div class="col-lg-12"> 
			<?php if(validation_errors()){?> 
				<div class="alert alert-danger" role="alert"> 
					<?= validation_errors();?> 
					</div> 
				<?php }?> 
				<?= $this->session->flashdata('pesan'); ?> 
				<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#bukuBaruModal"><i class="fas fa-file-alt"></i> Anggota Baru</a> 
				<table class="table table-hover"> <table class="table table-bordered table-striped data-table">
					<thead> 
						<tr> 
							<th scope="col">NO</th> 
							<th scope="col">Nama Anggota</th> 
							<th scope="col">Email</th> 
							<th scope="col">Role ID</th> 
							<th scope="col">Aktif</th> 
							<th scope="col">Member Sejak</th> 
							<th scope="col">Gambar</th> 
							<th scope="col">Pilihan</th> 
							</tr> 
							</thead> 
							<tbody> 
								<?php $i = 1; foreach ($anggota as $a) 
								{ 
									?>
<tr> 
	<th scope="row"><?= $i++; ?></th> 
	<td><?= $a['nama']; ?></td> 
	<td><?= $a['email']; ?></td> 
	<td><?= $a['role_id']; ?></td> 
	<td><?= $a['is_active']; ?></td> 
	<td><?= date('Y', $a['tanggal_input']); ?></td>
	<td> <div class="col-md-2">
		<picture> 
			<source srcset="" type="image/svg+xml"> 
				<img src="<?= base_url('assets/img/profile/') . $a['image'];?>" class="img-fluid img-thumbnail" alt="..."> </picture></div></td> 
				<td> <a href="<?= base_url('admin/ubahProfil'.$a['ID']);?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
				<a href="<?= base_url('admin/hapusdata/').$a['ID'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$a['nama'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a> 
					
				</td> 
			</tr> 
			<?php } 
			?> 
		</tbody> 
	</table> 
</div> 
</div> 
</div> 
<!-- /.container-fluid --> 
</div> 
<div class="modal fade" id="bukuBaruModal" tabindex="-1" role="dialog" aria-labelledby="bukuBaruModalLabel" aria-hidden="true"> 
	<div class="modal-dialog" role="document"> 
		<div class="modal-content"> <div class="modal-header"> 
			<h5 class="modal-title" id="bukuBaruModalLabel">Tambah Admin</h5> 
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
				<span aria-hidden="true">&times;</span> 
			</button> 
		</div> 
		<form action="<?= base_url('admin/data_user'); ?>" method="post" enctype="multipart/form-data"> 
			<div class="modal-body"> 
				<div class="form-group"> 
					<input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama Lengkap"> 
				</div> 
                <div class="form-group"> 
						<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email"> </div> 
						<div class="form-group"> 
							<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan password"> </div>
				<div class="form-group"> 
					<select name="role_id" class="form-control form-control-user"> 
						<option value="">Pilih Role</option> 
						<?php foreach ($role as $u) { 
							?> 
							<option value="<?= $u['ID'];?>"><?= $u['nama_role'];?></option> <?php } ?> 
						</select> 
					</div> 
					 
						 
<div class="form-group"> 
<input type="file" class="form-control form-control-user" id="image" name="image"> </div> </div> 
<div class="modal-footer"> 
<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button> 
<button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button> 
</div> 
</form>
</div>
</div>
</div>