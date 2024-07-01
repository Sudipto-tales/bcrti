<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("sections/header.php"); ?>
    <?php require("sections/css.php"); ?>
</head>

<body class="pb-0">
    <?php require("sections/preloader.php"); ?>

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="card-body d-flex flex-column h-100 gap-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="<?php echo base_url() ?>" class="logo-dark">
                        <span><img src="<?php echo base_url() ?>assets/images/logo-dark.png" alt="dark logo" height="60"></span>
                    </a>
                    <a href="<?php echo base_url() ?>" class="logo-light">
                        <span><img src="<?php echo base_url() ?>assets/images/logo.png" alt="logo" height="60"></span>
                    </a>
                </div>

                <div class="my-auto">
                    <!-- title-->
                    <h4>Reset Password</h4>
                    <p class="text-muted mb-4">Enter your Registered Email address and we'll send you an email with instructions to reset your password.</p>

                    <!-- form -->
                    <form action="#">
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                        </div>
                        <div class="mb-0 text-center d-grid">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-lock-reset"></i> Reset Password </button>
                        </div>
                    </form>
                    <!-- end form-->
                </div>

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Back to <a href="<?php echo base_url()?>" class="text-muted ms-1"><b>Log In</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">Welcome to iBox</h2>
                <p class="lead">by Infovue Solutions</p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->
    <?php require("sections/scripts.php"); ?>

</body>

</html>