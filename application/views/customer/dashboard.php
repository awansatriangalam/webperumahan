<!-- Hero Search
============================================= -->
    <section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="slider--content">
                        <div class="text-center">
                            <h1>Temukan Rumah Impian Anda</h1>
                        </div>
                        <form method="GET" action="<?php echo base_url('customer/rumah/filter')?>" class="mb-0 " >
                            <div class="form-box ">
                                <div class="row">
                                    <div class="col-xs-8 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="lokasi">
                                                    <option value="">Semua Lokasi</option>
                                                    <option value="Perumahan 1">Perumahan 1</option>
                                                    <option value="Perumahan 2">Perumahan 2</option>                                                      
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-8 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="kode_type">
                                                    <option value="">Semua Tipe Rumah</option>
                                                    <option value="36">Middle</option>
                                                    <option value="45">Middle Low</option>
                                                    <option value="60">Middle Up</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-8 col-sm-6 col-md-3">
                                    <div class="form-group">
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="kamar_tidur">
                                                    <option value="">Kamar Tidur</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-8 col-sm-6 col-md-3">
                                        <button type="submit" name="cari" class="btn btn-sm btn-primary btn--block mb-30"><i class="fa fa-search"></i> Cari</button>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-8 col-sm-6 col-md-3 option-hide">
                                        <div class="form-group">
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="kamar_mandi" >
                                                    <option value="">Kamar Mandi</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <a href="#" class="less--options">Pilihan Lanjut</a>
                                    </div>
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .form-box end -->
                        </form>
                    </div>
                </div>
                <!-- .container  end -->
            </div>
            <!-- .slider-text end -->
        </div>
        <div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
            <!-- Slide #1 -->
            <div class="slide--item bg-overlay bg-overlay-dark3">
                <div class="bg-section">
                    <img src="<?php echo base_url()?>assets/assets_homepage/images/slider/slide-bg/3.jpg" alt="background">
                </div>
            </div>
            <!-- .slide-item end -->
            <!-- Slide #2 -->
            <div class="slide--item bg-overlay bg-overlay-dark3">
                <div class="bg-section">
                    <img src="<?php echo base_url()?>assets/assets_homepage/images/slider/slide-bg/1.jpg" alt="background">
                </div>
            </div>
            <!-- .slide-item end -->
            <!-- Slide #3 -->
            <div class="slide--item bg-overlay bg-overlay-dark3">
                <div class="bg-section">
                    <img src="<?php echo base_url()?>assets/assets_homepage/images/slider/slide-bg/3.jpg" alt="background">
                </div>
            </div>
            <!-- .slide-item end -->
        </div>
    </section>
        <!-- #property-single-slider end -->

        <!-- properties-carousel
============================================= -->
        <section id="properties-carousel" class="properties-carousel pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">List Rumah Favorit</h2>
                            <p class="heading--desc">Berikut merupakan list rumah favorit dari kami</p>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                            <!-- .property-item #1 -->
                            <?php foreach( $rumah as $rm): ?>
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="<?php echo base_url('welcome/detail_rumah/').$rm->id_rumah ?>">
                                            <img src="<?php echo base_url('assets/upload/' .$rm->gambar) ?>" alt="property image" class="img-responsive">
                                            <span class="property--status"><?php 
                                                if ($rm->status == "0"){
                                                    echo "<span> Telah Terisi
                                                    </span>";
                                                }else{
                                                    echo "<span> Tersedia
                                                    </span>";
                                                }
                                                ?></span>   
                                        </a>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="<?php echo base_url('welcome/detail_rumah/') .$rm->id_rumah ?>"><?php echo $rm->nama_rumah ?></a></h5>
                                            <p class="property--location"><?php echo $rm->lokasi ?></p>
                                            <p class="property--price"> <?php echo $rm->harga ?></p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Kamar Tidur:</span><span class="feature-num"><?php echo $rm->kamar_tidur ?></span></li>
                                                <li><span class="feature">Kamar Mandi:</span><span class="feature-num"><?php echo $rm->kamar_mandi ?></span></li>
                                                <li><span class="feature">Luas Bangunan:</span><span class="feature-num"><?php echo $rm->luas_bangunan ?></span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- .carousel end -->
                    </div>
                    <!-- .col-md-12 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #properties-carousel  end  -->

        <!-- Feature
============================================= -->
        <section id="feature" class="feature feature-1 text-center bg-white pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Cara Mudah Mendapatkan Rumah</h2>
                            <p class="heading--desc">Dapatkan rumah impian anda dengan mudah menggunakan langkah berikut...</p>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- feature Panel #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="<?php echo base_url()?>assets/assets_homepage/images/features/icons/5.png" alt="icon img">
                            </div>
                            <div class="feature--content">
                                <h3>Cari Model Rumah</h3>
                                <p>Cari model rumah yang anda inginkan melalui pencarian diatas.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- feature Panel #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="<?php echo base_url()?>assets/assets_homepage/images/features/icons/6.png" alt="icon img">
                            </div>
                            <div class="feature--content">
                                <h3>Pilih Rumah Favorit</h3>
                                <p>Pilih rumah favorit yang diinginkan.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- feature Panel #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="<?php echo base_url()?>assets/assets_homepage/images/features/icons/7.png" alt="icon img">
                            </div>
                            <div class="feature--content">
                                <h3>Dapatkan Kunci</h3>
                                <p>Setelah mencapai kesepakatan dengan pihak perumahan, dapatkan kunci rumah anda.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- .feature end -->
        <!-- city-property
============================================= -->
        <!-- cta #1
============================================= -->
<section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="<?php echo base_url()?>assets/assets_homepage/images/cta/bg-1.jpg" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Join Bersama Kami & Dapatkan Kenyamanan Anda Sebagai Customer</h3>
                        <a href="<?php echo base_url('customer/kontak')?>" class="btn btn--primary">Kontak</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #cta1 end -->


