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
  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-ecommerce-order-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:26:18 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Demo: Order Details - eCommerce | Vuexy - Bootstrap Dashboard PRO</title>

    
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

    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />

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
      
        




<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu" >
  <br>
      <br>
  <div class="app-brand demo ">
    <a href="index.html" class="app-brand-link">
      
      
    <img src="logo.png" alt="Logo" width="100%" >
 


    
    </a>

   
  </div>
  <br>
  <br>
  <div class="menu-inner-shadow"></div>

  
  
    <ul class="menu-inner py-1">
      <!-- Dashboards -->

    

    


      <li class="menu-item">
        <a href="index.html" class="menu-link">
          <i class="menu-icon icon-base ti tabler-home"></i>
          <div data-i18n="Dashboard">Dashboard</div>
        </a>
      </li>

 

      <!-- Apps & Pages -->
      <li class="menu-header small">
        <span class="menu-header-text" data-i18n="Main Menu">Main Menu</span>
      </li>
     
      
      <li class="menu-item">
        <a href="booking.html" class="menu-link">
          <i class="menu-icon icon-base ti tabler-calendar"></i>
          <div data-i18n="Booking">Booking</div>
        </a>
      </li>
     
      <li class="menu-item">
      
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-chart-pie "></i>
          <div data-i18n="Accounting">Accounting</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="sales-transaction.html" class="menu-link">
              <div data-i18n="Sales Transaction">Sales Transaction</div>
            </a>
          </li>
      
          <li class="menu-item">
            <a href="commision-employee.html" class="menu-link">
              <div data-i18n="Commision for Employee">Commision for Employee</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="employee-sales.html" class="menu-link">
              <div data-i18n="Employee Sales">Employee Sales</div>
            </a>
          </li>
      
          <li class="menu-item">
            <a href="purchase.html" class="menu-link">
              <div data-i18n="Purchase">Purchase</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="invoice.html" class="menu-link">
              <div data-i18n="Void Logs">Void Logs</div>
            </a>
          </li>
           
        </ul>
      </li> 

 <!-- <li class="menu-item">
      
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon icon-base ti tabler-file-invoice"></i>
    <div data-i18n="Invoice">Invoice</div>
  </a>
  <ul class="menu-sub">
    <li class="menu-item">
      <a href="invoice-list.html" class="menu-link">
        <div data-i18n="List">List</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="invoice-edit.html" class="menu-link">
        <div data-i18n="Edit">Edit</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="invoice-add.html" class="menu-link">
        <div data-i18n="Add">Add</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="invoice.html" class="menu-link">
        <div data-i18n="Preview">Preview</div>
      </a>
    </li>

    
  </ul>
