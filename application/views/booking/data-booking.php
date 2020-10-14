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
<div class="container mb-5">                     
                
<table class="table table-bordered" id="table1" width="100%" cellspacing="0" >
<thead>
                            <tr> 
                                <th>No.</th> 
                                <th>Buku</th> 
                                <th>Penulis</th> 
                                <th>penerbit</th> 
                                <th>Tahun</th> 
                                <th>Pilihan</th> 
                            </tr>
                            </thead>
                            <tbody> 
                            <?php 
                                $no = 1; 
                                foreach ($temp as $t) 
                                { 
                            ?> 
                                    <tr> 
                                        <td>
                                            <?= 
                                                $no; 
                                            ?>
                                        </td> 
                                        <td> 
                                            <img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" class="rounded" alt="No Picture" style="width:60px;height:80px;"> 
                                        </td> 
                                        <td nowrap><?= $t['penulis']; ?></td> 
                                        <td nowrap><?= $t['penerbit']; ?></td> 
                                        <td nowrap><?= substr($t['tahun_terbit'], 0, 4); ?></td> 
                                        <td nowrap> <a href="<?= base_url('booking/hapusbooking/' . $t['id_buku']); ?>" onclick="return_konfirm('Yakin tidak Jadi Booking '.$t['judul_buku'])"><i class="btn"><i class='fas fa-trash'></i></i></a> 
                                        </td> 
                                        </tr> 
                                        <?php 
                                        $no++; 
                                } ?> 
                                </tbody>
                                </table> 
                                <tr> 
            <td colspan="3"> 
        <hr> 
    </td> 
    </tr> 
<tr>
<td colspan="3"> 
    <a class="btn btn-sm btn-outline-primary" href="<?php echo base_url(); ?>">
        <span class="fas fw fa-play"></span> Lanjutkan Booking Buku</a> 
    <a class="btn btn-sm btn-outline-success" href="<?php echo base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>">
        <span class="fas fw fa-stop"></span> Selesaikan Booking</a> 
        </td> 
    </tr> 
                        </div> 
                    
            
