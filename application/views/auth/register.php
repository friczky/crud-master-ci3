
<?php $this->load->view('frontend/komponen/header'); ?>
<?php $this->load->view('frontend/komponen/navbar'); ?>

<section class="woocommerce single page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-xl-7">
                
                <div class="signup-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Mendaftar</h2>
                        <?= $this->session->flashdata('alert'); ?>
                        <p class="woocommerce-register">
                           	Sudah Punya Akun? <a href="<?= base_url('login')?>" class="text-decoration-underline">Masuk</a>
                        </p>
                    </div>

                    <form class="woocommerce-form woocommerce-form-login login" action="<?= base_url('backend/auth/store')?>" method="post">

                        <div class="row">
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Nama Lengkap&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="namaewa" placeholder="Masukan Nama Lengkap">
                                </p>
                            </div>
                           
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>User Name&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="uname"  value="" placeholder="Masukan Username">
                                </p>
                            </div>

                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Email&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="mael" value="" placeholder="Masukan Email">
                                </p>
                            </div>

                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Password&nbsp;<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="psswd" value="" placeholder="Masukan Password">
                                </p>
                            </div>

                            <div class="col-xl-12">
                                <div class="d-flex align-items-center justify-content-between py-2">
	
                                    <p class="woocommerce-LostPassword lost_password">
                                        <a href="<?= base_url('backend/auth/lupa_password')?>">Lupa password?</a>
                                    </p>
                               </div>
                            </div>
                        </div>
                      
                        <p class="woocommerce-FormRow form-row">
                            <button type="submit" class="woocommerce-button button" name="daftar">Daftar</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop register end-->
<!--shop category end-->
<?php $this->load->view('frontend/komponen/footer'); ?>
