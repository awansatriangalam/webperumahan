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
                            <h1>Ubah Profil</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('customer/dashboard')?>">Beranda</a></li>
                            <li class="active">Ubah Profil</li>
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
                            <li><a href="<?php echo base_url('customer/dashboard/ubah_profil/').$cs->id_customer ?>"><i class="fa fa-edit"></i> Ubah Profil</a></li>
                            <li><a href="<?php echo base_url('customer/dashboard/favorit/').$cs->id_customer?>"><i class="fa fa-heart"></i> Favorit</a></li>
                        </ul>
                    <?php endforeach;?>
                </div>
            </div>
            <!-- .col-md-4 -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <form class="mb-0" method="POST" action="<?php echo base_url('customer/dashboard/ubah_profil_aksi') ?>">
                    <?php foreach( $customer as $cs) : ?>
                        <div class="form-box">
                            <h4 class="form--title">Ubah Profil</h4>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
                                <input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>">
                                <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
                            </div>
                            <div class="form-group">
                                <label>Nama Pengguna</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $cs->username ?>">
                                <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
                                <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
                            </div>
                            <div class="form-group">
                                <label>No Telepon</label>
                                <input type="text" name="no_tlp" class="form-control" value="<?php echo $cs->no_tlp ?>">
                                <?php echo form_error('no_tlp','<span class="text-small text-danger">','</span>') ?>
                            </div>
                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="text" name="no_ktp" class="form-control" value="<?php echo $cs->no_ktp ?>">
                                <?php echo form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
                            </div>
                            <div class="form-group">
                                <label>Katasandi</label>
                                <input type="text" name="pass" class="form-control" value="<?php echo $cs->pass ?>">
                                <?php echo form_error('pass','<span class="text-small text-danger">','</span>') ?>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
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