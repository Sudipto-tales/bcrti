<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>User Data | CUMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
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
<?php $this->load->view('panel_base\sections\preloader.php') ?>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <?php $this->load->view('panel_base\sections\topbar.php') ?>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php $this->load->view('panel_base\sections\sidebar.php') ?>
        <!-- ========== Left Sidebar End ========== -->


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">

                                <h4 class="page-title">User Data Upload</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">



                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="input-types-preview">

                                            <form>
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">First Name</label>
                                                        <input type="text" id="f_name" class="form-control"
                                                            placeholder="First Name">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Last Name</label>
                                                        <input type="text" id="l_name" class="form-control"
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Bio</label>
                                                    <textarea class="form-control" id="example-textarea"
                                                        rows="5"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Contact No.</label>
                                                    <input type="text" id="l_name" class="form-control"
                                                        placeholder="+91-">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Email Id</label>
                                                    <input type="email" id="email_id" class="form-control"
                                                        placeholder="@gmail.com">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-date" class="form-label">Date Of Birth</label>
                                                    <input class="form-control" id="dob" type="date" name="dob">
                                                </div>


                                                <div class="mb-3">
                                                    <label for="example-fileinput" class="form-label">Upload
                                                        Image</label>
                                                    <input type="file" id="image" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Facebook</label>
                                                    <input type="text" id="f_link" class="form-control" placeholder="Enter Link">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">LinkedIn</label>
                                                    <input type="text" id="l_link" class="form-control" placeholder="Enter Link">
                                                </div>
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </form>
                                        </div> <!-- end preview-->

                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->


                    <!-- Footer Start -->

                    <!-- end Footer -->

                </div>

                <!-- ============================================================== -->
                <!-- End Page content -->
                <!-- ============================================================== -->

            </div>
            <!-- END wrapper -->

            <!-- Theme Settings -->
         
            <?php $this->load->view('panel_base\sections\theme.php') ?>

            <!-- script -->
            <?php $this->load->view('panel_base\sections\scripts.php') ?>


</body>

</html>