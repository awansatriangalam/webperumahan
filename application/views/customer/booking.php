<!-- Page Title #1
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="assets/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>Favorit</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="#">Beranda</a></li>
                                    <li class="active">Favorit</li>
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

        <!-- #favourite properties
============================================= -->
        <section id="my-properties" class="my-properties properties-list">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-4">
                        <div class="edit--profile-area">
                            <?php foreach($customer as $cs) :?>
                                <ul class="edit--profile-links list-unstyled mb-0">
                                    <li><a href="<?php echo base_url('customer/dashboard/profil/').$cs->id_customer?>"><i class="fa fa-user"></i> Profil Saya</a></li>
                                    <li><a href="<?php echo base_url('customer/booking/')?>"><i class="fa fa-heart"></i> Favorit</a></li>
                                </ul>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-7 col-md-8">
                        <!-- .property-item #1 -->
                        <div class="property-item">
                            <div class="property--img">
                                <a href="#">
                        <img src="assets/images/properties/8.jpg" alt="property image" class="img-responsive">
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
                                        <li><span class="feature">Beds:</span><span class="feature-num">3</span></li>
                                        <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                        <li><span class="feature">Area:</span><span class="feature-num">587 sq ft</span></li>
                                        <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-times"></i>Remove</a></li>
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
                        <img src="assets/images/properties/9.jpg" alt="property image" class="img-responsive">
                        <span class="property--status">For Rent</span>
						</a>
                            </div>
                            <div class="property--content">
                                <div class="property--info">
                                    <h5 class="property--title">Villa in Oglesby Ave.</h5>
                                    <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                    <p class="property--price">$1,800<span class="time">month</span></p>
                                </div>
                                <!-- .property-info end -->
                                <div class="property--features">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="feature">Beds:</span><span class="feature-num">4</span></li>
                                        <li><span class="feature">Baths:</span><span class="feature-num">3</span></li>
                                        <li><span class="feature">Area:</span><span class="feature-num">800 sq ft</span></li>
                                        <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-times"></i>Remove</a></li>
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
                        <img src="assets/images/properties/10.jpg" alt="property image" class="img-responsive">
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
                                        <li><span class="feature">Beds:</span><span class="feature-num">1</span></li>
                                        <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                        <li><span class="feature">Area:</span><span class="feature-num">500 sq ft</span></li>
                                        <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-times"></i>Remove</a></li>
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
                        <img src="assets/images/properties/11.jpg" alt="property image" class="img-responsive">
                        <span class="property--status">For Rent</span>
						</a>
                            </div>
                            <div class="property--content">
                                <div class="property--info">
                                    <h5 class="property--title">Villa in Chicago IL</h5>
                                    <p class="property--location">1445 N State Pkwy, Chicago, IL 60610</p>
                                    <p class="property--price">$235,000</p>
                                </div>
                                <!-- .property-info end -->
                                <div class="property--features">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="feature">Beds:</span><span class="feature-num">3</span></li>
                                        <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                        <li><span class="feature">Area:</span><span class="feature-num">1120 sq ft</span></li>
                                        <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-times"></i>Remove</a></li>
                                    </ul>
                                </div>
                                <!-- .property-features end -->
                            </div>
                        </div>
                        <!-- .property item end -->

                        <div class="mt-50 text--center">
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
                        <!-- .pagination end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #favourite properties  end -->