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
			<?php if(validation_errors()){?> 
				<div class="alert alert-danger" role="alert"> 
					<?= validation_errors();?> 
					</div> 
				<?php }?> 
				
				<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#AnggotaBaruModal"><i class="fas fa-file-alt"></i> Anggota Baru</a> 
				<div class="table-responsive">
				<table class="table table-hover"><table class="table table-bordered table-striped data-table" id="table1"> 
					<thead> 
						<tr> 
							<th scope="col">NO</th> 
							<th scope="col">Nama Anggota</th> 
							<th scope="col">Email</th> 
							                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">TTl</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Alamat</th>

							<th scope="col">Status</th> 
														<th scope="col">Member Sejak</th> 
							<th scope="col">Gambar</th> 
                            <th scope="col">Aktivasi</th> 
							<th scope="col">pilihan</th> 

							
							</tr> 
							</thead> 
							<tbody> 
								<?php $i = 1; foreach ($role as $a) 
								{ 
									?>
<tr> 
	<th scope="row"><?= $i++; ?></th> 
	<td><?= $a['nama']; ?></td> 
	<td><?= $a['email']; ?></td>
	<td><?= $a['jk']; ?></td>
                            <td><?= $a['tempat_lahir']; ?>,<?= $a['tgl_lahir']; ?></td>
                            <td><?= $a['telepon']; ?></td>
                            <td><?= $a['alamat']; ?></td> 
	<td><?= $a['role']; ?></td> 

	<td><?= date('Y', $a['tanggal_input']); ?></td>
	<td> 
		<picture> 
			<source srcset="" type="image/svg+xml"> 
				<img src="<?= base_url('assets/img/profile/') . $a['image'];?>" class="img-fluid img-thumbnail" alt="..."style="width:60px;height:80px;"> </picture></td> 
				<td><?php 
        if ($a['is_active'] > 0) 
        { 
            echo "<i class='btn btn-gray-500 mb-3'> <i class='fas fa-user'></i> Aktif&nbsp;&nbsp </i>"; 
        } 
            else 
            { 
                echo "<a class='btn btn-info mb-3'href='" . base_url('user/aktivasi/' . $a['id']) . "'>
                Aktifkan</a>"; 
            
            } 
    ?> </td>
				 <td>
                            <a href="<?= base_url('user/ubahUser/').$a['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                            <a href="<?= base_url('user/hapusUser/').$a['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$a['nama'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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
<div class="modal fade" id="AnggotaBaruModal" tabindex="-1" role="dialog" aria-labelledby="AnggotaBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AnggotaBaruModalLabel">Tambah Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user/data_user'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <select name="role_id" class="form-control form-control-user">
                            <option value="">Pilih Status</option>
                            <?php
                            foreach ($status as $k) { ?>
                                <option value="<?= $k['id'];?>"><?= $k['role'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="textarea" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                    </div>
                     <div class="form-group"> 
<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email"> </div> 
<div class="form-group"> 
<input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password"> </div> 
<div class="form-group"> <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password"> </div>
                </div>
                

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>