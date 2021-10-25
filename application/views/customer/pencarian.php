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
                                    <h1>Rumah</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo base_url('customer/dashboard')?>">Beranda</a></li>
                                    <li class="active">Rumah</li>
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
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="property-single-gallery-info">
                            <?php foreach($rumah as $rm):?>
                                <div class="property--info clearfix">
                                    <div class="pull-left">
                                        <h5 class="property--title"><?php echo $rm->nama_rumah ?></h5>
                                        <p class="property--location"><i class="fa fa-map-marker"></i><?php echo $rm->lokasi ?></p>
                                    </div>
                                    <div class="pull-right">
                                        <span class="property--status"><?php echo $rm->status ?></span>
                                        <p class="property--price"><?php echo $rm->harga ?></p>
                                    </div>
                                </div>
                            <?php endforeach;?>
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
                                        <h2 class="heading--title">Gallery</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="property-single-carousel-content">
                                        <div class="carousel carousel-thumbs slider-navs" data-slide="1" data-slide-res="1" data-autoplay="true" data-thumbs="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="800" data-slider-id="1">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/slider/1.jpg" alt="Property Image">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/slider/2.jpg" alt="Property Image">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/slider/3.jpg" alt="Property Image">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/slider/4.jpg" alt="Property Image">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/slider/5.jpg" alt="Property Image">
                                        </div>
                                        <!-- .carousel end -->
                                        <div class="owl-thumbs thumbs-bg" data-slider-id="1">
                                            <button class="owl-thumb-item">
								<img src="<?php echo base_url()?>assets/assets_homepage/images/properties/slider/thumbs/1.jpg" alt="Property Image thumb">
							</button>
                                            <button class="owl-thumb-item">
						   		<img src="<?php echo base_url()?>assets/assets_homepage/images/properties/slider/thumbs/2.jpg" alt="Property Image thumb">
						   </button>
                                            <button class="owl-thumb-item">
								<img src="<?php echo base_url()?>assets/assets_homepage/images/properties/slider/thumbs/3.jpg" alt="Property Image thumb">
							</button>
                                            <button class="owl-thumb-item">
								<img src="<?php echo base_url()?>assets/assets_homepage/images/properties/slider/thumbs/4.jpg" alt="Property Image thumb">
							</button>
                                            <button class="owl-thumb-item">
								<img src="<?php echo base_url()?>assets/assets_homepage/images/properties/slider/thumbs/5.jpg" alt="Property Image thumb">
							</button>
                                        </div>
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
                                        <h2 class="heading--title">Description</h2>
                                    </div>
                                </div>
                                <!-- feature-panel #1 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/property-single/features/1.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Area:</h5>
                                            <p>1270 sq ft</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #2 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/property-single/features/2.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Beds:</h5>
                                            <p>4 Bedrooms</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #3 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/property-single/features/3.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Baths:</h5>
                                            <p>2 Bathrooms</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #4 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/property-single/features/4.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Rooms:</h5>
                                            <p>6 Rooms</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #5 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/property-single/features/5.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Floors:</h5>
                                            <p>3 Floors</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #6 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/property-single/features/6.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Garage:</h5>
                                            <p>2 Garages</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="property--details">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.</p>
                                    </div>
                                    <!-- .property-details end -->
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-desc end -->


                        <div class="property-single-features inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Features</h2>
                                    </div>
                                </div>
                                <!-- feature-item #1 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Center Cooling</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #2 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Balcony</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #3 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Pet Friendly</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #4 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Fire Alarm</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #5 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Modern Kitchen</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #6 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Storage</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #7 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Heating</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #8 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Pool</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #9 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Laundry</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #10 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Gym</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #11 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Elevator</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                                <!-- feature-item #12 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-item">
                                        <p>Dish Washer</p>
                                    </div>
                                </div>
                                <!-- feature-item end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-features end -->

                        <div class="property-single-location inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Location</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <ul class="list-unstyled mb-20">
                                        <li><span>Address:</span>1220 Petersham Town</li>
                                        <li><span>City:</span>Sydney</li>
                                        <li><span>Country:</span>Australia</li>
                                        <li><span>State:</span>Newcastle</li>
                                        <li><span>Zip/Postal code:</span>54330</li>
                                    </ul>
                                </div>
                                <!-- .col-md-12 end -->

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div id="googleMap" style="width:100%;height:380px;"></div>
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-location end -->

                        <div class="property-single-design inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Floor Plans</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="accordion accordion-1" id="accordion01">
                                        <!-- Panel 01 -->
                                        <div class="panel">
                                            <div class="panel--heading clearfix">
                                                <div class="pull-left">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1">First Floor</a>
                                                </div>
                                                <div class="pull-right">
                                                    <ul class="list-unstyled list-inline mb-0">
                                                        <li><span>Size:</span>635 sq ft</li>
                                                        <li><span>Rooms:</span>3</li>
                                                        <li><span>Baths:</span>1</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="collapse01-1" class="panel--body panel-collapse collapse in">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat.</p>
                                                <img src="<?php echo base_url()?>assets/assets_homepage/images/property-single/1.png" alt="img" class="img-responsive">
                                            </div>
                                        </div>
                                        <!-- .panel end -->
                                        <!-- Panel 02 -->
                                        <div class="panel">
                                            <div class="panel--heading clearfix">
                                                <div class="pull-left">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2">Second Floor</a>
                                                </div>
                                                <div class="pull-right">
                                                    <ul class="list-unstyled list-inline mb-0">
                                                        <li><span>Size:</span>635 sq ft</li>
                                                        <li><span>Rooms:</span>3</li>
                                                        <li><span>Baths:</span>1</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="collapse01-2" class="panel--body panel-collapse collapse">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat.</p>
                                                <img src="<?php echo base_url()?>assets/assets_homepage/images/property-single/1.png" alt="img" class="img-responsive">
                                            </div>
                                        </div>
                                        <!-- .panel end -->
                                    </div>
                                    <!-- End .Accordion-->
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-design end -->

                        <div class="property-single-video inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Video</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="video--content text-center">
                                        <div class="bg-section">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/video/1.jpg" alt="Background" />
                                        </div>
                                        <div class="video--button">
                                            <div class="video-overlay">
                                                <div class="pos-vertical-center">
                                                    <a class="popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                            <i class="fa fa-youtube-play"></i>  
                                        </a>
                                                </div>
                                            </div>
                                            <!-- .video-player end -->
                                        </div>
                                    </div>
                                    <!-- .video-content end -->
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-video end -->

                        <div class="property-single-reviews inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">3 Reviews</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <ul class="property-review">
                                        <li class="review-comment">
                                            <div class="avatar">R</div>
                                            <div class="comment">
                                                <h6>Ryan Printz</h6>
                                                <div class="date">Feb 12, 2018</div>
                                                <div class="property-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                            </div>
                                        </li>
                                        <!-- comment end -->
                                        <li class="review-comment">
                                            <div class="avatar">S</div>
                                            <div class="comment">
                                                <h6>Steve Martin</h6>
                                                <div class="date">Jan 16, 2018</div>
                                                <div class="property-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                            </div>
                                        </li>
                                        <!-- comment end -->
                                        <li class="review-comment">
                                            <div class="avatar">N</div>
                                            <div class="comment">
                                                <h6>Nicole Smith</h6>
                                                <div class="date">Nov 25, 2017</div>
                                                <div class="property-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                            </div>
                                        </li>
                                        <!-- comment end -->
                                    </ul>
                                    <!-- .comments-list end -->
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-reviews end -->

                        <div class="property-single-leave-review inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Leave a Review</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <form id="post-comment" class="mb-0">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="review-name">Your Name*</label>
                                                    <input type="text" class="form-control" name="review-name" id="review-name" required>
                                                </div>
                                            </div>
                                            <!-- .col-md-4 end -->
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="review-email">Your Email*</label>
                                                    <input type="email" class="form-control" name="review-email" id="review-email" required>
                                                </div>
                                            </div>
                                            <!-- .col-md-4 end -->
                                            <!-- .col-md-4 end -->
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label>Rating*</label>
                                                    <div class="property-rating">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col-md-4 end -->

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="review-comment">Review*</label>
                                                    <textarea class="form-control" id="review-comment" rows="2" required></textarea>
                                                </div>
                                            </div>
                                            <!-- .col-md-12 -->
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <button type="submit" class="btn btn--primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-leave-review end -->
                    </div>
                    <!-- .col-md-8 -->
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- widget property agent
=============================-->
                        <div class="widget widget-property-agent">
                            <div class="widget--title">
                                <h5>About Agent</h5>
                            </div>
                            <div class="widget--content">
                                <a href="#">
                                    <div class="agent--img">
                                        <img src="<?php echo base_url()?>assets/assets_homepage/images/agents/grid/7.jpg" alt="agent" class="img-responsive">
                                    </div>
                                    <div class="agent--info">
                                        <h5 class="agent--title">Matt Peters</h5>
                                    </div>
                                </a>
                                <!-- .agent-profile-details end -->
                                <div class="agent--contact">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-phone"></i>(950) 491-570-180</li>
                                        <li><i class="fa fa-envelope-o"></i>support@example.com</li>
                                        <li><i class="fa fa-link"></i>modernhouse.com</li>
                                    </ul>
                                </div>
                                <!-- .agent-contact end -->
                                <div class="agent--social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <!-- .agent-social-links -->
                            </div>
                        </div>
                        <!-- . widget property agent end -->

                        <!-- widget request
