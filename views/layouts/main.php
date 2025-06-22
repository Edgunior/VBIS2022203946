<?php
use app\core\Application;
use app\core\Constant;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discography</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/logos/cd.png"/>
    <link rel="stylesheet" href="/assets/css/styles.min.css"/>
    <link rel="stylesheet" href="/assets/js/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/tiny-slider.css">
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/js/plugins/toastr/toastr.min.js"></script>
    <script src="/assets/js/plugins/toastr/toastr-options.js"></script>
</head>

<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar -->
    <aside class="left-sidebar">
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="/home" class="text-nowrap logo-img">
                    <img src="/assets/images/logos/discography.png" width="180" alt="logo"/>
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>

                
            </div>
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Navigation</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/home" aria-expanded="false">
                            <span><i class="ti ti-home"></i></span>
                            <span class="hide-menu">Home</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/about" aria-expanded="false">
                            <span><i class="ti ti-info-circle"></i></span>
                            <span class="hide-menu">About Us</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/services" aria-expanded="false">
                            <span><i class="ti ti-briefcase"></i></span>
                            <span class="hide-menu">Services</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/contact" aria-expanded="false">
                            <span><i class="ti ti-phone"></i></span>
                            <span class="hide-menu">Contact</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/cart" aria-expanded="false">
                            <span><i class="ti ti-shopping-cart"></i></span>
                            <span class="hide-menu">Cart</span>
                        </a>
                    </li>

                      <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Dashboard</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                             <span><i class="ti ti-chart-bar"></i></span>
                              <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                     <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Users</span>
                    </li>
                  
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/userCreate" aria-expanded="false">
                            <span><i class="ti ti-user-plus"></i></span>
                            <span class="hide-menu">Create User</span>
                        </a>
                    </li>
                    
                    
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="body-wrapper">
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                            <i class="ti ti-bell-ringing"></i>
                            <div class="notification bg-primary rounded-circle"></div>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="#" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/assets/images/profile/user-1.jpg" alt="profile" width="35" height="35" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">My Profile</p>
                                    </a>
                                    <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-mail fs-6"></i>
                                        <p class="mb-0 fs-3">My Account</p>
                                    </a>
                                    <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-list-check fs-6"></i>
                                        <p class="mb-0 fs-3">My Task</p>
                                    </a>
                                    <a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- View content rendered here -->
        <div class="container-fluid">
    {{ renderSection }}
</div>

    </div>
</div>

<script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/sidebarmenu.js"></script>
<script src="/assets/js/app.min.js"></script>

<?php
$success = Application::$app->session->getFlash(Constant::$flash_session_success);
if ($success !== false) {
    echo "<script>$(document).ready(function () { toastr.success('".htmlspecialchars($success)."'); });</script>";
}
$error = Application::$app->session->getFlash(Constant::$flash_session_error);
if ($error !== false) {
    echo "<script>$(document).ready(function () { toastr.error('".htmlspecialchars($error)."'); });</script>";
}
?>


</body>
</html>
