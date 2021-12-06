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
                    </div>
                    <div class="col-md-9">
                        <table class="table">
                            <tr>
                                <td>Nama Rumah :</td>
                                <td><?php echo $dt->nama_rumah ?></td>
                            
                                <td>Tipe Rumah :</td>
                                <td>
                                <?php 
                                    if ($dt->kode_type = "36") {
                                        echo "Middle";
                                    }elseif($dt->kode_type = "45") {
                                        echo "Middle Low";
                                    }elseif ($dt->kode_type = "60") {
                                        echo "Middle Up";
                                    }else{
                                        echo "<span class='text-danger'>Tipe rumah belum terdaftar
                                        </span>";
                                    }

                                    ?>
                                </td>  

                                <td>Luas Bangunan :</td>
                                <td><?php echo $dt->luas_bangunan ?></td>
                            </tr>
                            <tr>
                                <td>Lokasi :</td>
                                <td><?php echo $dt->lokasi ?></td>

                                <td>Kamar Tidur :</td>
                                <td><?php echo $dt->kamar_tidur ?></td>
                            
                                <td>Kamar Mandi :</td>
                                <td><?php echo $dt->kamar_mandi ?></td>
                            </tr>
                            <tr>
                                <td>Ruangan :</td>
                                <td><?php echo $dt->ruangan ?></td>
                            
                                <td>Lantai :</td>
                                <td><?php echo $dt->lantai ?></td>
                            
                                <td>Garasi :</td>
                                <td><?php echo $dt->garasi ?></td>   
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-15">
                        <table class="table">
                            <td>Alamat :</td>
                            <td><?php echo $dt->alamat ?></td>
                        
                            <td>Kota :</td>
                            <td><?php echo $dt->kota ?></td>
                        
                            <td>Kode Pos :</td>
                            <td><?php echo $dt->kode_pos ?></td>
                        
                            <td>Harga :</td>
                            <td><?php echo $dt->harga ?></td>
                        
                            <td>Status :</td>
                            <td><?php 
                                    if ($dt->status == "0"){
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    }else{
                                        echo "<span class='badge badge-success'>Tersedia</span>";
                                    }

                                ?>    
                            </td> 
                        </table>
                    </div>
                    <div class="col-md-10">
                       <table class="table">
                            <td>Deskripsi :</td>
                            <td><?php echo $dt->deskripsi ?></td>        
                       </table>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_rumah') ?>">Kembali</a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_rumah/update_rumah/'. $dt->id_rumah) ?>">Edit</a>
                    </div>     
                </div>
            </div>
        </div>

    <?php endforeach;  ?>
</div>