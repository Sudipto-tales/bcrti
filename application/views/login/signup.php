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

                <div class="my-10">
                    <!-- title-->
                    <h4 class="mt-2">Sign Up</h4>
                    <p class="text-muted mb-2">Create your account, it takes less than a minute</p>
                    <?php if(isset($page_error)){?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Error - </strong> <?php echo $page_error ?>!
                    </div>
                    <?php } ?>
                    <!-- form -->
                    <form action="" method="POST" enctype="multipart/form-data" >
                    <input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input class="form-control" type="text" id="full_name" name="full_name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email_id" class="form-label">Email address</label>
                            <input class="form-control" type="email" id="email_id" name="email_id" required placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="tel_no" class="form-label">Phone Number</label>
                            <input class="form-control" type="tel" id="tel_no" name="tel_no" minlength="10" maxlength="10" pattern="[0-9]{10}" required placeholder="Enter your Phone">
                        </div>
                        <div class="mb-3">
                            <label for="pass_id" class="form-label">Password</label>
                            <div class="input-group input-group-merge">
                            <input class="form-control" type="password" required id="pass_id" name="pass_id" placeholder="Enter your password">
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="cnf_pass_id" class="form-label">Confirm Password</label>
                            <div class="input-group input-group-merge">
                            <input class="form-control" type="password" required id="cnf_pass_id" name="cnf_pass_id" placeholder="Enter your password">
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signup" required>
                                <label class="form-check-label" for="checkbox-signup">I accept Terms and Conditions</a></label>
                            </div>
                        </div>
                        <div class="mb-2 d-grid text-center">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-account-circle"></i> Sign Up </button>
                        </div>
                    </form>
                    <!-- end form-->
                </div>

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Already have account? <a href="<?php echo base_url() ?>" class="text-muted ms-1"><b>Log In</b></a></p>
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
    <!-- Vendor js -->
    <?php require("sections/scripts.php"); ?>

</body>
</html>