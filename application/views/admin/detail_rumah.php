<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Detail Rumah </h1>
        </div>            
    </section>


    <?php foreach ($detail as $dt ) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo base_url('assets/upload/'.$dt->gambar)  ?>" style="width: 100%; ">
                        <button style="width:48%" type="button" class="btn btn-sm btn-secondary mt-3" data-toggle="modal"  data-target=".bd-example-modal-lg">
                           <i class="fa fa-map-marker-alt"></i> Lihat Alamat
                        </button>
                        <button style="width:50%" type="button" class="btn btn-sm btn-secondary mt-3" data-toggle="modal" data-target="#exampleModal2">
                           <i class="fa fa-image"></i> Lihat Gambar
                        </button>
                        <div class="mt-3">
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_rumah') ?>">Kembali</a>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_rumah/update_rumah/'. $dt->id_rumah) ?>">Edit</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-hover table-striped ">
                            <tr>
                                <td>Nama Rumah</td>
                                <td><?php echo $dt->nama_rumah ?></td>
                            
                                <td>Tipe Rumah</td>
                                <td>
                                <?php
                                    if ($dt->kode_type == "36"){
                                        echo "<span  style='color:green;font-weight:bold'> Middle</span>";
                                    }elseif ($dt->kode_type == "45"){
                                        echo "<span  style='color:green;font-weight:bold'> Middle Low</span>";
                                    }elseif ($dt->kode_type == "60") {
                                        echo "<span  style='color:green;font-weight:bold'> Middle Up</span>";
                                    }else{
                                        echo "<span  style='color:red;font-weight:bold'> Tipe Belum Terdaftar</span>";
                                    }

                                ?></td>  

                                <td>Luas Bangunan</td>
                                <td><?php echo $dt->luas_bangunan ?></td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td><?php echo $dt->lokasi ?></td>

                                <td>Kamar Tidur</td>
                                <td><?php echo $dt->kamar_tidur ?></td>
                            
                                <td>Kamar Mandi</td>
                                <td><?php echo $dt->kamar_mandi ?></td>
                            </tr>
                            <tr>
                                <td>Ruangan</td>
                                <td><?php echo $dt->ruangan ?></td>
                            
                                <td>Lantai</td>
                                <td><?php echo $dt->lantai ?></td>
                            
                                <td>Garasi</td>
                                <td><?php echo $dt->garasi ?></td>   
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?php echo $dt->alamat ?></td>
                            
                                <td>Kota</td>
                                <td><?php echo $dt->kota ?></td>
                            
                                <td>Kode Pos</td>
                                <td><?php echo $dt->kode_pos ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><?php echo $dt->harga ?></td>
                            
                                <td>Status</td>
                                <td><?php 
                                        if ($dt->status == "0"){
                                            echo "<span class='badge badge-danger'>Terisi</span>";
                                        }elseif ($dt->status == "1"){
                                            echo "<span class='badge badge-success'>Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-warning'>Dibooking</span>";
                                        }

                                    ?>    
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-15">
                       <table class="table table-hover table-striped ">
                            <td>Deskripsi</td>
                            <td><?php echo $dt->deskripsi ?></td>        
                       </table>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach;  ?>
</div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-image"></i> Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo base_url('assets/upload/'.$dt->map)  ?>" style="width: 100%; ">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-image"></i> Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo base_url('assets/upload/'.$dt->gambar)  ?>" style="width: 100%; ">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>