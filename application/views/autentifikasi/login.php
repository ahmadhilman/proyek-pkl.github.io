
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center ">

        <div class="col-lg-7 my-5">

                          
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">          <img src="<?= base_url('assets/img/pb.jpg'); ?>" class="img-fluid mb-2" alt="..." style="width:150px;height:150px;">

                                    <h1 class="h4 text-gray-200 mb-4">Pustaka Booking</h1>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label text-gray-200" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Masuk
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('autentifikasi/registrasi'); ?>">Daftar Admin!</a>
                                </div>
                                 <div class="text-center">
                                    <a class="small" href="<?= base_url('autentifikasi/lupaPassword'); ?>">Lupa Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>