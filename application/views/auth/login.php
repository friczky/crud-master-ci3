<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from colorlib.com/etc/lf/Login_v9/ by HTTrack Website Copier/3.x
    [XR&CO'2014], Tue, 15 Nov 2022 14:28:37 GMT -->
    <head>
        <title>Login Administrator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link
            rel="icon"
            type="image/png"
            href="<?= base_url()?>assets/login/images/icons/favicon.ico"/>

        <link
            rel="stylesheet"
            type="text/css"
            href="<?= base_url()?>assets/login/vendor/bootstrap/css/bootstrap.min.css">

        <link
            rel="stylesheet"
            type="text/css"
            href="<?= base_url()?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link
            rel="stylesheet"
            type="text/css"
            href="<?= base_url()?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">

        <link
            rel="stylesheet"
            type="text/css"
            href="<?= base_url()?>assets/login/vendor/animate/animate.css">

        <link
            rel="stylesheet"
            type="text/css"
            href="<?= base_url()?>assets/login/vendor/css-hamburgers/hamburgers.min.css">

        <link
            rel="stylesheet"
            type="text/css"
            href="<?= base_url()?>assets/login/vendor/animsition/css/animsition.min.css">

        <link
            rel="stylesheet"
            type="text/css"
            href="<?= base_url()?>assets/login/vendor/select2/select2.min.css">

        <link
            rel="stylesheet"
            type="text/css"
            href="<?= base_url()?>assets/login/vendor/daterangepicker/daterangepicker.css">

        <link
            rel="stylesheet"
            type="text/css"
            href="<?= base_url()?>assets/login/css/util.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="<?= base_url()?>assets/login/css/main.css">

        <meta name="robots" content="noindex, follow">

    </head>
    <body>
        <div
            class="container-login100"
            style="background-image: url('<?= base_url()?>assets/login/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
                <form class="login100-form validate-form" action="<?= base_url('backend/auth/login')?>"
                        method="post">
                    <span class="login100-form-title p-b-37">
                        Sign In
						<?= $this->session->flashdata('alert'); ?>
                    </span>
                    <div
                        class="wrap-input100 validate-input m-b-20"
                        data-validate="Enter username ">
                        <input
                            class="input100"
                            type="text"
                            name="username"
                            placeholder="username">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="password">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign In
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
        <div id="dropDownSelect1"></div>

        <script src="<?= base_url()?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>

        <script
            src="<?= base_url()?>assets/login/vendor/animsition/js/animsition.min.js"></script>

        <script src="<?= base_url()?>assets/login/vendor/bootstrap/js/popper.js"></script>
        <script src="<?= base_url()?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="<?= base_url()?>assets/login/vendor/select2/select2.min.js"></script>

        <script src="<?= base_url()?>assets/login/vendor/daterangepicker/moment.min.js"></script>
        <script
            src="<?= base_url()?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>

        <script
            src="<?= base_url()?>assets/login/vendor/countdowntime/countdowntime.js"></script>

        <script src="<?= base_url()?>assets/login/js/main.js"></script>

        <script
            async="async"
            src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
        <script
            defer="defer"
            src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
            integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
            data-cf-beacon='{"rayId":"76a8aca0590587fb","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
            crossorigin="anonymous"></script>
    </body>

    <!-- Mirrored from colorlib.com/etc/lf/Login_v9/ by HTTrack Website Copier/3.x
    [XR&CO'2014], Tue, 15 Nov 2022 14:28:59 GMT -->
</html>
