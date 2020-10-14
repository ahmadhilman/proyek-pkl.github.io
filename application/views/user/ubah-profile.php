<!-- Begin Page Content --> 
<div class="container-fluid"> 
<div class="row"> <div class="col-lg-9"> 
<?= form_open_multipart('user/ubahprofil'); ?>


<div class="form-group row"> 
    <label for="email" class="col-sm-2 col-form-label">Email</label> <div class="col-sm-10"> 
           <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly> </div> 
    </div> 
    <div class="form-group row"> 
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>"> 
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
            <div class="form-group row"> 
        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label> 
        <div class="col-sm-10"> 
           <input type="radio"name="jk"value="laki-laki">laki-laki           <input type="radio"name="jk"value="perempuan">perempuan
            <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
               <div class="form-group row"> 
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $user['tempat_lahir']; ?>"> 
            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
            <div class="form-group row"> 
        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label> 
        <div class="col-sm-10"> 
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>"> 
            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
            <div class="form-group row"> 
        <label for="agama" class="col-sm-2 col-form-label">Agama</label> 
        <div class="col-sm-10"> 
            
            <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>  <select name="agama" class="form-control form-control-user">                             <option value="<?= $user['agama']; ?>"><?= $user['agama']; ?></option>                             <?php                             $k= ['Islam','Kristen','Budha','Konghucu','Katolik','Hindu','lainnya'];                             for ($i=0;$i<7;$i++) { ?>                                 <option value="<?= $k[$i];?>"><?= $k[$i];?></option>                             <?php } ?>                         </select> </div> </div> 
               <div class="form-group row"> 
        <label for="telepon" class="col-sm-2 col-form-label">No. telepon</label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $user['telepon']; ?>"> 
            <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
            <div class="form-group row"> 
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>"> 
            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?> </div> </div> 
            <div class="form-group row"> 
                <div class="col-sm-2">Gambar</div> 
            <div class="col-sm-10"> 
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" alt="" style="width:70px;height:70px;"style="width:70px;height:70px;"> </div> 
                        <div class="col-sm-9"> <div class="custom-file"> 
                            <input type="file" class="custom-file-input" id="image" name="image"> 
                            <label class="custom-file-label" for="image">Pilih file</label>
</div> </div> </div> </div> </div> 
<div class="form-group row justify-content-end"> 
<div class="col-sm-10"> 
<button type="submit" class="btn btn-primary">Ubah</button> 
<button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button> </div> </div> </form> </div> </div> </div> <!-- /.container-fluid --> 
</div> 
