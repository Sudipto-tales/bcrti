<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="<?php echo base_url() ?>raw/assets/images/logo1.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="<?php echo base_url() ?>raw/assets/images/logo1.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="<?php echo base_url() ?>raw/assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="<?php echo base_url() ?>raw/assets/images/logo-dark-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Navigation</li>
            <li class="side-nav-item">
                <a href="<?php echo base_url() ?>dashboard"  class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                    aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="ri-book-mark-fill"></i>
                    <span> Domain </span>
                </a>
                <div class="collapse" id="sidebarDashboards">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="<?php echo base_url() ?>">BCA</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>">BBA</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>">BIO-TECH</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>">OTHERS</a>
                        </li>

                    </ul>
                </div>
            </li>




            <!-- Help Box -->
            <div class="help-box text-white text-center">
                <a href="javascript: void(0);" class="float-end close-btn text-white">
                    <i class="mdi mdi-close"></i>
                </a>
                <img src="<?php echo base_url() ?>raw/assets/images/svg/help-icon.svg" height="90"
                    alt="Helper Icon Image" />
                <h5 class="mt-3">Unlimited Access</h5>
                <p class="mb-3">Have any problem or need any Books</p>
                <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Massege Box</a>
            </div>
            <!-- end Help Box -->


        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->