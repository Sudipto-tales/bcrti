<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Notice | CUMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            <?php if ($this->session->flashdata('success')): ?>
                    < div class="alert alert-success" role = "alert" >
                        <i class="ri-check-line me-2"></i>Notice Data Upload < strong > Successfully!!</strong > alert - check it out!
                            </div >
                <?php endif; ?>
            <?php if ($this->session->flashdata('error')): ?>
                    < div class="alert alert-danger" role = "alert" >
                        <i class="ri-close-circle-line me-2"></i>Failed to Upload < strong > Notice Data</strong > alert - check it out!
                         </div >

                <?php endif; ?>
        });
    </script>

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

                                <h4 class="page-title">Notice Upload</h4>
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
                                            <?php echo form_open_multipart('submission'); ?>

                                            <?php echo isset($error) ? $error : ''; ?>

                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" id="title" name="title" class="form-control"
                                                    value="<?php echo set_value('title'); ?>">
                                                <?php echo form_error('title'); ?>
                                            </div>

                                            <div class="mb-3">
                                                <label for="domain" class="form-label">Notice For</label>
                                                <input type="text" id="domain" name="domain" class="form-control"
                                                    placeholder="Course Name"
                                                    value="<?php echo set_value('domain'); ?>">
                                                <?php echo form_error('domain'); ?>
                                            </div>

                                            <div class="mb-3">
                                                <label for="uploaded_by" class="form-label">Upload By</label>
                                                <input type="text" id="uploaded_by" name="uploaded_by"
                                                    class="form-control"
                                                    value="<?php echo set_value('uploaded_by'); ?>">
                                                <?php echo form_error('uploaded_by'); ?>
                                            </div>

                                            <div class="mb-3">
                                                <label for="type" class="form-label">Type</label>
                                                <select class="form-select" id="type" name="type">
                                                    <option value="ADMISSION" <?php echo set_select('type', 'ADMISSION'); ?>>ADMISSION</option>
                                                    <option value="RESULT" <?php echo set_select('type', 'RESULT'); ?>>
                                                        RESULT</option>
                                                    <option value="ACADEMIC" <?php echo set_select('type', 'ACADEMIC'); ?>>ACADEMIC</option>
                                                </select>
                                                <?php echo form_error('type'); ?>
                                            </div>

                                            <div class="mb-3">
                                                <label for="notice_from" class="form-label">Notice Upload Date</label>
                                                <input class="form-control" id="notice_from" name="notice_from"
                                                    type="date" value="<?php echo set_value('notice_from'); ?>">
                                                <?php echo form_error('notice_from'); ?>
                                            </div>

                                            <div class="mb-3">
                                                <label for="notice_to" class="form-label">Notice Period</label>
                                                <input class="form-control" id="notice_to" name="notice_to" type="date"
                                                    value="<?php echo set_value('notice_to'); ?>">
                                                <?php echo form_error('notice_to'); ?>
                                            </div>

                                            <div class="mb-3">
                                                <label for="file" class="form-label">File Upload</label>
                                                <input type="file" id="file" name="file" class="form-control">
                                                <?php echo form_error('file'); ?>
                                            </div>

                                            <button class="btn btn-primary" type="submit">Submit form</button>

                                            <?php echo form_close(); ?>
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

            <!-- theme Settings -->

            <?php $this->load->view('panel_base\sections\theme.php') ?>

            <!-- script -->
            <?php $this->load->view('panel_base\sections\scripts.php') ?>

</body>

</html>