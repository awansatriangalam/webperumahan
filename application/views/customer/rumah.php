<section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="slider--content">
                        <div class="text-center">
                            <h1></h1>
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
                                                    <option value="12">High</option>
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
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="<?php echo base_url()?>assets/assets_homepage/images/slider/slide-bg/1.jpg" alt="background">
            </div>
        </div>
    </section>
        <!-- #map end -->

        <!-- properties-list
============================================= -->
        <section id="properties-list">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- widget property type
=============================-->
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Tipe Rumah</h5>
                            </div>
                            <div class="widget--content">
                                <form method="GET" action="<?php echo base_url('customer/rumah/kat_tipe')?>"> 
                                    <select name="kode_type"  onchange="this.form.submit();">
                                        <option value="">Pilih Tipe</option>
                                        <option value="36">Middle</option>
                                        <option value="45">Middle Low</option> 
                                        <option value="60">Middle Up</option>
                                        <option value="12">High</option>                
                                    </select>
                                </form>
                            </div>
                        </div>
                        <!-- . widget property type end -->

                        <!-- widget property status
=============================-->
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Status Rumah</h5>
                            </div>
                            <div class="widget--content">
                                <form method="GET" action="<?php echo base_url('customer/rumah/kat_status')?>"> 
                                    <select name="status"  onchange="this.form.submit();">
                                        <option value="">Status</option>
                                        <option value="0">Terisi</option>
                                        <option value="1">Tersedia</option>                
                                        <option value="2">Dibooking</option>                
                                    </select>
                                </form>
                            </div>
                        </div>
                        <!-- . widget property status end -->

                        <!-- widget featured property
=============================-->
                        <div class="widget widget-featured-property">
                            <div class="widget--title">
                                <h5>Terbaru</h5>
                            </div>
                            <div class="widget--content">
                                <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                                    <!-- .property-item #1 -->
                                    <?php foreach ($rumah as $rm) :  ?>
                                    <!-- .property-item #1 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="<?php echo base_url('welcome/detail_rumah/') .$rm->id_rumah ?>">
                                                <img src="<?php echo base_url('assets/upload/' .$rm->gambar) ?>" alt="property image" class="img-responsive">
								            </a>
                                            <span class="property--status"><?php 
                                                if($rm->status == "0"){
                                                    echo "Terisi";
                                                }elseif($rm->status == "1"){
                                                    echo "Tersedia";
                                                }else{
                                                    echo "Sedang diBooking";
                                                }
                                                ?></span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="<?php echo base_url('welcome/detail_rumah/') .$rm->id_rumah ?>"><?php echo $rm->nama_rumah ?></a></h5>
                                                <p class="property--location"><?php echo $rm->lokasi ?></p>
                                                <p class="property--price"><?php echo $rm->harga ?></p>
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
                                    <!-- .property item end -->
                                </div>
                                <!-- .carousel end -->
                            </div>
                        </div>
                        <!-- . widget featured property end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="row">
                            <div class="properties properties-list">
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <?php foreach ($rumah as $rm) :  ?>
                                    <!-- .property-item #1 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="<?php echo base_url('welcome/detail_rumah/') .$rm->id_rumah ?>">
                                                <img src="<?php echo base_url('assets/upload/' .$rm->gambar) ?>" alt="property image" class="img-responsive">
								            </a>
                                            <span class="property--status"><?php 
                                                if($rm->status == "0"){
                                                    echo "Terisi";
                                                }elseif($rm->status == "1"){
                                                    echo "Tersedia";
                                                }else{
                                                    echo "Sedang diBooking";
                                                }
                                                ?></span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="<?php echo base_url('welcome/detail_rumah/') .$rm->id_rumah ?>"><?php echo $rm->nama_rumah ?></a></h5>
                                                <p class="property--location"><?php echo $rm->lokasi ?></p>
                                                <p class="property--price"><?php echo $rm->harga ?></p>
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
                                <!-- .property item end -->
                            </div>

                           
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #properties-list  end  -->

       