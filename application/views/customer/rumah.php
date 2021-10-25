<section id="map" class="hero-map pt-0 pb-0">
            <div class="container-fluid pr-0 pl-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <img src="<?php echo base_url()?>assets/assets_homepage/images/slider/slide-bg/3.jpg" alt="background">
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
            <div class="search-properties">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <form method="get" action="<?php echo base_url('customer/pencarian')?>" class="mb-0 " >
                                <div class="form-box ">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="lokasi">
                                                        <option>Semua Lokasi</option>
                                                        <option value="perumahan 1">Perumahan 1</option>
                                                        <option value="perumahan 2">Perumahan 2</option>                                                      
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="kode_type">
                                                        <option>Rumah Tipe</option>
                                                        <option value="36">Middle</option>
                                                        <option value="45">Middle Low</option>
                                                        <option value="60">Middle Up</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="status">
                                                        <option>Semua Status</option>
                                                        <option value="0">Diisi</option>
                                                        <option value="1">Dijual</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="submit" value="Search" name="submit" class="btn btn--primary btn--block mb-30">
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="kamar_tidur">
                                                    <option>Kamar Tidur</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="kamar_mandi" >
                                                        <option>Kamar Mandi</option>
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
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
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
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Middle <span></span></a>
                                    </li>
                                    <li>
                                        <a href="#">Middle Low <span></span></a>
                                    </li>
                                    <li>
                                        <a href="#">Middle Up <span></span></a>
                                    </li>
                                </ul>
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
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Telah Terisi <span></span></a>
                                    </li>
                                    <li>
                                        <a href="#">Belum Terisi <span></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- . widget property status end -->

                        <!-- widget featured property
=============================-->
                        <div class="widget widget-featured-property">
                            <div class="widget--title">
                                <h5>Featured Properties</h5>
                            </div>
                            <div class="widget--content">
                                <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                                    <!-- .property-item #1 -->
                                    <?php foreach ($rumah as $rm) :  ?>
                                    <!-- .property-item #1 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="<?php echo base_url('customer/dashboard/detail_rumah/') .$rm->id_rumah ?>">
                                                <img src="<?php echo base_url('assets/upload/' .$rm->gambar) ?>" alt="property image" class="img-responsive">
								            </a>
                                            <span class="property--status"><?php 
                                                if ($rm->status == "0"){
                                                    echo "<span> Telah Terisi
                                                    </span>";
                                                }else{
                                                    echo "<span> Tersedia
                                                    </span>";
                                                }
                                                ?></span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="<?php echo base_url('customer/dashboard/detail_rumah/') .$rm->id_rumah ?>"><?php echo $rm->nama_rumah ?></a></h5>
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
                                            <a href="<?php echo base_url('customer/dashboard/detail_rumah/') .$rm->id_rumah ?>">
                                                <img src="<?php echo base_url('assets/upload/' .$rm->gambar) ?>" alt="property image" class="img-responsive">
								            </a>
                                            <span class="property--status"><?php 
                                                if ($rm->status == "0"){
                                                    echo "<span> Telah Diisi
                                                    </span>";
                                                }else{
                                                    echo "<span> Tersedia
                                                    </span>";
                                                }
                                                ?></span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="<?php echo base_url('customer/dashboard/detail_rumah/') .$rm->id_rumah ?>"><?php echo $rm->nama_rumah ?></a></h5>
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

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-50">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                            </a>
                                    </li>
                                </ul>
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

       