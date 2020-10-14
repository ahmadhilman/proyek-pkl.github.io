
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>assets/img/slide1.jpg ?>" class="d-block w-100" alt="..." style="max-width:100%; max-height: 100%; height: 500px; width: 180px">
    </div>
    <div class="carousel-item">
    <img src="<?php echo base_url(); ?>assets/img/slide2.jpg ?>" class="d-block w-100" alt="..." style="max-width:100%; max-height: 100%; height: 500px; width: 180px">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>assets/img/slide3.jpg ?>" class="d-block w-100" alt="..." style="max-width:100%; max-height: 100%; height: 500px; width: 180px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?= 
    $this->session->flashdata('pesan'); 
?> 
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Waktu Pengambilan Buku 1x24 jam dari Booking!!!</strong> Segera Booking.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<section class="latest-product-area padding-bottom">
            <div class="container">
                <hr>
                <div class="row product-btn d-flex justify-content-end align-items-end">
                    <!-- Section Tittle -->
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="section-tittle mb-30">
                            <h4>Daftar Buku</h4>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7">
                        <div class="properties__button f-right">
                            <!--Nav Button  -->
                           
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>


        
                                         <div class="tab-content" id="nav-tabContent">
                                            
                    <!-- card one -->              
                        <div class="row">
<?php foreach ($buku as $buku) { ?> 
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-5">
                                    <div class="tab-pane fade show active" id="<?= $buku->id_kategori ?>" role="tabpanel" aria-labelledby="<?= $buku->id_kategori ?>-tab">
                                    <div class="product-img">
                                        <img src="<?php echo base_url(); ?>assets/img/upload/<?= $buku->image; ?>" style="max-width:100%; max-height: 100%; 
                            height: 200px; 
                            width: 180px">
                                        
                                    </div>
                                    <div class="product-caption">
                                   <h4><a href="#"><?= $buku->pengarang ?></a></h4>
                                        <div class="price">
                                            <ul>
                                                <li><?= $buku->penerbit ?></li>
                                                
                                            </ul>
                                        </div>
                                        <?= substr($buku->tahun_terbit, 0, 4) ?>
                                    </div>
                                    <p> 
                                        <?php 
                                        if ($buku->stok < 1) 
                                            { 
                                                echo "<i class=' btn btn-info mb-3'><i class='fas fa-shopping-cart'></i> Booking&nbsp;&nbsp 0</i>"; 
                                            } 
                                            else 
                                                { 
                                                    echo "<a class=' btn btn-info mb-3' href='" . base_url('booking/tambahBooking/' . $buku->id) . "'><i class='fas fa-shopping-cart'></i> Booking</a>"; 
                                                } ?> 
                                                <a class="btn btn-warning mb-3" href="<?= base_url('home/detailBuku/' . $buku->id); ?>"><i class='fas fa-search'></i> Detail</a></p>
                                </div>
</div>
                            </div>
                            <?php  } ?> 
</div>
</div>

                <!-- Nav Card -->
                </section>
