<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown ">
            <a href="#" class="nav-link nav-link-lg nav-link-user">
                <div class="d-sm-none d-lg-inline-block">
                  Selamat Datang <?php echo $this->session->userdata('nama') ?>
                </div>
            </a>            
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Web Perumahan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">WP</a>
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
              <li>
                    <?php if ($this->session->userdata('nama')) { ?>
                      <a class="nav-link" href="<?php echo base_url('auth/logout')?>"><i class="fas fa-sign-out-alt"></i> <span>Keluar</span></a>
                    <?php } else { ?>
                      <a class="nav-link" href="<?php echo base_url('auth/login')?>"><i class="fas fa-sign-in-alt"></i> <span>Masuk</span></a>
                    <?php } ?>
              </li>
            </ul>
        </aside>
      </div>
