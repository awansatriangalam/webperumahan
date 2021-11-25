<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown ">
            <a href="#" class="nav-link nav-link-lg nav-link-user">
                <div class="d-sm-none d-lg-inline-block">
                  Selamat Datang <?php echo $this->session->userdata('nama_user') ?>
                </div>
            </a>            
          </li>
        </ul>
      </nav>
    </div>
  </div>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper"> 
          <div class="sidebar-brand">
            <a href="<?php echo base_url('admin/dashboard') ?>">Web Perumahan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url('admin/dashboard') ?>">WP</a>
          </div>
          <ul class="sidebar-menu">
            <li>
                <a class="nav-link" href="<?php echo base_url('admin/dashboard')?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
              </li>
              <li>
                <a class="nav-link" href="<?php echo base_url('admin/data_rumah')?>"><i class="fas fa-home"></i> <span>Data Rumah</span></a>
              </li>
              <li>
                <a class="nav-link" href="<?php echo base_url('admin/data_type')?>"><i class="fas fa-grip-horizontal"></i> <span>Data Tipe</span></a>
              </li>
              <li>
                <a class="nav-link" href="<?php echo base_url('admin/data_customer')?>"><i class="fas fa-user"></i> <span>Data Customer</span></a>
              </li>
              <li>
                <a class="nav-link" href="<?php echo base_url('admin/transaksi')?>"><i class="fas fa-random"></i> <span>Transaksi</span></a>
              </li>
              <li>
                <a class="nav-link" href="<?php echo base_url('admin/laporan')?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a>
              </li>
              <hr>
              <li>
                <?php if ($this->session->userdata('email')) { ?>
                  <a class="nav-link" href="<?php echo base_url('admin/profil')?>"><i class="fas fa-user"></i> <span>Profil</span></a>
                  <a class="nav-link" href="<?php echo base_url('admin/profil/ganti_password')?>"><i class="fas fa-lock"></i> <span>Ganti Password</span></a>
                <?php } ?>
              </li>
              <li>
                    <?php if ($this->session->userdata('email')) { ?>
                      <a class="nav-link" href="<?php echo base_url('authn/logout')?>"><i class="fas fa-sign-out-alt"></i> <span>Keluar</span></a>
                    <?php } else { ?>
                      <a class="nav-link" href="<?php echo base_url('authn')?>"><i class="fas fa-sign-in-alt"></i> <span>Masuk</span></a>
                    <?php }?>
              </li>
            </ul>
        </aside>
      </div>
