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
                                    <h1>Form Booking</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo base_url('customer/dashboard')?>">Beranda</a></li>
                                    <li class="active">Form Booking</li>
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
<section id="add-property" class="add-property">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <?php foreach($detail as $dt):?>
                            <form class="mb-0" method="POST" action="<?php echo base_url('customer/booking/add_aksi')?>">
                                <div class="form-box">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <h4 class="form--title">Detail Rumah</h4>
                                        </div>
                                        <!-- .col-md-12 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="property-title">Nama Rumah</label>
                                                <input type="hidden" name="id_rumah" value="<?php echo $dt->id_rumah ?>">
                                                <input type="text" class="form-control" name="nama_rumah" value="<?php echo $dt->nama_rumah ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="property-description">Harga</label>
                                                <input type="text" class="form-control" name="harga" value="<?php echo $dt->harga ?>" readonly>                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <label for="property-description">Tanggal Transaksi</label>
                                                <input type="date" class="form-control" name="tanggal_transaksi">                                            
                                            </div>
                                        </div>
                                        <!-- .col-md-12 end -->
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="property-description">Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi" id="property-description" rows="2" readonly><?php echo $dt->deskripsi ?></textarea>
                                            </div>
                                        </div>
                                        <!-- .col-md-12 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <?php foreach($tipe as $tp): ?>
                                                    <label>Tipe</label>
                                                    <input type="hidden" value="id_type" value="<?php echo $tp->id_type ?>">
                                                    <input type="text" class="form-control" name="nama_type" value="<?php echo $tp->nama_type ?>" readonly>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="select-status">Status</label>
                                                <input type="text" class="form-control" name="status" value="<?php 
                                                if ($dt->status == "0"){
                                                    echo "Diisi";
                                                }else{
                                                    echo "Tersedia";
                                                }
                                                ?>" readonly>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="location">Lokasi</label>
                                                <input type="text" class="form-control" name="lokasi" value="<?php echo $dt->lokasi ?>" readonly>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="Bedrooms">Kamar Tidur</label>
                                                <input type="text" class="form-control" name="kamar_tidur" value="<?php echo $dt->kamar_tidur ?> Kamar Tidur" readonly>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="Bathrooms">Kamar Mandi</label>
                                                <input type="text" class="form-control" name="kamar_mandi" value="<?php echo $dt->kamar_mandi ?> Kamar Mandi" readonly>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="Floors">Lantai</label>
                                                <input type="text" class="form-control" name="lantai" value="<?php echo $dt->lantai ?> Lantai" readonly>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="Garages">Garasi</label>
                                                <input type="text" class="form-control" name="garasi" value="<?php echo $dt->garasi ?> Garasi" readonly>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="Area">Luas Bangunan</label>
                                                <input type="text" class="form-control" name="luas_bangunan" id="Area" value="<?php echo $dt->luas_bangunan ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="Property-ID">ID Rumah</label>
                                                <input type="text" class="form-control" name="id_rumah" value="<?php echo $dt->id_rumah ?>" readonly>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                    
                                    </div>
                                    <!-- .row end -->
                                </div>

                                <div class="form-box">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <h4 class="form--title">Lokasi Rumah</h4>
                                        </div>
                                        <!-- .col-md-12 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="address">Lokasi</label>
                                                <input type="text" class="form-control" name="address" value="<?php echo $dt->lokasi ?>" readonly>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="city">Alamat</label>
                                                <input class="form-control" name="city" value="<?php echo $dt->alamat ?>" readonly>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="state">Kota</label>
                                                <input type="text" class="form-control" name="state"value="<?php echo $dt->kota ?>" readonly>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- .form-box end -->
                                <input type="submit" value="Booking"  class="btn btn--primary">
                            </form>
                        <?php endforeach;?>

                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>