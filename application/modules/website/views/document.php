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

                                    <form>
                                        <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Full name</label>
                                            <input type="text" class="form-control" id="formrow-firstname-input">
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label for="formrow-firstname-input" class="form-label">Father's
                                                        name</label>
                                                    <input type="text" class="form-control"
                                                        id="formrow-firstname-input">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Date of
                                                        Birth</label>

                                                    <input class="form-control" type="date" value="2003-12-24"
                                                        id="example-date-input">

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Stream</label>
                                                    <select name="stream" class="form-select form-control" required>
                                                        <option>BCA</option>
                                                        <option>BBA</option>
                                                        <option>Bio-Tech</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Semester</label>
                                                    <select name="semester" class="form-select form-control" required>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary w-md"><i
                                                    class="fas fa-search"></i> Search</button>
                                        </div>
                                    </form>
                                </div>


                                <div class="tab-pane" id="result-1" role="tabpane1">
                                    <h4 class="card-title mb-4">Result Download</h4>

                                    <form>
                                        <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Full name</label>
                                            <input type="text" class="form-control" id="formrow-firstname-input">
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Roll
                                                        No.</label>
                                                    <input type="email" class="form-control" id="formrow-roll-input">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Date of
                                                        Birth</label>

                                                    <input class="form-control" type="date" value="2003-12-24"
                                                        id="example-date-input">

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Stream</label>
                                                    <select name="stream" class="form-select form-control" required>
                                                        <option>BCA</option>
                                                        <option>BBA</option>
                                                        <option>Bio-Tech</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Semester</label>
                                                    <select name="semester" class="form-select form-control" required>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary w-md"><i
                                                    class="fas fa-search"></i> Search</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="marksheet-1" role="tabpane1">
                                    <h4 class="card-title mb-4">Mark Sheet Download</h4>

                                    <form method="POST" action="">
                                        <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Full name</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Father's
                                                name</label>
                                            <input type="text" class="form-control" id="father_name">
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Roll
                                                        No.</label>
                                                    <input type="email" class="form-control" id="roll" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Date of
                                                        Birth</label>

                                                    <input class="form-control" type="date" value="" id="dob">

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Stream</label>

                                                    <select name="stream" class="form-select form-control" required>
                                                        <option>BCA</option>
                                                        <option>BBA</option>
                                                        <option>Bio-Tech</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Semester</label>

                                                    <select name="semester" class="form-select form-control" required>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary w-md"><i
                                                    class="fas fa-search"></i> Search</button>
                                        </div>
                                    </form>
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