<!-- Begin Page Content -->
<div class="container-fluid">

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data Admin</strong> Di Menu Data User Yang Berada Di Dashboard.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?= $judul ?></li>
  </ol>
</nav>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
           
            <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0" id="table1">

            
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">TTl</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col" nowrap>Member Sejak</th>
                        <th scope="col">Image</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($anggota as $a) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= $a['jk']; ?></td>
                            <td><?= $a['tempat_lahir']; ?>,<?= $a['tgl_lahir']; ?></td>
                            <td><?= $a['telepon']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td><?= date('d F Y', $a['tanggal_input']); ?></td>
                            <td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/profile/') . $a['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                                </picture>
                            </td>
                            <td>
                            <a href="<?= base_url('user/ubahUser/').$a['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                            <a href="<?= base_url('user/hapusUser/').$a['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$a['nama'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
</div><!-- End of Main Content -->

<!-- Modal Tambah buku baru-->
