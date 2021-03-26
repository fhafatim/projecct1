

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
        </div>
        <div class="sidebar-brand-text mx-3">ICSB JEMBER</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_anggota') ?>">
          <i class="fas fa-fw fa-database"></i>
          <span>Data Anggota</span></a>
      </li>

      <li class="nav-item">
                        <a class="accordion-toggle collapsed toggle-switch nav-link" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Laporan</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a class="nav-link" href="<?php echo base_url('admin/laporan_sudah_legal/index') ?>">Daftar laporan <br>UMKM yang sudah <br>memiliki legalititas</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('admin/laporan_sudah_legal/indexbelum') ?>">Daftar laporan <br>UMKM yang belum <br>memiliki legalititas</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('admin/laporan_sudah_legal/indexproses') ?>">Daftar laporan <br>UMKM yang sedang dalam pengurusan memiliki legalititas</a></li>
                        </ul>
       </li>
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin/edit') ?>">
          <i class="fas fa-fw fa-database"></i>
          <span>Edit Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_admin') ?>">
          <i class="fas fa-fw fa-database"></i>
          <span>Setting Admin</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    


      <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

        

            
           
            <div class="topbar-divider d-none d-sm-block"></div>

          <ul class="na navbar-nav navbar-right">
            <?php if($this->session->userdata('email')) {?>
              <li><div>Selamat Datang <?php echo $this->session->userdata('email') ?></div></li>
              <li class="ml-2"><?php echo anchor('Auth','Keluar'); ?></li>
            <?php }  else{ ?>
              <li><?php echo anchor('Auth','Masuk'); ?></li>

            <?php } ?>

          </ul>

          </ul>

        </nav>
        <!-- End of Topbar -->