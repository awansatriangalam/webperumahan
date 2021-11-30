<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Rumah </h1>
          </div>
          <?php echo $this->session->flashdata('pesan') ?>
            <div class="row">
            <div class="col-md-6">
            <a href="<?php echo base_url('admin/data_rumah/tambah_rumah') ?>" class="btn btn-primary mb-3">
            Tambah Data</a>

            
            </div>
            <div class=" col-md-5" >
                <?php echo form_open('admin/data_rumah/search') ?>
                <input type="text" name="keyword" class="form-control" placeholder="Cari">
            </div>
            <div class="navbar-form navbar-right">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close() ?>
            </div>
            </div>
          <table class="table table-hover table-striped table-responsive ">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Type</th>
                    <th>Luas Bangunan</th>
                    <th>Status</th>
                    <th>Lokasi</th>
                    <th>Harga</th>
                    <th width="150px">Aksi</th>
                  </tr>
              </thead>
                <tbody> 
                    <?php
                        $no=1;
                        foreach($data_rumah as $rm) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td>
                                    <img width="100px" src="<?php echo base_url().'assets/upload/' .$rm->gambar ?>">
                                </td>
                                <td><?php echo $rm->nama_rumah ?></td>
                                <td><?php echo $rm->kode_type ?></td>
                                <td><?php echo $rm->luas_bangunan ?></td>
                                <td><?php 
                                if ($rm->status == "0"){
                                    echo "<span class='badge badge-danger'> Diisi
                                    </span>";
                                }else{
                                    echo "<span class='badge badge-primary'> Tersedia
                                    </span>";
                                }
                                ?></td>
                                <td><?php echo $rm->lokasi ?></td>
                                <td>Rp.<?php echo $rm->harga ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/data_rumah/detail_rumah/') .$rm->id_rumah ?>" class="btn btn-sm btn-success"><i class="
                                    fas fa-eye"></i></a>
                                    <a href="<?php echo base_url('admin/data_rumah/delete_rumah/') .$rm->id_rumah ?>" class="btn btn-sm btn-danger"><i class="
                                    fas fa-trash"></i></a>
                                    <a href="<?php echo base_url('admin/data_rumah/update_rumah/') .$rm->id_rumah ?>" class="btn btn-sm btn-primary"><i class="
                                    fas fa-edit"></i></a>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
          </table>
</section>
</div>