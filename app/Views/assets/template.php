<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Accademia Work
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('css/nucleo-icons.css') ?>" rel="stylesheet" />
    <!-- ../assets/css/nucleo-icons.css -->
    <link href="<?= base_url('css/nucleo-svg.css')?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- material icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('css/material-dashboard.css?v=3.2.0')?>" rel="stylesheet" />
    <link id="pagestyle" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link id="pagestyle" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand px-4 py-3 m-0">
                <span class="ms-1 text-sm text-dark">Accademia Work</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/">
                        <i class="material-symbols-rounded opacity-5">speed</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/course">
                        <i class="material-symbols-rounded opacity-5">grid_view</i>
                        <span class="nav-link-text ms-1">Course</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/free_class">
                        <i class="material-symbols-rounded opacity-5">favorite</i>
                        <span class="nav-link-text ms-1">Free Class</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/order">
                        <i class="material-symbols-rounded opacity-5">checklist</i>
                        <span class="nav-link-text ms-1">Order List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/class">
                        <i class="material-symbols-rounded opacity-5">density_small</i>
                        <span class="nav-link-text ms-1">Class</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/bootcamp">
                        <i class="material-symbols-rounded bi bi-easel"></i>
                        <span class="nav-link-text ms-1">Bootcamp</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/pembayaran">
                        <i class="material-symbols-rounded opacity-5">money</i>
                        <span class="nav-link-text ms-1">Pembayaran</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/quiz">
                        <i class="material-symbols-rounded opacity-5">assignment</i>
                        <span class="nav-link-text ms-1">Quiz</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/job_hunter">
                    <i class= "material-symbols-rounded bi bi-suitcase-lg"></i>
                        <span class="nav-link-text ms-1">Job Hunter</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/team">
                        <i class="material-symbols-rounded opacity-5">people</i>
                        <span class="nav-link-text ms-1">Team</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/account">
                        <i class="material-symbols-rounded opacity-5">person</i>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/profile.html">
                        <i class="material-symbols-rounded opacity-5">settings</i>
                        <span class="nav-link-text ms-1">Settings</span>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/pages/profile.html">
                        <i class="material-symbols-rounded opacity-5">logout</i>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <?= $this->renderSection('content');?>

    <!-- FOOTER -->
    <footer class="footer py-4  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-left">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-muted">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-muted">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-muted">Blog</a>
                        </li>
                        <li class=" nav-item">
                            <a href="#" class="nav-link pe-0 text-muted">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER -->
<!--   Core JS Files   -->
<script src="<?= base_url('js/core/popper.min.js') ?>"></script>
  <script src="<?= base_url('js/core/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('js/plugins/perfect-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('js/plugins/smooth-scrollbar.min.js')?>"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('js/plugins/material-dashboard.min.js?v=3.2.0')?>"></script>
  </body>
</html>