 <div class="slider-area mb-5">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?= base_url('assets/')?>img/slide3.jpg">
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
<?php foreach($buku as $b) ?><?php foreach($kategori as $k) ?>
<div class="x_panel" align="center"> 

    <div class="x_content"> 
        <div class="row"> 
            <div class="col-sm-3 col-md-3"> 
                <div class="thumbnail" style="height: auto; position: relative; left: 100%; width: 200%;"> 
                    <img src="<?php echo base_url(); ?>assets/img/upload/<?= $b['image']; ?>" style="max-width:100%; max-height: 100%; height: 150px; width: 120px"> 
                        <div class="caption"> 
                        <h5 style="min-height:40px;" align="center"><?= $b['pengarang']; ?></h5> 
                        <center> 
                            <table class="table table-stripped"> 
                                <tr> 
                                    <th nowrap>Judul Buku: </th> 
                                    <td nowrap><?= $b['judul_buku']; ?></td> 
                                    <td>&nbsp;</td> 
                                    <th>Kategori: </th> 
                                    <td><?= $k['kategori']; ?></td> 
                                </tr> 
                                <tr> 
                                    <th nowrap>Penerbit: </th> 
                                    <td><?= $b['penerbit']; ?></td> 
                                    <td>&nbsp;</td> <th>Dipinjam: </th> 
                                    <td><?= $b['dipinjam']; ?></td> 
                                </tr> 
                                <tr> 
                                    <th nowrap>Tahun Terbit: </th> 
                                    <td><?= substr($b['tahun_terbit'], 0, 4) ?></td> 
                                    <td>&nbsp;</td> 
                                    <th>Dibooking: </th>
                                    <td><?= $b['dibooking']; ?></td> 
                                </tr> 
                                <tr> 
                                    <th>ISBN: </th> 
                                    <td><?= $b['isbn']; ?></td> 
                                    <td>&nbsp;</td> 
                                    <th>Tersedia: </th> 
                                    <td><?= $b['stok']; ?></td> 
                                </tr> 
                            </table> 
                        </center> 
                        <p>
                            <a class="btn btn-info mb-3" href="<?= base_url('booking/tambahBooking/' . $b['id']) ?>"><i class='fas fa-shopping-cart'></i> Booking</a>
                            <span class="btn btn-info mb-3" onclick="window.history.go(-1)"><i class='fas fa-reply'></i> Kembali</span> 
                        </p> 
                        </div> 
                </div> 
            </div> 
        </div> 
    </div> 
</div>
