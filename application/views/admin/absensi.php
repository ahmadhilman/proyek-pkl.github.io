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
				<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#bukuBaruModal"><i class="fas fa-file-alt"></i> Absensi</a> 
				<table class="table table-hover"> 
					<thead> 
						<tr> 
							<th scope="col">NO</th> 
							<th scope="col">NIP</th> 
							<th scope="col">Kehadiran</th> 
							<th scope="col">Waktu Masuk</th> 
							<th scope="col">Waktu Keluar</th> 
							<th scope="col">Tanggal Absensi</th>  
							<th scope="col">Pilihan</th> 
							</tr> 
							</thead> 
							<tbody> 
								<?php $i = 1; foreach ($absensi as $a) 
								{ 
									?>
<tr> 
	<th scope="row"><?= $i++; ?></th> 
	<td><?= $a['nip']; ?></td> 
	<td><?= $a['kehadiran']; ?></td> 
	<td><?php echo $data['waktu_masuk']; ?></td>
    <td><?php echo $data['waktu_keluar']; ?></td> 
	<td><?= date('D', $a['tgl_absensi']); ?></td>
				<td> <a href="<?= base_url('user/ubahAbsen').$a['id_absensi'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
				<a href="<?= base_url('user/hapusAbsen/').$a['id_absensi'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$a['nama'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a> 
					
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