</li>  -->

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-plus"></i>
          <div data-i18n="Services">Services</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="new-services.html" class="menu-link">
              <div data-i18n="New Services">New Services</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="services-list.html" class="menu-link">
              <div data-i18n="Services List">Services List </div>
            </a>
          </li>

          
        </ul>
      </li>

      <!-- e-commerce-app menu start -->
    <li class="menu-item open active">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-shopping-cart"></i>
          <div data-i18n="Product Management">Product Management</div>
        </a>
        <ul class="menu-sub">
          
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Products">Products</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="product-list.html" class="menu-link">
                  <div data-i18n="Product List">Product List</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="add-product.html" class="menu-link">
                  <div data-i18n="Add Product">Add Product</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="category-list.html" class="menu-link">
                  <div data-i18n="Category List">Category List</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="Order">Order</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="order-list.html" class="menu-link">
                  <div data-i18n="Order List">Order List</div>
                </a>
              </li>
              <li class="menu-item active">
                <a href="order-details.html" class="menu-link">
                  <div data-i18n="Order Details">Order Details</div>
                </a>
              </li>
            </ul>
          </li>
   
        </ul>
      </li>


     
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-layout-board"></i>
          <div data-i18n="Coupon">Coupon</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="new-coupon.html" class="menu-link">
              <div data-i18n="New Coupon">New Coupon</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="coupon-list.html" class="menu-link">
              <div data-i18n="Coupon List">Coupon List</div>
            </a>
          </li>    
        </ul>
      </li>



 
     
      <!-- Academy menu start -->
    
      <!-- Academy menu end 
     
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-file-dollar"></i>
          <div data-i18n="Invoice">Invoice</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="app-invoice-list.html" class="menu-link">
              <div data-i18n="List">List</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-invoice-preview.html" class="menu-link">
              <div data-i18n="Preview">Preview</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-invoice-edit.html" class="menu-link">
              <div data-i18n="Edit">Edit</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-invoice-add.html" class="menu-link">
              <div data-i18n="Add">Add</div>
            </a>
          </li>
        </ul>
      </li>-->


      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-users"></i>
          <div data-i18n="Client">Client</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="new-client.html" class="menu-link">
              <div data-i18n="New Client">New Client</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="client-list.html" class="menu-link">
              <div data-i18n="Client List">Client List</div>
            </a>
          </li>

          
        </ul>
      </li>





      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-user"></i>
          <div data-i18n="Staff">Staff</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="new-staff.html" class="menu-link">
              <div data-i18n="New Staff">New Staff</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="staff-list.html" class="menu-link">
              <div data-i18n="Staff List">Staff List</div>
            </a>
          </li>

          
        </ul>
      </li>


      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-map"></i>
          <div data-i18n="Branch">Branch</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="new-branch.html" class="menu-link">
              <div data-i18n="New Branch">New Branch</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="branch-list.html" class="menu-link">
              <div data-i18n="Branch List">Branch List</div>
            </a>
          </li>

          
        </ul>
      </li>
    


      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-file-description"></i>
          <div data-i18n="Expenses">Expenses</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="new-expense.html" class="menu-link">
              <div data-i18n="New Expense">New Expense</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="expense-list.html" class="menu-link">
              <div data-i18n="Expense List">Expense List</div>
            </a>
          </li>

          
        </ul>
      </li>




      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-id"></i>
          <div data-i18n="Loyalty Rewards">Loyalty Rewards</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="new-loyalty.html" class="menu-link">
              <div data-i18n="New Loyalty Reward">New Loyalty Reward</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="loyalty-list.html" class="menu-link">
              <div data-i18n="Loyalty Rewards List">Loyalty Rewards List</div>
            </a>
          </li>

          
        </ul>
      </li>


      
   
   


      <li class="menu-item">
        <a href="reports.html" class="menu-link">
          <i class="menu-icon icon-base ti tabler-table"></i>
          <div data-i18n="Reports">Reports</div>
        </a>
      </li>


      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon icon-base ti tabler-settings"></i>
          <div data-i18n="Users">Users</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="new-user.html" class="menu-link">
              <div data-i18n="New User">New User</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="users-list.html" class="menu-link">
              <div data-i18n="Users List">Users List</div>
            </a>
          </li>

          
        </ul>
      </li>

      <li class="menu-item">
        <a href="system-settings.html" class="menu-link">
            <i class="menu-icon icon-base ti tabler-adjustments"></i>
            <div data-i18n="System Settings">System Settings</div>
        </a>
    </li>



      <li class="menu-item">
        <a href="login.html" class="menu-link">
          <i class="menu-icon icon-base ti tabler-logout"></i>
          <div data-i18n="Logout">Logout</div>
        </a>
      </li>




 
    </ul>
    
  
</aside>
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
                <a href="invoice-list.html" class="stretched-link">Invoice App</a>
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
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
    <div class="d-flex flex-column justify-content-center">
      <div class="mb-1"><span class="h5">Order #32543 </span><span class="badge bg-label-success me-1 ms-2">Paid</span> <span class="badge bg-label-info">Ready to Pickup</span></div>
      <p class="mb-0">Aug 17, <span id="orderYear"></span>, 5:48 (ET)</p>
    </div>
    <div class="d-flex align-content-center flex-wrap gap-2">
      <button class="btn btn-label-danger delete-order">Delete Order</button>
    </div>
  </div>

  <!-- Order Details Table -->

  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card mb-6">
        <div class="card-datatable">
          <table class="datatables-order-details table">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th class="w-50">products</th>
                <th class="w-25">price</th>
                <th class="w-25">qty</th>
                <th>total</th>
              </tr>
            </thead>
