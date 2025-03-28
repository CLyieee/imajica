<!doctype html>

    <!-- =========================================================
* Vuexy - Bootstrap Dashboard PRO | v3.0.0
==============================================================

* Product Page: https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599
* Created by: Pixinvent

      * License: You must have a valid license purchased in order to legally use the theme for your project.
    
* Copyright Pixinvent (https://pixinvent.com)

=========================================================
 -->
    <!-- beautify ignore:start -->
  


<html
  lang="en"
  class=" layout-navbar-fixed layout-menu-fixed layout-compact "
  dir="ltr"
  data-skin="default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template"
  data-bs-theme="light">
  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-ecommerce-product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:26:16 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Imajica Booking System</title>

    
      <meta name="description" content="Vuexy is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease." />
      <!-- Canonical SEO -->
      <meta name="keywords" content="Vuexy bootstrap dashboard, vuexy bootstrap 5 dashboard, themeselection, html dashboard, web dashboard, frontend dashboard, responsive bootstrap theme" />
      <meta property="og:title" content="Vuexy bootstrap Dashboard by Pixinvent" />
      <meta property="og:type" content="product" />
      <meta property="og:url" content="https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599" />
      <meta property="og:image" content="../../../../pixinvent.com/wp-content/uploads/2023/06/vuexy-hero-image.png" />
      <meta property="og:description" content="Vuexy is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease." />
      <meta property="og:site_name" content="Pixinvent" />
      <link rel="canonical" href="https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599" />
    
    
      <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
      <script>
        (function (w, d, s, l, i) {
          w[l] = w[l] || [];
          w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
          var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
          j.async = true;
          j.src = '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
          f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
      </script>
      <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->
    
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    
      
      <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css" />
    
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    
    <!-- Vendors CSS -->
    
      <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    
    <!-- endbuild -->

    <link rel="stylesheet" href="../../assets/vendor/libs/quill/typography.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/katex.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/editor.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/dropzone/dropzone.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/tagify/tagify.css" />

    <!-- Page CSS -->
    

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    
      <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
      <script src="../../assets/vendor/js/template-customizer.js"></script>
    
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    
      <script src="../../assets/js/config.js"></script>
    
  </head>

  <body>
    
      <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
    
    <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      @include ('components.sidebar')

<div class="menu-mobile-toggler d-xl-none rounded-1">
  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
    <i class="ti tabler-menu icon-base"></i>
    <i class="ti tabler-chevron-right icon-base"></i>
  </a>
</div>
<!-- / Menu -->

      

      <!-- Layout container -->
      <div class="layout-page">
        
          



<!-- Navbar -->

  <nav class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">




  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
    <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
      <i class="icon-base ti tabler-menu-2 icon-md"></i>
    </a>
  </div>


<div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
  
    <!-- Search -->
    <div class="navbar-nav align-items-center">
      <div class="nav-item navbar-search-wrapper px-md-0 px-2 mb-0">
        <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
          <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
        </a>
      </div>
    </div>

    <!-- /Search -->
  
  

  

  <ul class="navbar-nav flex-row align-items-center ms-md-auto">
    

      
      <li class="nav-item dropdown-language dropdown">
        <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" href="javascript:void(0);" data-bs-toggle="dropdown">
          <i class="icon-base ti tabler-language icon-22px text-heading"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
              <span>English</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
              <span>French</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
              <span>Arabic</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
              <span>German</span>
            </a>
          </li>
        </ul>
      </li>
      <!--/ Language -->

      
        <!-- Style Switcher -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class="icon-base ti tabler-sun icon-22px theme-icon-active text-heading"></i>
            <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
            <li>
              <button type="button" class="dropdown-item align-items-center active" data-bs-theme-value="light" aria-pressed="false">
                <span><i class="icon-base ti tabler-sun icon-22px me-3" data-icon="sun"></i>Light</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="dark" aria-pressed="true">
                <span><i class="icon-base ti tabler-moon-stars icon-22px me-3" data-icon="moon-stars"></i>Dark</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="system" aria-pressed="false">
                <span><i class="icon-base ti tabler-device-desktop-analytics icon-22px me-3" data-icon="device-desktop-analytics"></i>System</span>
              </button>
            </li>
          </ul>
        </li>
        <!-- / Style Switcher-->
      

      <!-- Quick links  -->
      <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
        <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
          <i class="icon-base ti tabler-layout-grid-add icon-22px text-heading"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-end p-0">
          <div class="dropdown-menu-header border-bottom">
            <div class="dropdown-header d-flex align-items-center py-3">
              <h6 class="mb-0 me-auto">Shortcuts</h6>
              <a href="javascript:void(0)" class="dropdown-shortcuts-add py-2 btn btn-text-secondary rounded-pill btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="icon-base ti tabler-plus icon-20px text-heading"></i></a>
            </div>
          </div>
          <div class="dropdown-shortcuts-list scrollable-container">
            <div class="row row-bordered overflow-visible g-0">
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-calendar icon-26px text-heading"></i>
                </span>
                <a href="app-calendar.html" class="stretched-link">Calendar</a>
                <small>Appointments</small>
              </div>
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-file-dollar icon-26px text-heading"></i>
                </span>
                <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                <small>Manage Accounts</small>
              </div>
            </div>
            <div class="row row-bordered overflow-visible g-0">
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-user icon-26px text-heading"></i>
                </span>
                <a href="app-user-list.html" class="stretched-link">User App</a>
                <small>Manage Users</small>
              </div>
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-users icon-26px text-heading"></i>
                </span>
                <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                <small>Permission</small>
              </div>
            </div>
            <div class="row row-bordered overflow-visible g-0">
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-device-desktop-analytics icon-26px text-heading"></i>
                </span>
                <a href="index.html" class="stretched-link">Dashboard</a>
                <small>User Dashboard</small>
              </div>
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-settings icon-26px text-heading"></i>
                </span>
                <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                <small>Account Settings</small>
              </div>
            </div>
            <div class="row row-bordered overflow-visible g-0">
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-help-circle icon-26px text-heading"></i>
                </span>
                <a href="pages-faq.html" class="stretched-link">FAQs</a>
                <small>FAQs & Articles</small>
              </div>
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-square icon-26px text-heading"></i>
                </span>
                <a href="modal-examples.html" class="stretched-link">Modals</a>
                <small>Useful Popups</small>
              </div>
            </div>
          </div>
        </div>
      </li>
      <!-- Quick links -->

      <!-- Notification -->
      <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
        <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
          <span class="position-relative">
            <i class="icon-base ti tabler-bell icon-22px text-heading"></i>
            <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end p-0">
          <li class="dropdown-menu-header border-bottom">
            <div class="dropdown-header d-flex align-items-center py-3">
              <h6 class="mb-0 me-auto">Notification</h6>
              <div class="d-flex align-items-center h6 mb-0">
                <span class="badge bg-label-primary me-2">8 New</span>
                <a href="javascript:void(0)" class="dropdown-notifications-all p-2 btn btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="icon-base ti tabler-mail-opened text-heading"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown-notifications-list scrollable-container">
            <ul class="list-group list-group-flush">
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                    <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                    <small class="text-body-secondary">1h ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">Charles Franklin</h6>
                    <small class="mb-1 d-block text-body">Accepted your connection</small>
                    <small class="text-body-secondary">12hr ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="../../assets/img/avatars/2.png" alt class="rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">New Message ✉️</h6>
                    <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                    <small class="text-body-secondary">1h ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-success"><i class="icon-base ti tabler-shopping-cart"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">Whoo! You have new order 🛒</h6>
                    <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                    <small class="text-body-secondary">1 day ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="../../assets/img/avatars/9.png" alt class="rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">Application has been approved 🚀</h6>
                    <small class="mb-1 d-block text-body">Your ABC project application has been approved.</small>
                    <small class="text-body-secondary">2 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-success"><i class="icon-base ti tabler-chart-pie"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">Monthly report is generated</h6>
                    <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                    <small class="text-body-secondary">3 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="../../assets/img/avatars/5.png" alt class="rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">Send connection request</h6>
                    <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                    <small class="text-body-secondary">4 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="../../assets/img/avatars/6.png" alt class="rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">New message from Jane</h6>
                    <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                    <small class="text-body-secondary">5 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-warning"><i class="icon-base ti tabler-alert-triangle"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">CPU is running high</h6>
                    <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                    <small class="text-body-secondary">5 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="border-top">
            <div class="d-grid p-4">
              <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                <small class="align-middle">View all notifications</small>
              </a>
            </div>
          </li>
        </ul>
      </li>
      <!--/ Notification -->

      <!-- User -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <div class="avatar avatar-online">
                    <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                  </div>
                </div>
                <div class="flex-grow-1">
                  <h6 class="mb-0">John Doe</h6>
                  <small class="text-body-secondary">Admin</small>
                </div>
              </div>
            </a>
          </li>
          <li>
            <div class="dropdown-divider my-1 mx-n2"></div>
          </li>
          <li>
            <a class="dropdown-item" href="pages-profile-user.html"> <i class="icon-base ti tabler-user me-3 icon-md"></i><span class="align-middle">My Profile</span> </a>
          </li>
          <li>
            <a class="dropdown-item" href="pages-account-settings-account.html"> <i class="icon-base ti tabler-settings me-3 icon-md"></i><span class="align-middle">Settings</span> </a>
          </li>
          <li>
            <a class="dropdown-item" href="pages-account-settings-billing.html">
              <span class="d-flex align-items-center align-middle">
                <i class="flex-shrink-0 icon-base ti tabler-file-dollar me-3 icon-md"></i><span class="flex-grow-1 align-middle">Billing</span>
                <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
              </span>
            </a>
          </li>
          <li>
            <div class="dropdown-divider my-1 mx-n2"></div>
          </li>
          <li>
            <a class="dropdown-item" href="pages-pricing.html"> <i class="icon-base ti tabler-currency-dollar me-3 icon-md"></i><span class="align-middle">Pricing</span> </a>
          </li>
          <li>
            <a class="dropdown-item" href="pages-faq.html"> <i class="icon-base ti tabler-question-mark me-3 icon-md"></i><span class="align-middle">FAQ</span> </a>
          </li>
          <li>
            <div class="d-grid px-2 pt-2 pb-1">
              <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                <small class="align-middle">Logout</small>
                <i class="icon-base ti tabler-logout ms-2 icon-14px"></i>
              </a>
            </div>
          </li>
        </ul>
      </li>
      <!--/ User -->
    
  </ul>
</div>
</nav>

<!-- / Navbar -->

        

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
  <div class="app-ecommerce">
    <!-- Add Product -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="mb-1">Add a new Product</h4>
        <p class="mb-0">Orders placed across your store</p>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-4">
        <div class="d-flex gap-4"><button class="btn btn-label-secondary">Discard</button> <button class="btn btn-label-primary">Save draft</button></div>
        <button type="submit" class="btn btn-primary">Publish product</button>
      </div>
    </div>

    <div class="row">
      <!-- First column-->
      <div class="col-12 col-lg-8">
        <!-- Product Information -->
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-tile mb-0">Product information</h5>
          </div>
          <div class="card-body">
            <div class="mb-6">
              <label class="form-label" for="ecommerce-product-name">Name</label>
              <input type="text" class="form-control" id="ecommerce-product-name" placeholder="Product title" name="productTitle" aria-label="Product title" />
            </div>
            <div class="row mb-6">
              <div class="col"><label class="form-label" for="ecommerce-product-sku">SKU</label> <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="SKU" name="productSku" aria-label="Product SKU" /></div>
              <div class="col"><label class="form-label" for="ecommerce-product-barcode">Barcode</label> <input type="text" class="form-control" id="ecommerce-product-barcode" placeholder="0123-4567" name="productBarcode" aria-label="Product barcode" /></div>
            </div>
            <!-- Description -->
            <div>
              <label class="mb-1">Description (Optional)</label>
              <div class="form-control p-0">
                <div class="comment-toolbar border-0 border-bottom">
                  <div class="d-flex justify-content-start">
                    <span class="ql-formats me-0">
                      <button class="ql-bold"></button>
                      <button class="ql-italic"></button>
                      <button class="ql-underline"></button>
                      <button class="ql-list" value="ordered"></button>
                      <button class="ql-list" value="bullet"></button>
                      <button class="ql-link"></button>
                      <button class="ql-image"></button>
                    </span>
                  </div>
                </div>
                <div class="comment-editor border-0 pb-6" id="ecommerce-category-description"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Information -->
        <!-- Media -->
        <div class="card mb-6">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 card-title">Product Image</h5>
            <a href="javascript:void(0);" class="fw-medium">Add media from URL</a>
          </div>
          <div class="card-body">
            <form action="https://demos.pixinvent.com/upload" class="dropzone needsclick p-0" id="dropzone-basic">
              <div class="dz-message needsclick">
                <p class="h4 needsclick pt-3 mb-2">Drag and drop your image here</p>
                <p class="h6 text-body-secondary d-block fw-normal mb-2">or</p>
                <span class="needsclick btn btn-sm btn-label-primary" id="btnBrowse">Browse image</span>
              </div>
              <div class="fallback">
                <input name="file" type="file" />
              </div>
            </form>
          </div>
        </div>
        <!-- /Media -->
        <!-- Variants -->
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title mb-0">Variants</h5>
          </div>
          <div class="card-body">
            <form class="form-repeater">
              <div data-repeater-list="group-a">
                <div data-repeater-item>
                  <div class="row g-sm-6 mb-6">
                    <div class="col-sm-4">
                      <label class="form-label" for="form-repeater-1-1">Options</label>
                      <select id="form-repeater-1-1" class="select2 form-select" data-placeholder="Size">
                        <option value="">Size</option>
                        <option value="size">Size</option>
                        <option value="color">Color</option>
                        <option value="weight">Weight</option>
                        <option value="smell">Smell</option>
                      </select>
                    </div>

                    <div class="col-sm-8">
                      <label class="form-label invisible" for="form-repeater-1-2">Not visible</label>
                      <input type="number" id="form-repeater-1-2" class="form-control" placeholder="Enter size" />
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <button class="btn btn-primary" data-repeater-create>
                  <i class="icon-base ti tabler-plus icon-xs me-2"></i>
                  Add another option
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- /Variants -->
        <!-- Inventory -->
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title mb-0">Inventory</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <!-- Navigation -->
              <div class="col-12 col-md-4 col-xl-5 col-xxl-4 mx-auto card-separator">
                <div class="d-flex justify-content-between flex-column mb-4 mb-md-0 pe-md-4">
                  <div class="nav-align-left">
                    <ul class="nav nav-pills flex-column w-100">
                      <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#restock">
                          <i class="icon-base ti tabler-box icon-sm me-1_5"></i>
                          <span class="align-middle">Restock</span>
                        </button>
                      </li>
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#shipping">
                          <i class="icon-base ti tabler-car icon-sm me-1_5"></i>
                          <span class="align-middle">Shipping</span>
                        </button>
                      </li>
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#global-delivery">
                          <i class="icon-base ti tabler-world icon-sm me-1_5"></i>
                          <span class="align-middle">Global Delivery</span>
                        </button>
                      </li>
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#attributes">
                          <i class="icon-base ti tabler-link icon-sm me-1_5"></i>
                          <span class="align-middle">Attributes</span>
                        </button>
                      </li>
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#advanced">
                          <i class="icon-base ti tabler-lock icon-sm me-1_5"></i>
                          <span class="align-middle">Advanced</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- /Navigation -->
              <!-- Options -->
              <div class="col-12 col-md-8 col-xl-7 col-xxl-8 pt-6 pt-md-0">
                <div class="tab-content p-0 ps-md-4">
                  <!-- Restock Tab -->
                  <div class="tab-pane fade show active" id="restock" role="tabpanel">
                    <h6 class="text-body">Options</h6>
                    <label class="form-label" for="ecommerce-product-stock">Add to Stock</label>
                    <div class="row mb-4 g-4 pe-md-4">
                      <div class="col-12 col-sm-9">
                        <input type="number" class="form-control" id="ecommerce-product-stock" placeholder="Quantity" name="quantity" aria-label="Quantity" />
                      </div>
                      <div class="col-12 col-sm-3">
                        <button class="btn btn-primary">Confirm</button>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-2 fw-normal">Product in stock now: 54</h6>
                      <h6 class="mb-2 fw-normal">Product in transit: 390</h6>
                      <h6 class="mb-2 fw-normal">Last time restocked: 24th June, 2023</h6>
                      <h6 class="mb-0 fw-normal">Total stock over lifetime: 2430</h6>
                    </div>
                  </div>
                  <!-- Shipping Tab -->
                  <div class="tab-pane fade" id="shipping" role="tabpanel">
                    <h6 class="mb-3 text-body">Shipping Type</h6>
                    <div>
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="shippingType" id="seller" />
                        <label class="form-check-label" for="seller">
                          <span class="mb-1 h6">Fulfilled by Seller</span><br />
                          <small
                            >You'll be responsible for product delivery.<br />
                            Any damage or delay during shipping may cost you a Damage fee.</small
                          >
                        </label>
                      </div>
                      <div class="form-check mb-6">
                        <input class="form-check-input" type="radio" name="shippingType" id="companyName" checked />
                        <label class="form-check-label" for="companyName">
                          <span class="mb-1 h6">Fulfilled by Company name &nbsp;<span class="badge rounded-2 badge-warning bg-label-warning fs-tiny py-1">RECOMMENDED</span></span
                          ><br />
                          <small
                            >Your product, Our responsibility.<br />
                            For a measly fee, we will handle the delivery process for you.</small
                          >
                        </label>
                      </div>
                      <p class="mb-0">See our <a href="javascript:void(0);">Delivery terms and conditions</a> for details</p>
                    </div>
                  </div>
                  <!-- Global Delivery Tab -->
                  <div class="tab-pane fade" id="global-delivery" role="tabpanel">
                    <h6 class="mb-3 text-body">Global Delivery</h6>
                    <!-- Worldwide delivery -->
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="radio" name="globalDel" id="worldwide" />
                      <label class="form-check-label" for="worldwide">
                        <span class="mb-1 h6">Worldwide delivery</span><br />
                        <small>Only available with Shipping method: <a href="javascript:void(0);">Fulfilled by Company name</a></small>
                      </label>
                    </div>
                    <!-- Global delivery -->
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="radio" name="globalDel" checked />
                      <label class="form-check-label w-75 pe-12" for="country-selected">
                        <span class="mb-2 h6">Selected Countries</span>
                        <input type="text" class="form-control" placeholder="Type Country name" id="country-selected" />
                      </label>
                    </div>
                    <!-- Local delivery -->
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="globalDel" id="local" />
                      <label class="form-check-label" for="local">
                        <span class="mb-1 h6">Local delivery</span><br />
                        <small>Deliver to your country of residence : <a href="javascript:void(0);">Change profile address</a></small>
                      </label>
                    </div>
                  </div>
                  <!-- Attributes Tab -->
                  <div class="tab-pane fade" id="attributes" role="tabpanel">
                    <h6 class="mb-2 text-body">Attributes</h6>
                    <div>
                      <!-- Fragile Product -->
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="fragile" id="fragile" />
                        <label class="form-check-label" for="fragile">
                          <span class="fw-medium">Fragile Product</span>
                        </label>
                      </div>
                      <!-- Biodegradable -->
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="biodegradable" id="biodegradable" />
                        <label class="form-check-label" for="biodegradable">
                          <span class="fw-medium">Biodegradable</span>
                        </label>
                      </div>
                      <!-- Frozen Product -->
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="frozen" checked />
                        <label class="form-check-label w-75 pe-12" for="frozen">
                          <span class="mb-1 h6">Frozen Product</span>
                          <input type="number" class="form-control" placeholder="Max. allowed Temperature" id="frozen" />
                        </label>
                      </div>
                      <!-- Exp Date -->
                      <div class="form-check mb-6">
                        <input class="form-check-input" type="checkbox" value="expDate" id="expDate" checked />
                        <label class="form-check-label w-75 pe-12" for="date-input">
                          <span class="mb-1 h6">Expiry Date of Product</span>
                          <input type="date" class="product-date form-control" id="date-input" />
                        </label>
                      </div>
                    </div>
                  </div>
                  <!-- /Attributes Tab -->
                  <!-- Advanced Tab -->
                  <div class="tab-pane fade" id="advanced" role="tabpanel">
                    <h6 class="mb-3 text-body">Advanced</h6>
                    <div class="row">
                      <!-- Product Id Type -->
                      <div class="col">
                        <label class="form-label" for="product-id">
                          <span class="mb-1 h6">Product ID Type</span>
                        </label>
                        <select id="product-id" class="select2 form-select" data-placeholder="ISBN">
                          <option value="">ISBN</option>
                          <option value="ISBN">ISBN</option>
                          <option value="UPC">UPC</option>
                          <option value="EAN">EAN</option>
                          <option value="JAN">JAN</option>
                        </select>
                      </div>
                      <!-- Product Id -->
                      <div class="col">
                        <label class="form-label" for="product-id-1">
                          <span class="mb-1 h6">Product ID</span>
                        </label>
                        <input type="number" id="product-id-1" class="form-control" placeholder="ISBN Number" />
                      </div>
                    </div>
                  </div>
                  <!-- /Advanced Tab -->
                </div>
              </div>
              <!-- /Options-->
            </div>
          </div>
        </div>
        <!-- /Inventory -->
      </div>
      <!-- /Second column -->

      <!-- Second column -->
      <div class="col-12 col-lg-4">
        <!-- Pricing Card -->
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title mb-0">Pricing</h5>
          </div>
          <div class="card-body">
            <!-- Base Price -->
            <div class="mb-6">
              <label class="form-label" for="ecommerce-product-price">Base Price</label>
              <input type="number" class="form-control" id="ecommerce-product-price" placeholder="Price" name="productPrice" aria-label="Product price" />
            </div>
            <!-- Discounted Price -->
            <div class="mb-6">
              <label class="form-label" for="ecommerce-product-discount-price">Discounted Price</label>
              <input type="number" class="form-control" id="ecommerce-product-discount-price" placeholder="Discounted Price" name="productDiscountedPrice" aria-label="Product discounted price" />
            </div>
            <!-- Charge tax check box -->
            <div class="form-check ms-2 mt-2 mb-4">
              <input class="form-check-input" type="checkbox" value="" id="price-charge-tax" checked />
              <label class="switch-label" for="price-charge-tax"> Charge tax on this product </label>
            </div>
            <!-- Instock switch -->
            <div class="d-flex justify-content-between align-items-center border-top pt-2">
              <span class="mb-0">In stock</span>
              <div class="w-25 d-flex justify-content-end">
                <div class="form-check form-switch me-n3">
                  <input type="checkbox" class="form-check-input" checked />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Pricing Card -->
        <!-- Organize Card -->
        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title mb-0">Organize</h5>
          </div>
          <div class="card-body">
            <!-- Vendor -->
            <div class="mb-6 col ecommerce-select2-dropdown">
              <label class="form-label mb-1" for="vendor"> Vendor </label>
              <select id="vendor" class="select2 form-select" data-placeholder="Select Vendor">
                <option value="">Select Vendor</option>
                <option value="men-clothing">Men's Clothing</option>
                <option value="women-clothing">Women's-clothing</option>
                <option value="kid-clothing">Kid's-clothing</option>
              </select>
            </div>
            <!-- Category -->
            <div class="d-flex justify-content-between align-items-center">
              <div class="mb-6 col ecommerce-select2-dropdown">
                <label class="form-label mb-1" for="category-org">
                  <span>Category</span>
                </label>
                <select id="category-org" class="select2 form-select" data-placeholder="Select Category">
                  <option value="">Select Category</option>
                  <option value="Household">Household</option>
                  <option value="Management">Management</option>
                  <option value="Electronics">Electronics</option>
                  <option value="Office">Office</option>
                  <option value="Automotive">Automotive</option>
                </select>
              </div>
              <a href="javascript:void(0);" class="fw-medium btn btn-icon btn-label-primary ms-4"><i class="icon-base ti tabler-plus icon-md"></i></a>
            </div>
            <!-- Collection -->
            <div class="mb-6 col ecommerce-select2-dropdown">
              <label class="form-label mb-1" for="collection">Collection </label>
              <select id="collection" class="select2 form-select" data-placeholder="Collection">
                <option value="">Collection</option>
                <option value="men-clothing">Men's Clothing</option>
                <option value="women-clothing">Women's-clothing</option>
                <option value="kid-clothing">Kid's-clothing</option>
              </select>
            </div>
            <!-- Status -->
            <div class="mb-6 col ecommerce-select2-dropdown">
              <label class="form-label mb-1" for="status-org">Status </label>
              <select id="status-org" class="select2 form-select" data-placeholder="Published">
                <option value="">Published</option>
                <option value="Published">Published</option>
                <option value="Scheduled">Scheduled</option>
                <option value="Inactive">Inactive</option>
              </select>
            </div>
            <!-- Tags -->
            <div>
              <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>
              <input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags" value="Normal,Standard,Premium" aria-label="Product Tags" />
            </div>
          </div>
        </div>
        <!-- /Organize Card -->
      </div>
      <!-- /Second column -->
    </div>
  </div></div>
          <!-- / Content -->

          
            

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl">
      <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
        <div class="text-body">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
           Developed by <a href="https://intra-code.com/" target="_blank" class="footer-link">Intracode IT Solutions</a>
        </div>
       
      </div>
    </div>
  </footer>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
      
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    
    
      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->

    
   

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->
    
    
      <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

    
    <script src="../../assets/vendor/libs/%40algolia/autocomplete-js.js"></script>

    
      
      <script src="../../assets/vendor/libs/pickr/pickr.js"></script>
    

    
      <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
      
        
        <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
        
          <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
        
      
      <script src="../../assets/vendor/js/menu.js"></script>
    
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/quill/katex.js"></script>
  <script src="../../assets/vendor/libs/quill/quill.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/dropzone/dropzone.js"></script>
  <script src="../../assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
  <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <script src="../../assets/vendor/libs/tagify/tagify.js"></script>

    <!-- Main JS -->
    
      <script src="../../assets/js/main.js"></script>
    

    <!-- Page JS -->
    <script src="../../assets/js/add-product.js"></script>
    
  </body>

<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-ecommerce-product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:26:17 GMT -->
</html>

  <!-- beautify ignore:end -->

