<?php $this->load->view('frontend/komponen/header'); ?>
<?php $this->load->view('frontend/komponen/navbar'); ?>

<section class="page-wrapper woocommerce single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-5">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="login-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Reset Password</h2>
												<?= $this->session->flashdata('alert'); ?>
                        <p class="woocommerce-register">
                            Sudah Punya Akun ? <a href="<?= base_url()?>login" class="text-decoration-underline">Masuk Disini !</a>
                        </p>
						
                    </div>
                    <form class="woocommerce-form woocommerce-form-login login" action="" method="post">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">Email&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" id="email" autocomplete="username" value="<?= $pengguna['email']?>" disabled>
                        </p>

						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">Password Baru&nbsp;<span class="required">*</span></label>
                            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="password" id="email" autocomplete="username" value="" placeholder="Masukan Password baru">
                        </p>
                       
                       <p class="form-row">
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a414dce984"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="ganti_password" >Reset Password</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop category end-->
<?php $this->load->view('frontend/komponen/footer'); ?>
