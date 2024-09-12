<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="zxx">

<meta charset="utf-8" />
<title>QN Paper</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />

<!-- App favicon -->
<link rel="shortcut icon" href="<?php echo base_url() ?>raw/assets/images/favicon.ico">

<!-- Datatable css -->
<link href="<?php echo base_url() ?>raw/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css"
    rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>raw/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css"
    rel="stylesheet" type="text/css" />

<!-- Theme Config Js -->
<script src="<?php echo base_url() ?>raw/assets/js/hyper-config.js"></script>

<!-- App css -->
<link href="<?php echo base_url() ?>raw/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons css -->
<link href="<?php echo base_url() ?>raw/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />

<body>
    <!-- Pre-loader -->
    <div id="preloader">
        <div id="status">
            <div class="bouncing-loader">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- End Preloader-->

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">
                            <ul>Previous QN Paper</ul>
                        </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-sm text-wrap table-centered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Paper Code</th>
                                            <th>Subject</th>
                                            <th>Semester</th>
                                            <th>Year</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $value): ?>
                                            <tr>
                                                <td>
                                                    <?= $value['code'] ?>
                                                </td>
                                                <td>
                                                    <?= $value['subject'] ?>
                                                </td>
                                                <td>
                                                    <?= $value['sem'] ?>
                                                </td>
                                                <td>
                                                    <?= $value['year'] ?>
                                                </td>
                                                
                                                <td class="table-action">
                                                    <a href="<?php echo base_url() ?>assets/QNpaper/<?= $value['file_path'] ?>"
                                                        class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                    <a href="<?php echo base_url() ?>assets/QNpaper/<?= $value['file_path'] ?>"
                                                        class="action-icon" download> <i
                                                            class=" ri-download-2-line"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->


            </div> <!-- content -->
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © BCRTI - crti.co.in
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="<?php echo base_url() ?>home">Home</a>
                                <a href="<?php echo base_url() ?>about">About</a>
                                <a href="<?php echo base_url() ?>contact_us">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>



        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
        <!-- Vendor js -->
        <script src="<?php echo base_url() ?>raw/assets/js/vendor.min.js"></script>

        <!-- Datatable js -->
        <script src="<?php echo base_url() ?>raw/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
        <script
            src="<?php echo base_url() ?>raw/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script
            src="<?php echo base_url() ?>raw/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script
            src="<?php echo base_url() ?>raw/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script
            src="<?php echo base_url() ?>raw/assets/vendor/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js"></script>

        <!-- Product Demo App js -->
        <script src="<?php echo base_url() ?>raw/assets/js/pages/demo.products.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url() ?>raw/assets/js/app.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#myTable').DataTable();
            });
        </script>
</body>

</html>