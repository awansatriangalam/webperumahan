
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang di Website Kami!</div>
                <div class="masthead-subheading"><h2>Temukan Rumah Impian Anda Bersama Kami</h2></div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#rekomendasi">Baca Lebih Lanjut</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Layanan</h2><hr>
                    <h3 class="section-subheading text-muted">Mengapa Harus Memilih Kami ?</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-dark"></i>
                            <i class="fas fa-user fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Nyaman</h4>
                        <p class="text-muted">
                            Kami akan melayani anda dengan sepenuh hati sampai anda benar-benar puas.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-dark"></i>
                            <i class="fas fa-paper-plane fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Cepat</h4>
                        <p class="text-muted">
                            Kami akan melayani anda dengan cepat dan tanggap selama 24 Jam.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-dark"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Aman dan Terpercaya</h4>
                        <p class="text-muted">
                            Kami akan sebisa mungkin atau semaksimal mungkin untuk tetap menjaga kerahasiaan atau privasi anda
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-light" id="rekomendasi">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Rekomendasi Rumah</h2><hr>
                    <h3 class="section-subheading text-muted">Inilah beberapa rekomendasi rumah dari kami untuk anda</h3>
                </div>
                <div class="row">
                <?php foreach($rumah as $rm) : ?>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#">                       
                                <img class="img-fluid" src="<?php echo base_url('assets/upload/' .$rm->gambar) ?>" 
                                alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $rm->nama_rumah ?></div>
                                <div class="portfolio-hover-content btn btn-primary">Harga <?php echo $rm->harga ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $rm->deskripsi ?></div>
                            </div>
                            <div class="portofolio-footer">
                                <?php 
                                
                                if($rm->status=="0"){
                                    echo "<span class='btn btn-danger' disable>Telah Diisi</span>";
                                }else{
                                    echo anchor('customer/book/booking' .$rm->id_rumah,
                                    '<button class="btn btn-success">Pesan</button>');
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.microsoft.com/id-id"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url('assets/assets_homepage/') ?>assets/img/logos/microsoft.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.google.com/?hl=id"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url('assets/assets_homepage/') ?>assets/img/logos/google.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://id-id.facebook.com/"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url('assets/assets_homepage/') ?>assets/img/logos/facebook.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.ibm.com/id-en"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url('assets/assets_homepage/') ?>assets/img/logos/ibm.svg" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>
        