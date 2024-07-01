<div class="leftside-menu">

<!-- Brand Logo Light -->
<a href="index.html" class="logo logo-light">
    <span class="logo-lg">
        <img src="<?php echo base_url() ?>raw/assets/images/logo.png" alt="logo">
    </span>
    <span class="logo-sm">
        <img src="<?php echo base_url() ?>raw/assets/images/logo-sm.png" alt="small logo">
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
    <div class="leftbar-user">
        <a href="pages-profile.html">
            <img src="<?php echo base_url() ?>raw/assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
            <span class="leftbar-user-name mt-2">Dominic Keller</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="side-nav">

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <span> Dashboards </span>
            </a>
            <a data-bs-toggle="collapse" href="#sidebarUpload" aria-expanded="false" aria-controls="sidebarUpload" class="side-nav-link">
            <i class="ri-file-upload-line"></i>
                <span> Upload </span>
            </a>
            <div class="collapse" id="sidebarUpload">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="<?php echo base_url() ?>upload/notice">Notice Upload</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>upload/photo">Photo Upload</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>upload/user">User Upload</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>upload/result">Result Upload</a>
                    </li>
                </ul>
            </div>
        </li>



    </ul>
    <!--- End Sidemenu -->

    <div class="clearfix"></div>
</div>
</div>