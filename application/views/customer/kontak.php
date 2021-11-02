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
                                    <h1>Kontak</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="#">Beranda</a></li>
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

                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1 bg-white p-30 bg-white">
                        <div id="googleMap" style="width:100%;height:370px;"></div>
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
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Nama*</label>
                                        <input type="text" class="form-control" name="nama" >
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Alamat Email*</label>
                                        <input type="email" class="form-control" name="email" >
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input type="text" class="form-control" name="no_tlp" >
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Pesan*</label>
                                        <textarea class="form-control" name="pesan_"  rows="2"></textarea>
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

       