<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Faculty - BCRTI</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700"
        rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/signatra-font.css">
    <link rel="icon" type="image/png" href="favicon.html">

    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/rev-settings.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins.css" />

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="<?php echo base_url() ?>raw/assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="<?php echo base_url() ?>raw/assets/css/app-saas.min.css" rel="stylesheet" type="text/css"
        id="app-style" />

    <!-- Icons css -->
    <link href="<?php echo base_url() ?>raw/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Menu bar start -->
    <header class="xs-header header-transparent nav-lights">
        <div class="container">
            <nav class="xs-menus clearfix">
                <div class="nav-header">
                    <a class="nav-brand" href="index.html">
                        <img src="assets/images/crti_logo-removebg.png" alt>
                    </a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper align-to-right">

                    <ul class="nav-menu">
                        <li><a href="<?php echo base_url() ?>home">HOME</a>

                        </li>
                        <li><a href="<?php echo base_url() ?>about">ABOUT</a></li>
                        <li>
                            <a href="#">ACADEMIC</a>
                            <ul class="nav-dropdown xs-icon-menu">
                                <li class="single-menu-item">
                                    <a href="<?php echo base_url() ?>cource"><i class="icon icon-presentation2"></i>Cources</a>
                                </li>
                                <li class="single-menu-item">
                                    <a href="parallax-service.html"><i class="icon icon-presentation"></i> Digital
                                        Laboratory</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">FACULTIES</a>
                            
                        </li>
                        <li><a href="#">BLOG</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>contact_us">CONTACTS</a>
                        </li>
                    </ul>
                    <ul class="xs-menu-tools">

                        <li>
                            <a href="#" class="navSidebar-button"><i class="icon icon-burger-menu"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/2.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="inner-banner">
                        <h2 class="inner-banner-title">Our Members</h2>
                        <ul class="breadcumbs list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li>Faculty</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="xs-section-padding">
        <div class="container">
            <div class="row no-gutters agency-filter-wraper">
                <div class="col-lg-12">
                    <div class="filter-button-wraper">
                        <ul id="filters" class="option-set clearfix main-filter" data-option-key="filter">
                            <li><a href="#" data-option-value="*" class="selected">ALL Members</a></li>
                            <li><a href="#" data-option-value=".item1">BCA</a></li>
                            <li><a href="#" data-option-value=".item2">BBA</a></li>
                            <li><a href="#" data-option-value=".item3">Bio-Tech</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cases-grid">
            
                <?php foreach ($bca as $value): ?>
                    <div class="grid-item item1">
                        <div class="single-cases-card">
                            <div class="card text-center">
                                <div class="card-body">
                                    <?php if(!empty($value['image'])): ?>
                                    <img src="<?php echo base_url() ?><?= $value['image'] ?>"
                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                        <?php elseif(empty($value['image'])):?>
                                            <img src="<?php echo base_url() ?>assets/images/default_logo.jpg"
                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                        <?php endif; ?>
                                    <h4 class="mb-0 mt-2"><?= $value['f_name'] ?> <?= $value['l_name'] ?></h4>
                                    <p class="text-muted font-14"><?= $value['designation'] ?></p>
                                    <div class="text-start mt-3">
                                        <h4 class="font-13 text-uppercase">Bio :</h4>
                                        <p class="text-muted font-13 mb-3">
                                            <?= $value['bio'] ?>
                                        </p>
                                        <p class="text-muted mb-2 font-13"><strong>Qualification :</strong> <span
                                                class="ms-2 "><?= $value['qualification'] ?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                                class="ms-2 "><?= $value['email_id'] ?></span></p>
                                    </div>

                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-primary text-primary"><i
                                                    class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-danger text-danger"><i
                                                    class="mdi mdi-instagram"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                                    class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-secondary text-secondary"><i
                                                    class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div>
                    </div>
                <?php endforeach; ?>
                
             
                <?php foreach ($bba as $value): ?>
                    <div class="grid-item item2">
                        <div class="single-cases-card">
                            <div class="card text-center">
                                <div class="card-body">
                                <?php if(!empty($value['image'])): ?>
                                    <img src="<?php echo base_url() ?><?= $value['image'] ?>"
                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                        <?php elseif(empty($value['image'])):?>
                                            <img src="<?php echo base_url() ?>assets/images/default_logo.jpg"
                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                        <?php endif; ?>
                                    <h4 class="mb-0 mt-2"><?= $value['f_name'] ?> <?= $value['l_name'] ?></h4>
                                    <p class="text-muted font-14"><?= $value['designation'] ?></p>
                                    <div class="text-start mt-3">
                                        <h4 class="font-13 text-uppercase">Bio :</h4>
                                        <p class="text-muted font-13 mb-3">
                                            <?= $value['bio'] ?>
                                        </p>
                                        <p class="text-muted mb-2 font-13"><strong>Qualification :</strong> <span
                                                class="ms-2 "><?= $value['qualification'] ?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                                class="ms-2 "><?= $value['email_id'] ?></span></p>
                                    </div>

                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-primary text-primary"><i
                                                    class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-danger text-danger"><i
                                                    class="mdi mdi-instagram"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                                    class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-secondary text-secondary"><i
                                                    class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div>
                    </div>
                <?php endforeach; ?>
               
                <?php foreach ($bt as $value): ?>
                    <div class="grid-item item3">
                        <div class="single-cases-card">
                            <div class="card text-center">
                                <div class="card-body">
                                <?php if(!empty($value['image'])): ?>
                                    <img src="<?php echo base_url() ?><?= $value['image'] ?>"
                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                        <?php elseif(empty($value['image'])):?>
                                            <img src="<?php echo base_url() ?>assets/images/default_logo.jpg"
                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                        <?php endif; ?>
                                    <h4 class="mb-0 mt-2"><?= $value['f_name'] ?> <?= $value['l_name'] ?></h4>
                                    <p class="text-muted font-14"><?= $value['designation'] ?></p>
                                    <div class="text-start mt-3">
                                        <h4 class="font-13 text-uppercase">Bio :</h4>
                                        <p class="text-muted font-13 mb-3">
                                            <?= $value['bio'] ?>
                                        </p>
                                        <p class="text-muted mb-2 font-13"><strong>Qualification :</strong> <span
                                                class="ms-2 "><?= $value['qualification'] ?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                                class="ms-2 "><?= $value['email_id'] ?></span></p>
                                    </div>

                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-primary text-primary"><i
                                                    class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-danger text-danger"><i
                                                    class="mdi mdi-instagram"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                                    class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-secondary text-secondary"><i
                                                    class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div>
                    </div>
                <?php endforeach; ?>
                

            </div>
        </div>
    </section>




    <?php $this->load->view("panel_base/sections/footer.php"); ?>

    <?php $this->load->view("panel_base/sections/scripts.php"); ?>

</html>