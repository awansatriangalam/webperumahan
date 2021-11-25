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
                            <h1>Ubah Kata Sandi</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('customer/dashboard')?>">Beranda</a></li>
                            <li class="active">Ubah Kata Sandi</li>
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
            <?= form_open_multipart('customer/profil/ubah_sandi');?>

                <div class="form-box">
                    <h4 class="form--title">Ubah Kata Sandi</h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <div class="form-group">
                        <label>Kata Sandi Lama</label>
                        <input type="hidden" name="id_user" value="<?php echo $user['id_user'] ?>">
                        <input type="password" class="form-control" name="sandi_lama" id="sandi_lama">
                        <?php echo form_error('sandi_lama','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <!-- .form-group end -->
                    <div class="form-group">
                        <label>Kata Sandi Baru</label>
                        <input type="password" class="form-control" name="sandi_baru1" id="sandi_baru1">
                        <?php echo form_error('sandi_baru1','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <!-- .form-group end -->
                    <div class="form-group">
                        <label>Ulangi Kata Sandi Baru</label>
                        <input type="password" class="form-control" name="sandi_baru2" id="sandi_baru2">
                        <?php echo form_error('sandi_baru2','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <input type="submit" class="btn btn-sm btn-primary" value="Ubah Sandi">
                </div>
                        

            </form>
        </div>
        <!-- .col-md-8 end -->
    </div>
        <!-- .row end -->
    </div>
</section>
<!-- #user-profile  end -->