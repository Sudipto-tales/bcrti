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
                    <h4 class="mt-0">Sign In</h4>
                    <p class="text-muted mb-2">Enter your email address and password to access account.</p>
                    <?php if(isset($page_error)){?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Error - </strong> <?php echo $page_error ?>!
                    </div>
                    <?php } ?>
                    <?php if(isset($_GET["err"]) && $_GET["err"] == "registered_successfully"){?>
                    <div class="alert alert-success" role="alert">
                        <strong>Success - </strong> Your Account Successfully Created!
                    </div>
                    <?php } ?>
                    <!-- form -->
                    <form action="" method="POST" enctype="multipart/form-data" >
                    <input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                        <div class="mb-3">
                            <label for="email_id" class="form-label">Email address</label>
                            <input class="form-control" type="email" id="email_id" name="email_id" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <a href="<?php echo base_url()?>recover" class="text-muted float-end"><small>Forgot your password?</small></a>
                            <label for="pass_id" class="form-label">Password</label>
                            <div class="input-group input-group-merge">
                            <input class="form-control" type="password" name="pass_id" id="pass_id" placeholder="Enter your password" required>
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                            </div>
                        </div>
                        <div class="d-grid mb-2 text-center">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                        </div>
                        <!-- social-->
                    </form>
                    <!-- end form-->
                </div>

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Don't have an account? <a href="<?php echo base_url()?>signup" class="text-muted ms-1"><b>Sign Up</b></a></p>
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