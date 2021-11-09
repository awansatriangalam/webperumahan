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
                        <div class="col-md-5">
                            <img src="<?php echo base_url(). 'assets/upload/' .$dt->gambar ?>" style="width: 150%; ">
                        </div>
                        <div>
                            <table class="table">
                                <div class="col-md-6">
                                <tr>
                                    <td>Nama Rumah</td>
                                    <td><?php echo $dt->nama_rumah ?></td>
                                </tr>
                                <tr>
                                    <td>Tipe Rumah</td>
                                    <td>
                                    <?php 
                                        if ($dt->kode_type = "36") {
                                            echo "Middle";
                                        } elseif($dt->kode_type = "45") {
                                            echo "Middle Low";
                                        }elseif ($dt->kode_type = "60") {
                                            echo "Middle Up";
                                        }else{
                                            echo "<span class='text-danger'>Tipe rumah belum terdaftar
                                            </span>";
                                        }
 
                                        ?>
                                        </td>
                                </tr>
                                 <tr>
                                    <td>Luas Bangunan</td>
                                    <td><?php echo $dt->luas_bangunan ?></td>
                                </tr>
                                 <tr>
                                    <td>Lokasi</td>
                                    <td><?php echo $dt->nama_rumah ?></td>
                                </tr>
                                 <tr>
                                    <td>Kamar Tidur</td>
                                    <td><?php echo $dt->kamar_tidur ?></td>
                                </tr>
                                 <tr>
                                    <td>Kamar Mandi</td>
                                    <td><?php echo $dt->kamar_mandi ?></td>
                                </tr>
                                </div>
                                 <tr>
                                    <td>Ruangan</td>
                                    <td><?php echo $dt->ruangan ?></td>
                                </tr>
                                 <tr>
                                    <td>Lantai</td>
                                    <td><?php echo $dt->lantai ?></td>
                                </tr>
                                <div class="col-md-10">
                                 <tr>
                                    <td>Garasi</td>
                                    <td><?php echo $dt->garasi ?></td>
                                </tr>
                                 <tr>
                                    <td>Deskripsi</td>
                                    <td><?php echo $dt->deskripsi ?></td>
                                </tr>
                                 <tr>
                                    <td>Alamat</td>
                                    <td><?php echo $dt->alamat ?></td>
                                </tr>
                                 <tr>
                                    <td>Kota</td>
                                    <td><?php echo $dt->kota ?></td>
                                </tr>
                                 <tr>
                                    <td>Kode Pos</td>
                                    <td><?php echo $dt->kode_pos ?></td>
                                </tr>
                                 <tr>
                                    <td>Harga</td>
                                    <td><?php echo $dt->harga ?></td>
                                </tr>
                                 <tr>
                                    <td>Status</td>
                                    <td><?php 
                                            if ($dt->status == "0"){
                                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                            }else{
                                                echo "<span class='badge badge-success'>Tersedia</span>";
                                            }

                                        ?>    
                                    </td>
                                </tr>
                                </div>
                                 
                            </table>
                            <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_rumah') ?>">Kembali</a>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_rumah/update_rumah/'. $dt->id_rumah) ?>">Edit</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach;  ?>
</div>