<tbody>
</tbody>

          </table>

          
          <div class="d-flex justify-content-end align-items-center m-6 mb-2">
            <div class="order-calculations">
              <div class="d-flex justify-content-start mb-2">
                <span class="w-px-100 text-heading">Subtotal:</span>
                <h6 class="mb-0">$2093</h6>
              </div>
              <div class="d-flex justify-content-start mb-2">
                <span class="w-px-100 text-heading">Discount:</span>
                <h6 class="mb-0">$2</h6>
              </div>
              <div class="d-flex justify-content-start mb-2">
                <span class="w-px-100 text-heading">Tax:</span>
                <h6 class="mb-0">$28</h6>
              </div>
              <div class="d-flex justify-content-start">
                <h6 class="w-px-100 mb-0">Total:</h6>
                <h6 class="mb-0">$2113</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-6">
        <div class="card-header">
          <h5 class="card-title m-0">Shipping activity</h5>
        </div>
        <div class="card-body pt-1">
          <ul class="timeline pb-0 mb-0">
            <li class="timeline-item timeline-item-transparent border-primary">
              <span class="timeline-point timeline-point-primary"></span>
              <div class="timeline-event">
                <div class="timeline-header">
                  <h6 class="mb-0">Order was placed (Order ID: #32543)</h6>
                  <small class="text-body-secondary">Tuesday 11:29 AM</small>
                </div>
                <p class="mt-3">Your order has been placed successfully</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-primary">
              <span class="timeline-point timeline-point-primary"></span>
              <div class="timeline-event">
                <div class="timeline-header">
                  <h6 class="mb-0">Pick-up</h6>
                  <small class="text-body-secondary">Wednesday 11:29 AM</small>
                </div>
                <p class="mt-3 mb-3">Pick-up scheduled with courier</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-primary">
              <span class="timeline-point timeline-point-primary"></span>
              <div class="timeline-event">
                <div class="timeline-header">
                  <h6 class="mb-0">Dispatched</h6>
                  <small class="text-body-secondary">Thursday 11:29 AM</small>
                </div>
                <p class="mt-3 mb-3">Item has been picked up by courier</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-primary">
              <span class="timeline-point timeline-point-primary"></span>
              <div class="timeline-event">
                <div class="timeline-header">
                  <h6 class="mb-0">Package arrived</h6>
                  <small class="text-body-secondary">Saturday 15:20 AM</small>
                </div>
                <p class="mt-3 mb-3">Package arrived at an Amazon facility, NY</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-dashed">
              <span class="timeline-point timeline-point-primary"></span>
              <div class="timeline-event">
                <div class="timeline-header">
                  <h6 class="mb-0">Dispatched for delivery</h6>
                  <small class="text-body-secondary">Today 14:12 PM</small>
                </div>
                <p class="mt-3 mb-3">Package has left an Amazon facility, NY</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-transparent pb-0">
              <span class="timeline-point timeline-point-secondary"></span>
              <div class="timeline-event pb-0">
                <div class="timeline-header">
                  <h6 class="mb-0">Delivery</h6>
                </div>
                <p class="mt-1 mb-0">Package will be delivered by tomorrow</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="card mb-6">
        <div class="card-header">
          <h5 class="card-title m-0">Customer details</h5>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-start align-items-center mb-6">
            <div class="avatar me-3">
              <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
            </div>
            <div class="d-flex flex-column">
              <a href="app-user-view-account.html" class="text-body text-nowrap">
                <h6 class="mb-0">Shamus Tuttle</h6>
              </a>
              <span>Customer ID: #58909</span>
            </div>
          </div>
          <div class="d-flex justify-content-start align-items-center mb-6">
            <span class="avatar rounded-circle bg-label-success me-3 d-flex align-items-center justify-content-center"><i class="icon-base ti tabler-shopping-cart icon-lg"></i></span>
            <h6 class="text-nowrap mb-0">12 Orders</h6>
          </div>
          <div class="d-flex justify-content-between">
            <h6 class="mb-1">Contact info</h6>
            <h6 class="mb-1"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editUser">Edit</a></h6>
          </div>
          <p class=" mb-1">Email: Shamus889@yahoo.com</p>
          <p class=" mb-0">Mobile: +1 (609) 972-22-22</p>
        </div>
      </div>

      <div class="card mb-6">
        <div class="card-header d-flex justify-content-between">
          <h5 class="card-title m-0">Shipping address</h5>
          <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
        </div>
        <div class="card-body">
          <p class="mb-0">45 Roker Terrace <br />Latheronwheel <br />KW5 8NW,London <br />UK</p>
        </div>
      </div>
      <div class="card mb-6">
        <div class="card-header d-flex justify-content-between">
          <h5 class="card-title m-0">Billing address</h5>
          <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
        </div>
        <div class="card-body">
          <p class="mb-6">45 Roker Terrace <br />Latheronwheel <br />KW5 8NW,London <br />UK</p>
          <h5 class="mb-1">Mastercard</h5>
          <p class="mb-0">Card Number: ******4291</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Edit User Information</h4>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        <form id="editUserForm" class="row g-6" onsubmit="return false">
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserFirstName">First Name</label>
            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" value="John" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLastName">Last Name</label>
            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" value="Doe" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalEditUserName">Username</label>
            <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="johndoe007" value="johndoe007" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Email</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" value="example@domain.com" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Status</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="select2 form-select" aria-label="Default select example">
              <option selected>Status</option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              <option value="3">Suspended</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Tax ID</label>
            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" value="123 456 7890" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
            <div class="input-group">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" value="202 555 0111" />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLanguage">Language</label>
            <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
              <option value="">Select</option>
              <option value="english" selected>English</option>
              <option value="spanish">Spanish</option>
              <option value="french">French</option>
              <option value="german">German</option>
              <option value="dutch">Dutch</option>
              <option value="hebrew">Hebrew</option>
              <option value="sanskrit">Sanskrit</option>
              <option value="hindi">Hindi</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserCountry">Country</label>
            <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India" selected>India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="col-12">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="editBillingAddress" />
              <label for="editBillingAddress" class="switch-label">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-3">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->

  <!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="address-title mb-2">Add New Address</h4>
          <p class="address-subtitle">Add new address for express delivery</p>
        </div>
        <form id="addNewAddressForm" class="row g-6" onsubmit="return false">
          <div class="col-12 form-control-validation">
            <div class="row">
              <div class="col-md mb-md-0 mb-4">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioHome">
                    <span class="custom-option-body">
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" d="M16.625 23.625V16.625H11.375V23.625H4.37501V12.6328C4.37437 12.5113 4.39937 12.391 4.44837 12.2798C4.49737 12.1686 4.56928 12.069 4.65939 11.9875L13.4094 4.03592C13.5689 3.88911 13.7778 3.80762 13.9945 3.80762C14.2113 3.80762 14.4202 3.88911 14.5797 4.03592L23.3406 11.9875C23.4287 12.0706 23.4992 12.1706 23.548 12.2814C23.5969 12.3922 23.6231 12.5117 23.625 12.6328V23.625H16.625Z" />
                        <path
                          d="M23.625 23.625V12.6328C23.623 12.5117 23.5969 12.3922 23.548 12.2814C23.4992 12.1706 23.4287 12.0706 23.3406 11.9875L14.5797 4.03592C14.4202 3.88911 14.2113 3.80762 13.9945 3.80762C13.7777 3.80762 13.5689 3.88911 13.4094 4.03592L4.65937 11.9875C4.56926 12.069 4.49736 12.1686 4.44836 12.2798C4.39936 12.391 4.37436 12.5113 4.375 12.6328V23.625M1.75 23.625H26.25M16.625 23.625V17.5C16.625 17.2679 16.5328 17.0454 16.3687 16.8813C16.2046 16.7172 15.9821 16.625 15.75 16.625H12.25C12.0179 16.625 11.7954 16.7172 11.6313 16.8813C11.4672 17.0454 11.375 17.2679 11.375 17.5V23.625"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                      <span class="custom-option-title">Home</span>
                      <small> Delivery time (9am – 9pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked />
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-4">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioOffice">
                    <span class="custom-option-body">
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" d="M15.75 23.625V4.375C15.75 4.14294 15.6578 3.92038 15.4937 3.75628C15.3296 3.59219 15.1071 3.5 14.875 3.5H4.375C4.14294 3.5 3.92038 3.59219 3.75628 3.75628C3.59219 3.92038 3.5 4.14294 3.5 4.375V23.625" />
                        <path
                          d="M1.75 23.625H26.25M15.75 23.625V4.375C15.75 4.14294 15.6578 3.92038 15.4937 3.75628C15.3296 3.59219 15.1071 3.5 14.875 3.5H4.375C4.14294 3.5 3.92038 3.59219 3.75628 3.75628C3.59219 3.92038 3.5 4.14294 3.5 4.375V23.625M24.5 23.625V11.375C24.5 11.1429 24.4078 10.9204 24.2437 10.7563C24.0796 10.5922 23.8571 10.5 23.625 10.5H15.75M7 7.875H10.5M8.75 14.875H12.25M7 19.25H10.5M19.25 19.25H21M19.25 14.875H21"
                          stroke-opacity="0.9"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                      <span class="custom-option-title"> Office </span>
                      <small> Delivery time (9am – 5pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 form-control-validation col-md-6">
            <label class="form-label" for="modalAddressFirstName">First Name</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John" />
          </div>
          <div class="col-12 form-control-validation col-md-6">
            <label class="form-label" for="modalAddressLastName">Last Name</label>
            <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressCountry">Country</label>
            <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
            <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
            <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">Landmark</label>
            <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressCity">City</label>
            <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">State</label>
            <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressZipCode">Zip Code</label>
            <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950" />
          </div>
          <div class="col-12">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="billingAddress" />
              <label for="billingAddress" class="form-switch-label">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-3">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Address Modal -->

</div>
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
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
  <script src="../../assets/vendor/libs/cleave-zen/cleave-zen.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>

    <!-- Main JS -->
    
      <script src="../../assets/js/main.js"></script>
    

    <!-- Page JS -->
    <script src="../../assets/js/order-details.js"></script>
  <script src="../../assets/js/modal-edit-user.js"></script>
  <script src="../../assets/js/modal-add-new-address.js"></script>
  <script src="../../assets/order-details.json"></script>
    
  </body>

<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-ecommerce-order-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:26:20 GMT -->
</html>

  <!-- beautify ignore:end -->

