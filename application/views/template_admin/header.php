<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets_admin/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets_admin/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets_admin/plugins/daterangepicker/daterangepicker.css">

  <!-- Kalender -->
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?= base_url()  ?>assets_admin/calender/style.css">
  <link rel="stylesheet" href="<?= base_url()  ?>assets_admin/calender/theme.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Kalender -->

  <script src="<?= base_url() ?>assets_admin
    /plugins/jquery/jquery.min.js"></script>
  </head>

  <style type="text/css">
    body {

      font-family: 'Poppins', sans-serif;
    }
  </style>

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <div class="navbar-search-block">
         <!--  <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form> -->
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge" id="jml_inbox"></span>
        </a>
        <div id="inbox" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
         
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->



      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-bell"></i>
          <span class="badge badge-warning navbar-badge">0</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->



      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-sign-out-alt"></i>
          <!-- <span class="badge badge-warning navbar-badge">15</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Logout</span>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url() ?>login/logout" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Logout
            <!-- <span class="float-right text-muted text-sm">3 msins</span> -->
          </a>
          <div class="dropdown-divider"></div>

          <div class="dropdown-divider"></div>
          <!-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
      <!--   <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a> -->
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <center>
      <!-- <img src="<?= base_url() ?>assets_kurir/img/kurirku.png" alt="" style="height: 0px;" class="mt-3"> -->
    </center>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

          <h3 style="font-weight: bold; color: white; text-align: center;">ADMIN <i class="fas fa-shopping-bag"></i></h3>
        </div>
        <div class="info">
         <!--  <a href="#" class="d-block"><?= $this->session->userdata('id_store'); ?></a> -->
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="<?= base_url() ?>admin/" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url() ?>admin/data_produk" class="nav-link">
            <i class="nav-icon fas fa-cart-plus"></i>
            <p>
             Data Produk
             <span class="badge badge-info right"></span>
           </p>
         </a>
       </li>

       <li class="nav-item">
        <a href="<?= base_url() ?>admin/data_kategori" class="nav-link">
          <i class="nav-icon fas fa-list"></i>
          <p>
            Data Kategori Produk
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= base_url() ?>admin/data_user" class="nav-link">
          <i class="nav-icon fas fa-shopping-bag"></i>
          <p>
            Data User
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>

      
      <!-- <li class="nav-item">
        <a href="<?= base_url() ?>admin/data_order_hari_ini" class="nav-link">
          <i class="nav-icon fas fa-shopping-basket "></i>
          <p>
            Data Order Hari Ini
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li> -->


      <li class="nav-item">
        <a href="<?= base_url() ?>admin/data_order" class="nav-link">
          <i class="nav-icon fas fa-shopping-basket "></i>
          <p>
            Data Order
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>



      <li class="nav-item">
        <a href="<?= base_url() ?>admin/data_admin" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Data Admin
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>


    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


