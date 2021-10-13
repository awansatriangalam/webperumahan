
    
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang di Website Kami!</div>
                <div class="masthead-subheading text-uppercase">Temukan Rumah Impian Anda Bersama Kami</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Baca Lebih Lanjut</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Layanan</h2>
                    <h3 class="section-subheading text-muted">Mengapa Harus Memilih Kami ?</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-user fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Nyaman</h4>
                        <p class="text-muted">
                            Kami akan melayani anda dengan sepenuh hati sampai anda benar-benar puas.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-paper-plane fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Cepat</h4>
                        <p class="text-muted">
                            Kami akan melayani anda dengan cepat dan tanggap selama 24 Jam.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Aman dan Terpercaya</h4>
                        <p class="text-muted">
                            Kami akan sebisa mungkin atau semaksimal mungkin untuk tetap menjaga kerahasiaan anda atau privasi
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Rumah</h2>
                    <h3 class="section-subheading text-muted"></h3>
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
                                <div class="portfolio-hover-content">Harga <?php echo $rm->harga ?></div>
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
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang Kami</h2>
                    <h3 class="section-subheading text-muted">Informasi Mengenai Website Kami</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Awal Mula Terbentuk</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Kami memulai karir ini berawal pada tahun 2009 banyak brosur bertebaran yang berisi promosi-promosi sebuah rumah. Nah, bermula pada si Paijo yang membawa brosur tentang perumahan, dari itu si Adi berpikir dan mengemukakan pendapatnya tentang membuat suatu website untuk lebih memudahkan orang dalam memasarkan perumahannya. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Maret 2011</h4>
                                <h4 class="subheading">Lahirlah Sebuah Website Ini</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Maret tanggal 25 2011, awal mula kami meng-online kan website ini.Website yang dibuat oleh tim yang terdiri dari 3 orang yaitu Adia,Paijo, dan Basit.Mulanya website ini tidak sebegitu ramai karena orang-orang masih memakai cara lama, akan tetapi lama kemudian orang-orang sadar akan teknologi.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Desember 2015</h4>
                                <h4 class="subheading">Pelayanan Dengan Transaksi Yang Sudah Up To Date</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Desember 2015 merupakan bulan yang indah untuk website ini, dikarenakan pada bulan ini website Adhirekayasha City untuk pertama kalinya bisa melayanai transaksi dengan bergaya modern yang sudah update seperti khalayak-khalayak website luar negeri pada umumnya.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Juli2020</h4>
                                <h4 class="subheading">Melakukan Ekspansi Karena Banyak Sponsor Ingin Mengajak Kerja Sama</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Pada Juli 2020 tanggal 12 lebih tepatnya merupakan sebuah pergerakan besar yang dilakukan oleh Adhirekayasha City ini.Mengapa tidak, karena pada tanggal itu banyak perusahaan-perusahaan besar yang ingin mengajak kerja sama dengan kami hingga kami harus bisa melakukan banyak perubahan terhadap Perusahaan kami ini.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Mari Menjadi
                                <br />
                                Bagian dari
                                <br />
                                Cerita Kami!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kontak Kami</h2>
                    <h3 class="section-subheading text-muted">Anda dapat menghubungi kami lewat .</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nama *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Harus Diisi.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Nomor Telepon *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor Telepon Harus Diisi.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Pesan Anda *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        
