<!-- Begin Page Content --> 
 <div class="slider-area mb-5">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?= base_url('assets/')?>img/offer-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?= $judul ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-lg-6 justify-content-x"> 
            <?= 
                $this->session->flashdata('pesan'); 
            ?> 


        </div> 
    </div>
              <div class="card mb-5" style="max-width: 540px;"> 
<div class="row no-gutters"> 
<div class="col-md-4"> 
<img src="<?= base_url('assets/img/profile/') . $profile['image']; ?>" class="card-img" alt="..."> </div> 
<div class="col-md-6"> <div class="card-body"> 
<h5 class="card-title"><?= $profile['nama']; ?></h5> 
<p class="card-text"><?= $profile['email']; ?></p> 
<p class="card-text"><?= $profile['jk']; ?></p>
<p class="card-text"><?= $profile['tempat_lahir']; ?>,<?= $profile['tgl_lahir']; ?></p>
<p class="card-text"><?= $profile['agama']; ?></p>
<p class="card-text"><?= $profile['telepon']; ?></p>   
<p class="card-text"><small class="text-muted">Jadi member sejak: 
<br><b><?= date('d F Y', $profile['tanggal_input']); ?></b></small></p> 
</div>
                <div class="btn btn-info ml-3 my-3"> 
                    <a href="<?= base_url('member/ubahprofil'); ?>" class="text text-white">
                        <i class="fas fa-user-edit"></i> Ubah Profil</a> 
                </div> 
            </div> 
        </div> 
    </div> 
    
     </div>

    <!-- /.container-fluid --> 


<!-- End of Main Content -->