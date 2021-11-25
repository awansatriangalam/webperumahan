<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Real Estate html5 template">
    <link href="<?php echo base_url()?>assets/assets_homepage/images/favicon/favicon.png" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="<?php echo base_url()?>assets/assets_homepage/css/external.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/assets_homepage/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/assets_homepage/css/style.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Web | Perumahan</title>
</head>

<body>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
            <nav id="primary-menu" class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="<?php echo base_url('customer/dashboard') ?>"><i class="fa fa-home"></i> Web Perumahan</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                        <ul class="nav navbar-nav nav-pos-center navbar-left">
                            <!-- Home Menu -->
                            <li><a href="<?php echo base_url('welcome')?>" >Beranda</a></li>
                            <li><a href="<?php echo base_url('customer/rumah')?>" >Rumah</a></li>
                            <li><a href="<?php echo base_url('customer/tentang')?>" >Tentang</a></li>
                            <li><a href="<?php echo base_url('customer/kontak')?>" >Kontak</a> </li>                              
                        </ul>
                        <!-- Module Signup  -->
                        <div class="module module-login pull-left">
                            <?php if ($this->session->userdata('email')) { ?>
                                <a class="pull-left" href="<?php echo base_url('customer/profil/')?> "><span class="btn-popup"><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama_user') ?></span></a>
                            <?php } else { ?>
                                <a class="pull-left" href="<?php echo base_url()?> "><span class="btn-popup"></span></a>
                            <?php } ?>
                        </div>
                        <!-- Module Consultation  -->
                        <div class="module module-property pull-left">
                            <?php if ($this->session->userdata('email')) { ?>
                                <a class="pull-left" href="<?php echo base_url('authn/logout')?> "><span class="btn btn-sm btn-warning"><i class="fa fa-sign-out"></i>Keluar</span></a>
                            <?php } else { ?>
                                <a class="pull-left" href="<?php echo base_url('authn')?> "><span class="btn"><i class="fa fa-sign-in"></i> Masuk</span></a>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
