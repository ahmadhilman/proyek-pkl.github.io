<!-- Begin Page Content --> 
<div class="container-fluid"> 
<div class="row"> <div class="col-lg-9"> 
<?= form_open_multipart('user/ubahUser'); ?>
<?php foreach($users as $u)?>

<div class="form-group row"> 
    <label for="email" class="col-sm-2 col-form-label">Email</label> <div class="col-sm-10"> 
                            <input type="hidden" name="id" id="id" value="<?php echo $u['id']; ?>">
        <input type="text" class="form-control" id="email" name="email" value="<?= $u['email']; ?>" readonly> </div> 
    </div> 
    <div class="form-group row"> 
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $u['nama']; ?>"> 
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
             <div class="form-group row"> 
        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label> 
        <div class="col-sm-10"> 
           <input type="radio"name="jk" value="laki-laki">laki-laki           <input type="radio"name="jk"value="perempuan">perempuan
            <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
               <div class="form-group row"> 
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $u['tempat_lahir']; ?>"> 
            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
            <div class="form-group row"> 
        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label> 
        <div class="col-sm-10"> 
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $u['tgl_lahir']; ?>"> 
            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
             <div class="form-group row"> 
        <label for="agama" class="col-sm-2 col-form-label">Agama</label> 
        <div class="col-sm-10"> 
            
            <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>  <select name="agama" class="form-control form-control-user">                             <option value="<?= $u['agama']; ?>"><?= $u['agama']; ?></option>                             <?php                             $k= ['Islam','Kristen','Budha','Konghucu','Katolik','Hindu','lainnya'];                             for ($i=0;$i<7;$i++) { ?>                                 <option value="<?= $k[$i];?>"><?= $k[$i];?></option>                             <?php } ?>                         </select> </div> </div> 
               <div class="form-group row"> 
        <label for="telepon" class="col-sm-2 col-form-label">No. telepon</label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $u['telepon']; ?>"> 
            <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
            <div class="form-group row"> 
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $u['alamat']; ?>"> 
            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
            <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                                    
                        <img src="<?= base_url('assets/img/profile/') . $u['image']; ?>" class="img-thumbnail" alt="" style="width:129px;height:129px;"> </div>
                        <label class="bmd-label-floating">Pilih Foto</label> 
                        <input type="file" class="form-control mb-4" type="text" id="image" name="image"> 
                            </div></div> 
<div class="form-group row justify-content-end"> 
<div class="col-sm-10"> 
<button type="submit" class="btn btn-primary">Ubah</button> 
<button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button> </div> </div> </form> </div> </div> </div> <!-- /.container-fluid --> 
</div> 
