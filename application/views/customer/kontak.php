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
                            <h1>Kontak</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('welcome')?>">Beranda</a></li>
                            <li class="active">Kontak</li>
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

<!-- Contact #1
============================================= -->
<section id="contact" class="contact contact-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="heading heading-2 mb-55">
                    <h2 class="heading--title">Temukan Kami</h2>
                </div>
                <div class="contact-panel">
                    <h3>Alamat</h3>
                    <p>Jl.Sukamulia no.23, Malang, Jawa Timur, 65163</p>
                </div>
                <!-- .contact-panel -->
                <div class="contact-panel">
                    <h3>No.Telepon :</h3>
                    <p>(0341) 491 570 110</p>
                    <p>+62 525 240 310</p>
                </div>
                <!-- .contact-panel -->
                <div class="contact-panel">
                    <h3>Email:</h3>
                    <p>webperumahan@gmail.com</p>
                </div>
                <!-- .contact-panel -->
            </div>
            <!-- .col-md-3 end -->

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1 bg-white p-30 bg-white mx-a">
                <div id="googleMap" style="width:100%;height:370px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31611.59250865201!2d112.62164239022164!3d-7.952458695757812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788271ef5219e1%3A0xf848ce90b308e5f9!2sPerumahan%20Istana%20Gajayana!5e0!3m2!1sid!2sid!4v1638342358264!5m2!1sid!2sid" width="720" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
<!-- #contact  end -->

<!-- Contact #2
============================================= -->
<section id="contact2" class="contact contact-2 bg-white">
    <div class="container">
    <?php echo $this->session->flashdata('pesan') ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 mb-50">
                    <h2 class="heading--title">Kontak Kami</h2>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <form class="mb-0" method="POST" action="<?php echo base_url('customer/kontak/pesan') ?>">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama">
                                <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                                <?php echo form_error('email','<span class="text-small text-danger">','</span>') ?>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="text" name="no_tlp" class="form-control" placeholder="Nomor Telepon (Opsional)">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Pesan*</label>
                                <textarea class="form-control" name="pesan_"  rows="2" placeholder="Pesan"></textarea>
                                <?php echo form_error('pesan_','<span class="text-small text-danger">','</span>') ?>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="submit" value="Kirim Pesan"  class="btn btn--primary">
                        </div>
                        <!-- .col-md-12 -->
                    </div>
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
        <!-- #contact2  end -->

       