<!-- Page Title #1
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="<?php echo base_url()?>assets/assets_homepage/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>Profil Pengguna</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo base_url('customer/dashboard')?>">Beranda</a></li>
                                    <li class="active">Profil Pengguna</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->
<!-- #user-profile
============================================= -->
<section id="user-profile" class="user-profile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="edit--profile-area">
                            <?php foreach($customer as $cs) :?>
                                <ul class="edit--profile-links list-unstyled mb-0">
                                    <li><a href="<?php echo base_url('customer/dashboard/profil/').$cs->id_customer?>"><i class="fa fa-user"></i> Profil Saya</a></li>
                                    <li><a href="<?php echo base_url('customer/data_transaksi')?>"><i class="fa fa-random"></i> Transaksi</a></li>
                                </ul>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <form class="mb-0">
                            <?php foreach( $customer as $cs) : ?>
                                <div class="form-box">
                                    <h4 class="form--title">Detail Profil</h4>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $cs->nama?>"readonly>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label>Nama Pengguna</label>
                                        <input type="text" class="form-control" name="username" value="<?php echo $cs->username ?>"readonly>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="email" class="form-control" name="alamat" value="<?php echo $cs->alamat ?>"readonly>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input type="text" class="form-control" name="no_tlp" value="<?php echo $cs->no_tlp ?>"readonly>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label>No KTP</label>
                                        <input type="text" class="form-control" name="no_ktp" value="<?php echo $cs->no_ktp ?>"readonly>
                                    </div>
                                    <!-- .form-group end -->
                                </div>
                            <?php endforeach;?>
                        </form>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
        <!-- #user-profile  end -->