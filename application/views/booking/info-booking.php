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
    <center> 
        <table> 
            <?php 
                foreach ($useraktif as $u) 
                { 
                    ?> 
                    <tr> 
                        <td nowrap>Terima Kasih <b><?= $u->nama; ?></b> </td> 
                    </tr> 
                    <tr> 
                        <td>Buku Yang ingin Anda Pinjam Adalah Sebagai berikut:</td> 
                    </tr> 
                    <?php 
                } ?> 
                <tr> 
                    <td> 
                    
                    <hr>
<table class="table table-bordered" id="table1" width="100%" cellspacing="0">
<thead>
                        <tr> 
                            <th>No.</th> 
                            <th>Buku</th> 
                            <th>Penulis</th> 
                            <th>Penerbit</th> 
                            <th>Tahun</th> 
                        </tr>
                        </thead>
                        <tbody> 
                        <?php $no = 1; 
                            foreach ($items as $i) 
                            { 
                        ?> 
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td> 
                            <td> 
                                <img src="<?= base_url('assets/img/upload/' . $i['image']); ?>" class="rounded" alt="No Picture" style="width:60px;height:80px;"> 
                            </td> 

                            <td nowrap>
                                <?= $i['pengarang']; ?>
                            </td> 
                            
                            <td nowrap>
                            <?= $i['penerbit']; ?>
                            </td> 
                            
                            <td nowrap>
                                <?= $i['tahun_terbit']; ?>
                            </td> 
                        </tr> 
                        <?php $no++; 
                    }   ?> 
                    </tbody>
                </table> 
            </div> 
        </td> 
    </tr> 
    <tr> 
        <td> 
            <hr> 
        </td> 
    </tr> 
    <tr> 
        <td> 
            <a class="btn btn-sm btn-outline-danger" onclick="information('Waktu Pengambilan Buku 1x24 jam dari Booking!!!')" href="<?php echo base_url() . 'booking/exportToPdf/' . $this->session->userdata('id_user'); ?>">
            
            <span class="far fa-lg fa-fw fa-file-pdf"></span> Pdf</a> 
        </td> 
    </tr> 
</table> 
</center> 
</div></div>