=============================-->
                        <div class="widget widget-request">
                            <div class="widget--title">
                                <h5>Request a Showing</h5>
                            </div>
                            <div class="widget--content">
                                <form class="mb-0">
                                    <div class="form-group">
                                        <label for="contact-name">Your Name*</label>
                                        <input type="text" class="form-control" name="contact-name" id="contact-name" required>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="contact-email">Email Address*</label>
                                        <input type="email" class="form-control" name="contact-email" id="contact-email" required>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="contact-phone">Phone Number</label>
                                        <input type="text" class="form-control" name="contact-phone" id="contact-phone" placeholder="(optional)">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="message">Message*</label>
                                        <textarea class="form-control" name="contact-message" id="message" rows="2" placeholder="(optional)"></textarea>
                                    </div>
                                    <!-- .form-group end -->
                                    <input type="submit" value="Send Request" name="submit" class="btn btn--primary btn--block">
                                </form>
                            </div>
                        </div>
                        <!-- . widget request end -->

                        <!-- widget featured property
=============================-->
                        <div class="widget widget-featured-property">
                            <div class="widget--title">
                                <h5>Featured Properties</h5>
                            </div>
                            <div class="widget--content">
                                <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                                    <!-- .property-item #1 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/13.jpg" alt="property image" class="img-responsive">
                                            <span class="property--status">For Rent</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title">House in Chicago</h5>
                                                <p class="property--location">1445 N State Pkwy, Chicago, IL 60610</p>
                                                <p class="property--price">$1200<span class="time">month</span></p>
                                            </div>
                                            <!-- .property-info end -->
                                        </div>
                                    </div>
                                    <!-- .property item end -->
                                    <!-- .property-item #2 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/2.jpg" alt="property image" class="img-responsive">
                                            <span class="property--status">For Rent</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="#">Villa in Oglesby Ave</a></h5>
                                                <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                                <p class="property--price">$130,000<span class="time">month</span></p>
                                            </div>
                                            <!-- .property-info end -->
                                        </div>
                                    </div>
                                    <!-- .property item end -->
                                    <!-- .property-item #3 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/3.jpg" alt="property image" class="img-responsive">
                                            <span class="property--status">For Sale</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                                <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                                <p class="property--price">$70,000</p>
                                            </div>
                                            <!-- .property-info end -->
                                        </div>
                                    </div>
                                    <!-- .property item end -->
                                </div>
                                <!-- .carousel end -->
                            </div>
                        </div>
                        <!-- . widget featured property end -->

                        <!-- widget mortgage calculator
