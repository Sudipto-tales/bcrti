<!-- Home Page Design -->
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - BCRTI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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

    <link rel="stylesheet"
        href="<?php echo base_url() ?>table_asset/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet"
        href="<?php echo base_url() ?>table_asset/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" />
    <link rel="stylesheet"
        href="<?php echo base_url() ?>table_asset/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />

</head>

<body>

    <!-- Menu bar start -->
    <?php $this->load->view("panel_base/sections/header.php"); ?>


    <section class="xs-section-padding">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="agency-section-title text-center">
                    <h4 class="main-title"><em>Download</em></h4>
                    <span class="watermark-title" data-scrollax="properties: { translateY: '-250px' }">Documents</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#admit-1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Admit Card</span>
                                    </a>
                                </li>

                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#result-1" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Result</span>
                                    </a>
                                </li>

                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#marksheet-1" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Mark sheet</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab Pen -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="admit-1" role="tabpane1">
                                    <h4 class="card-title mb-4">Admit Card Download</h4>

                                    <?php echo form_open_multipart('documents/admit'); ?>

                                    <?php echo isset($error) ? $error : ''; ?>
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full name</label>
                                        <input type="text" class="form-control" id="name" name="full_name"
                                            value="<?php echo set_value('name'); ?>">
                                        <?php echo form_error('name'); ?>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="fathername" class="form-label">Father's name</label>
                                                <input type="text" class="form-control" id="fathername"
                                                    name="father_name" value="<?php echo set_value('fathername'); ?>">
                                                <?php echo form_error('fathername'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="dob" class="form-label">Date of Birth</label>
                                                <input class="form-control" type="date" id="dob" name="dob"
                                                    value="<?php echo set_value('dob'); ?>">
                                                <?php echo form_error('dob'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Stream</label>
                                                <select name="stream" id="stream" class="form-select form-control"
                                                    required>

                                                    <option value="bca" <?php echo set_select('stream', 'bca'); ?>>BCA
                                                    </option>
                                                    <option value="bba" <?php echo set_select('stream', 'bba'); ?>>BBA
                                                    </option>
                                                    <option value="bio_tech" <?php echo set_select('stream', 'bio_tech'); ?>>Bio-Tech</option>
                                                </select>
                                                <?php echo form_error('stream'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Semester</label>
                                                <select name="sem" class="form-select form-control" required>
                                                    <option value="">Select Semester</option>
                                                    <option value="1" <?php echo set_select('sem', '1'); ?>>1</option>
                                                    <option value="2" <?php echo set_select('sem', '2'); ?>>2</option>
                                                    <option value="3" <?php echo set_select('sem', '3'); ?>>3</option>
                                                    <option value="4" <?php echo set_select('sem', '4'); ?>>4</option>
                                                    <option value="5" <?php echo set_select('sem', '5'); ?>>5</option>
                                                </select>
                                                <?php echo form_error('sem'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary w-md"><i class="fas fa-search"></i>
                                            Search</button>
                                    </div>
                                    <?php echo form_close(); ?>

                                </div>


                                <div class="tab-pane" id="result-1" role="tabpane1">
                                    <h4 class="card-title mb-4">Result Download</h4>

                                    <?php echo form_open_multipart('documents/result'); ?>

                                    <?php echo isset($error) ? $error : ''; ?>
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full name</label>
                                        <input type="text" class="form-control" id="name" name="full_name"
                                            value="<?php echo set_value('name'); ?>">
                                        <?php echo form_error('name'); ?>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="roll" class="form-label">Roll No.</label>
                                                <input type="text" class="form-control" id="roll" name="roll"
                                                    value="<?php echo set_value('roll'); ?>">
                                                <?php echo form_error('roll'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="dob" class="form-label">Date of Birth</label>
                                                <input class="form-control" type="date" id="dob" name="dob"
                                                    value="<?php echo set_value('dob'); ?>">
                                                <?php echo form_error('dob'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Stream</label>
                                                <select name="stream" id="stream" class="form-select form-control"
                                                    required>

                                                    <option value="bca" <?php echo set_select('stream', 'bca'); ?>>BCA
                                                    </option>
                                                    <option value="bba" <?php echo set_select('stream', 'bba'); ?>>BBA
                                                    </option>
                                                    <option value="bio_tech" <?php echo set_select('stream', 'bio_tech'); ?>>Bio-Tech</option>
                                                </select>
                                                <?php echo form_error('stream'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Semester</label>
                                                <select name="sem" class="form-select form-control" required>
                                                    <option value="">Select Semester</option>
                                                    <option value="1" <?php echo set_select('sem', '1'); ?>>1</option>
                                                    <option value="2" <?php echo set_select('sem', '2'); ?>>2</option>
                                                    <option value="3" <?php echo set_select('sem', '3'); ?>>3</option>
                                                    <option value="4" <?php echo set_select('sem', '4'); ?>>4</option>
                                                    <option value="5" <?php echo set_select('sem', '5'); ?>>5</option>
                                                </select>
                                                <?php echo form_error('sem'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary w-md"><i class="fas fa-search"></i>
                                            Search</button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>

                                <div class="tab-pane" id="marksheet-1" role="tabpane1">
                                    <h4 class="card-title mb-4">Mark Sheet Download</h4>

                                    <?php echo form_open_multipart('documents/marksheet'); ?>

                                    <?php echo isset($error) ? $error : ''; ?>
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full name</label>
                                        <input type="text" class="form-control" id="name" name="full_name"
                                            value="<?php echo set_value('name'); ?>" required>
                                        <?php echo form_error('name'); ?>
                                    </div>


                                    <div class="mb-3">
                                        <label for="fathername" class="form-label">Father's name</label>
                                        <input type="text" class="form-control" id="fathername" name="father_name"
                                            value="<?php echo set_value('fathername'); ?>" required>
                                        <?php echo form_error('fathername'); ?>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="roll" class="form-label">Roll No.</label>
                                                <input type="text" class="form-control" id="roll" name="roll"
                                                    value="<?php echo set_value('roll'); ?>" required>
                                                <?php echo form_error('roll'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="dob" class="form-label">Date of Birth</label>
                                                <input class="form-control" type="date" id="dob" name="dob"
                                                    value="<?php echo set_value('dob'); ?>" required>
                                                <?php echo form_error('dob'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Stream</label>
                                                <select name="stream" id="stream" class="form-select form-control"
                                                    required>

                                                    <option value="bca" <?php echo set_select('stream', 'bca'); ?>>BCA
                                                    </option>
                                                    <option value="bba" <?php echo set_select('stream', 'bba'); ?>>BBA
                                                    </option>
                                                    <option value="bio_tech" <?php echo set_select('stream', 'bio_tech'); ?>>Bio-Tech</option>
                                                </select>
                                                <?php echo form_error('stream'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Semester</label>
                                                <select name="sem" class="form-select form-control" required>
                                                    <option value="">Select Semester</option>
                                                    <option value="1" <?php echo set_select('sem', '1'); ?>>1</option>
                                                    <option value="2" <?php echo set_select('sem', '2'); ?>>2</option>
                                                    <option value="3" <?php echo set_select('sem', '3'); ?>>3</option>
                                                    <option value="4" <?php echo set_select('sem', '4'); ?>>4</option>
                                                    <option value="5" <?php echo set_select('sem', '5'); ?>>5</option>
                                                </select>
                                                <?php echo form_error('sem'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary w-md"><i class="fas fa-search"></i>
                                            Search</button>
                                    </div>
                                    <?php echo form_close(); ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </section>


    <!-- PAGE END -->


    <!-- FOOTER -->
    <?php $this->load->view("panel_base/sections/footer.php"); ?>

    <?php $this->load->view("panel_base/sections/scripts.php"); ?>

</body>

</html>