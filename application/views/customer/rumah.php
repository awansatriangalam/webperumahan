        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Model Rumah</h2><hr>
                    <h3 class="section-subheading text-muted">Berikut ini merupakan model-model rumah yang ada pada website kami ini</h3>
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