=============================-->
                        <div class="widget widget-mortgage-calculator">
                            <div class="widget--title">
                                <h5>Mortage Calculator</h5>
                            </div>
                            <div class="widget--content">
                                <form class="mb-0">
                                    <div class="form-group">
                                        <label for="sale-price">Sale Price</label>
                                        <input type="text" class="form-control" name="sale-price" id="sale-price" placeholder="$">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="down-payment">Down Payment</label>
                                        <input type="text" class="form-control" name="down-payment" id="down-payment" placeholder="$">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="term">Term</label>
                                        <input type="text" class="form-control" name="term" id="term" placeholder="years">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="interest-rate">Interest Rate</label>
                                        <input type="text" class="form-control" name="interest-rate" id="interest-rate" placeholder="%">
                                    </div>
                                    <!-- .form-group end -->
                                    <input type="submit" value="Calculate" name="submit" class="btn btn--primary btn--block">
                                </form>
                            </div>
                        </div>
                        <!-- . widget mortgage calculator end -->
                    </div>
                    <!-- .col-md-4 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #property-single end -->


        <!-- properties-carousel
============================================= -->
        <section id="properties-carousel" class="properties-carousel pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2  mb-70">
                            <h2 class="heading--title">Similar Properties</h2>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                            <!-- .property-item #1 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/3.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Sale</span>
</a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                        <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                        <p class="property--price">$70,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">200 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #2 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/11.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Sale</span>
							</a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">Villa in Chicago IL</a></h5>
                                        <p class="property--location">1445 N State Pkwy, Chicago, IL 60610</p>
                                        <p class="property--price">$235,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">3</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">1120 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #3 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/5.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Rent</span>
							</a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">2750 House in Urban St.</a></h5>
                                        <p class="property--location">2750 Urban Street Dr, Anderson, IN 46011</p>
                                        <p class="property--price">$1,550<span class="time">month</span></p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">1390 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #4 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/4.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Sale</span>
							</a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">House in Kent Street</a></h5>
                                        <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                        <p class="property--price">$130,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">587 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #5 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/2.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Rent</span>
</a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">Villa in Oglesby Ave</a></h5>
                                        <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                        <p class="property--price">$130,000<span class="time">month</span></p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">4</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">3</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">800 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #6 -->
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="#">
                            <img src="<?php echo base_url()?>assets/assets_homepage/images/properties/3.jpg" alt="property image" class="img-responsive">
                            <span class="property--status">For Sale</span>
</a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                        <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                        <p class="property--price">$70,000</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                            <li><span class="feature">Area:</span><span class="feature-num">200 sq ft</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                            <!-- .property item end -->

                        </div>
                        <!-- .carousel end -->
                    </div>
                    <!-- .col-md-12 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>