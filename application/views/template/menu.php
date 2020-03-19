<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- End Navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="3" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light">KWI XXX</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="<?php echo base_url('mahasiswa'); ?>" class="nav-link">
              <i class="nav-icon fa fa-bank"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('mahasiswa/form'); ?>" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p class="text">Form Pendaftaran</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('mahasiswa/kelompok'); ?>" class="nav-link">
              <i class="nav-icon fa fa-bell"></i>
              <p>Kelompok</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('welcome/logout'); ?>" class="nav-link">
              <i class="nav-icon fa fa-undo"></i>
              <p>Keluar</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>