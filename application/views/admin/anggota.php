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
				<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#bukuBaruModal"><i class="fas fa-file-alt"></i> Tambah Admin</a>
				<table class="table mt-3"><table class="table table-bordered table-striped data-table">
					<thead> 
						<tr> 
					<th>NO</th> 
					<th>Nama Anggota</th> 
					<th>Email</th> 
					<th>Role ID</th> 
					<th>Aktif</th> 
					<th>Member Sejak</th>
                    <th>Gambar</th>
                    <th>Pilihan</th> 
				</tr> 
			</thead> 
			<tbody> 
				<?php $i = 1;  { ?><tr> <td><?= $i++; ?></td> 
<td><?= $user['nama']; ?> </td> 
<td><?= $user['email']; ?></td> 
<td><?= $user['role_id']; ?></td> 
<td><?= $user['is_active']; ?></td> 
<td><?= date('Y', $user['tanggal_input']); ?></td>
<td> <div class="col-md-2"> 
		<picture> 
			<source srcset="" type="image/svg+xml"> 
				<img src="<?= base_url('assets/img/profile/') . $user['image'];?>" class="img-fluid img-thumbnail" alt="..."> </picture></div></td>
<td> <a href="<?= base_url('admin/ubahProfil').$user['ID'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
				<a href="<?= base_url('admin/hapususer/').$user['ID'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$user['nama'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a> 
					
				</td> 
</tr> <?php } ?> 
</tbody> 
</table> 
</div> 
</div> <!-- end of row table--> </div> <!-- /.container-fluid --> </div> <!-- End of Main Content -->
<div class="modal fade" id="bukuBaruModal" tabindex="-1" role="dialog" aria-labelledby="bukuBaruModalLabel" aria-hidden="true"> 
	<div class="modal-dialog" role="document"> 
		<div class="modal-content"> <div class="modal-header"> 
			<h5 class="modal-title" id="bukuBaruModalLabel">Tambah Admin</h5> 
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
				<span aria-hidden="true">&times;</span> 
			</button> 
		</div> 
		<form action="<?= base_url('admin/anggota'); ?>" method="post" enctype="multipart/form-data"> 
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
