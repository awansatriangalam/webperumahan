 <!-- Page Title #1
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="<?php echo base_url() ?>assets/assets_homepage/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>Detail Rumah</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo base_url('welcome')?>">Beranda</a></li>
                                    <li class="active">Detail Rumah</li>
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

        <!-- property single gallery
============================================= -->
        <section id="property-single-gallery" class="property-single-gallery">
            <div class="container">
                <div class="row">
                    <?php foreach($detail as $dt):?>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="property-single-gallery-info">
                                <div class="property--info clearfix">
                                    <div class="pull-left">
                                        <h5 class="property--title"><?php echo $dt->nama_rumah?></h5>
                                        <p class="property--location"><?php echo $dt->lokasi?></p>
                                    </div>
                                    <div class="pull-right">
                                        <span class="property--status">
                                                <?php
                                                    if ($dt->status == "0"){
                                                        echo "<span class='btn btn-sm btn-danger' disable> Terisi
                                                        </span>";
                                                    }elseif($dt->status == "1"){
                                                        echo anchor('customer/booking/add/'.$dt->id_rumah, '<button class="btn btn-sm btn-success "><i class="fa fa-book"></i>  Booking</button>');
                                                    }else{
                                                        echo "<span class='btn btn-sm btn-warning' disable> Di Booking
                                                        </span>";
                                                    }
                                                ?>
                                        </span>
                                        <p class="property--price">Rp.<?php echo $dt->harga?></p>
                                    </div>
                                </div>
                                <!-- .property-info end -->
                                <div class="property--meta clearfix">
                                    <div class="pull-left">
                                        <ul class="list-unstyled list-inline mb-0">
                                            <li>
                                                ID Rumah:<span class="value"><?php echo $dt->id_rumah?></span>
                                            </li>
                                            <li>
                                                Status:<span class="value"><?php 
                                                    if ($dt->status == "0"){
                                                        echo "<span style='color:red;font-weight:bold'> Terisi
                                                        </span>";
                                                    }elseif($dt->status == "1"){
                                                        echo "<span style='color:blue;font-weight:bold'> Tersedia
                                                        </span>";
                                                    }else{
                                                        echo "<span style='color:orange;font-weight:bold'> Dibooking
                                                        </span>";
                                                    }
                                                    ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pull-right">
                                        <div class="property--meta-share">
                                            <span class="share--title">Bagikan</span>
                                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                                        </div>
                                        <!-- .property-meta-share end -->
                                    </div>
                                </div>
                                <!-- .property-info end -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            <div class="property-single-carousel inner-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="heading">
                                            <h2 class="heading--title">Gambar</h2>
                                        </div>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="property-single-carousel-content">
                                            <div class="carousel carousel-thumbs ">
                                                <img src="<?php echo base_url('assets/upload/' .$dt->gambar) ?>" alt="Property Image" style="width:800px ; height:400px">
                                            </div>
                                            <!-- .carousel end -->
                                        </div>
                                        <!-- .col-md-12 end -->
                                    </div>
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .property-single-desc end -->
                            <div class="property-single-desc inner-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="heading">
                                            <h2 class="heading--title">Deskripsi</h2>
                                        </div>
                                    </div>
                                    <!-- feature-panel #1 -->
                                    <div class="col-xs-6 col-sm-4 col-md-4">
                                        <div class="feature-panel">
                                            <div class="feature--img">
                                                <img src="<?php echo base_url() ?>assets/assets_homepage/images/property-single/features/1.png" alt="icon">
                                            </div>
                                            <div class="feature--content">
                                                <h5>Luas Bangunan:</h5>
                                                <p><?php echo $dt->luas_bangunan?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature-panel end -->
                                    <!-- feature-panel #2 -->
                                    <div class="col-xs-6 col-sm-4 col-md-4">
                                        <div class="feature-panel">
                                            <div class="feature--img">
                                                <img src="<?php echo base_url() ?>assets/assets_homepage/images/property-single/features/2.png" alt="icon">
                                            </div>
                                            <div class="feature--content">
                                                <h5>Kamar Tidur:</h5>
                                                <p><?php echo $dt->kamar_tidur?> Kamar Tidur</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature-panel end -->
                                    <!-- feature-panel #3 -->
                                    <div class="col-xs-6 col-sm-4 col-md-4">
                                        <div class="feature-panel">
                                            <div class="feature--img">
                                                <img src="<?php echo base_url() ?>assets/assets_homepage/images/property-single/features/3.png" alt="icon">
                                            </div>
                                            <div class="feature--content">
                                                <h5>Kamar Mandi:</h5>
                                                <p><?php echo $dt->kamar_mandi?> Kamar Mandi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature-panel end -->
                                    <!-- feature-panel #4 -->
                                    <div class="col-xs-6 col-sm-4 col-md-4">
                                        <div class="feature-panel">
                                            <div class="feature--img">
                                                <img src="<?php echo base_url() ?>assets/assets_homepage/images/property-single/features/4.png" alt="icon">
                                            </div>
                                            <div class="feature--content">
                                                <h5>Ruangan:</h5>
                                                <p><?php echo $dt->ruangan?> Ruangan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature-panel end -->
                                    <!-- feature-panel #5 -->
                                    <div class="col-xs-6 col-sm-4 col-md-4">
                                        <div class="feature-panel">
                                            <div class="feature--img">
                                                <img src="<?php echo base_url() ?>assets/assets_homepage/images/property-single/features/5.png" alt="icon">
                                            </div>
                                            <div class="feature--content">
                                                <h5>Lantai:</h5>
                                                <p><?php echo $dt->lantai?> Lantai</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature-panel end -->
                                    <!-- feature-panel #6 -->
                                    <div class="col-xs-6 col-sm-4 col-md-4">
                                        <div class="feature-panel">
                                            <div class="feature--img">
                                                <img src="<?php echo base_url() ?>assets/assets_homepage/images/property-single/features/6.png" alt="icon">
                                            </div>
                                            <div class="feature--content">
                                                <h5>Garasi:</h5>
                                                <p><?php echo $dt->garasi?> Garasi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- feature-panel end -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="property--details">
                                            <p><?php echo $dt->deskripsi?></p>
                                        </div>
                                        <!-- .property-details end -->
                                    </div>
                                    <!-- .col-md-12 end -->
                                </div>
                                <!-- .row end -->
                            </div>

                            <div class="property-single-location inner-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="heading">
                                            <h2 class="heading--title">Lokasi</h2>
                                        </div>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <ul class="list-unstyled mb-20">
                                            <li><span>Perumahan:</span><?php echo $dt->lokasi?></li>
                                            <li><span>Kota:</span><?php echo $dt->kota?></li>
                                            <li><span>Kode Pos:</span><?php echo $dt->kode_pos?></li>
                                            <li><span>Alamat:</span><?php echo $dt->alamat?></li>
                                        </ul>
                                    </div>
                                    <!-- .col-md-12 end -->

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                            <img src="<?php echo base_url('assets/upload/'.$dt->map)  ?>" style="width: 100%; "></br></br></br>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31611.59250865201!2d112.62164239022164!3d-7.952458695757812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788271ef5219e1%3A0xf848ce90b308e5f9!2sPerumahan%20Istana%20Gajayana!5e0!3m2!1sid!2sid!4v1638342358264!5m2!1sid!2sid" width="670" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <!-- .col-md-12 end -->
                                </div>
                                <!-- .row end -->
                            </div>
                            
                            <!-- .property-single-leave-review end -->
                        </div>
                        <!-- .col-md-8 -->
                        <div class="col-xs-12 col-sm-12 col-md-4">  
                            <div class="widget widget-featured-property">
                                <div class="widget--title">
                                    <h5>Terbaru</h5>
                                </div>
                                <div class="widget--content">
                                    <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                                        <?php foreach($rumah as $rm):?>    
                                            <!-- .property-item #1 -->
                                            <div class="property-item">
                                                <div class="property--img">
                                                    <img src="<?php echo base_url('assets/upload/' .$rm->gambar) ?>" alt="property image" class="img-responsive">
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
                                                </div>
                                            </div>
                                            <!-- .property item end -->
                                        <?php endforeach;?>
                                    </div>
                                    <!-- .carousel end -->
                                </div>
                            </div>

                            <div class="widget widget-property-agent">
                                <div class="widget--title">
                                    <h5>Komentar</h5>
                                </div>
                                <div class="widget--content">
                                    <div class="carousel slide" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="false" data-space="0" >
                                        <?php foreach($ulas as $ul):?>
                                            <ul class="property-review">  
                                                <li class="review-comment">
                                                    <div class="avatar">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <div class="comment">
                                                        <h6><?php echo $ul->nama_user ?></h6>
                                                        <p><?php echo $ul->ulasan ?></p>
                                                    </div>
                                                </li> 
                                            </ul>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="widget widget-mortgage-calculator">
                                <div class="widget--title">
                                    <h5>Tinggalkan Komentar</h5>
                                </div>
                                <div class="widget--content">
                                    <form  class="mb-0" method="POST" action="<?php echo base_url('customer/dashboard/kirim_ulasan')?>">
                                        <div class="row">
                                            <div>                                        
                                                <div class="form-group">
                                                    <label>Komentar*</label>
                                                    <input type="hidden" name="id_rumah" value="<?php echo $dt->id_rumah?>">
                                                    <?php foreach ($customer as $cs):?>
                                                    <input type="hidden" name="nama_user" value="<?php echo $cs->nama_user?>">
                                                    <input type="hidden" name="email" value="<?php echo $cs->email?>">
                                                    <?php endforeach;?>
                                                    <textarea class="form-control" type="text" name="ulasan" required></textarea>
                                                </div>                                               
                                                <button type="submit" class="btn btn-success">Kirim</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-4 -->
                    <?php endforeach;?>
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #property-single end -->