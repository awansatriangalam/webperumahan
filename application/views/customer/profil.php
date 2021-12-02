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
                                    <li><a href="<?php echo base_url('welcome')?>">Beranda</a></li>
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
                                <ul class="edit--profile-links list-unstyled mb-0">
                                    <li><a href="<?php echo base_url('customer/profil')?>"><i class="fa fa-user"></i> Profil Saya</a></li>
                                    <li><a href="<?php echo base_url('customer/profil/ubah_sandi')?>"><i class="fa fa-lock"></i> Ubah Kata Sandi</a></li>
                                    <li><a href="<?php echo base_url('customer/data_transaksi/')?>"><i class="fa fa-random"></i> Transaksi</a></li>
                                </ul>
                        </div>
                    </div>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <form>
                            <div class="form-box">
                                <h4 class="form--title">Detail Profil</h4>
                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <img style="width:180px" src="<?php echo base_url('assets/assets_stisla/assets/img/profil/') .$user['gambar_user'] ?>" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <a href="<?php echo base_url('customer/profil/ubah_profil')?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Ubah Profil</a>
                                    </div>
                                </div><hr>
                                <div class="row">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="hidden" name="id_user" value="<?php echo $user['id_user'] ?>">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $user['nama_user'] ?>"readonly>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email_customer" value="<?php echo $user['email'] ?>"readonly>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="username" value="<?php echo $user['alamat_user'] ?>"readonly>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input type="text" class="form-control" name="no_tlp" value="<?php echo $user['no_tlp'] ?>"readonly>
                                    </div>
                                </div>
                                <!-- .form-group end -->
                            </div>
                        </form>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
        <!-- #user-profile  end -->