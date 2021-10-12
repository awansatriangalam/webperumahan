<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Rumah Baru</h1>
          </div>

            <a href="<?php echo base_url('admin/data_rumah/tambah_rumah') ?>" class="btn btn-primary mb-3">
            Tambah Data</a>

            <?php echo $this->session->flashdata('pesan') ?>

          <table class="table table-hover table-striped table-borderes">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Type</th>
                    <th>Luas Bangunan</th>
                    <th>Luas Tanah</th>
                    <th>Interior</th>
                    <th>Deskripsi</th>
                    <th>Kamar Tidur</th>
                    <th>Kamar Mandi</th>
                    <th>Status</th>
                    <th>Harga</th>
                    <th width="150px">Aksi</th>
                  </tr>
              </thead>
                <tbody> 
                    <?php
                        $no=1;
                        foreach($rumah as $rm) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td>
                                    <img width="75px" src="<?php echo base_url().'assets/upload/' .$rm->gambar ?>">
                                </td>
                                <td><?php echo $rm->nama_rumah ?></td>
                                <td><?php echo $rm->kode_type ?></td>
                                <td><?php echo $rm->luas_bangunan ?></td>
                                <td><?php echo $rm->luas_tanah ?></td>
                                <td><?php echo $rm->interior ?></td>
                                <td><?php echo $rm->deskripsi ?></td>
                                <td><?php echo $rm->kamar_tidur ?></td>
                                <td><?php echo $rm->kamar_mandi ?></td>
                                <td><?php 
                                if ($rm->status == "0"){
                                    echo "<span class='badge badge-danger'> Telah Diisi
                                    </span>";
                                }else{
                                    echo "<span class='badge badge-primary'> Tersedia
                                    </span>";
                                }
                                ?></td>
                                <td><?php echo $rm->harga ?></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-succes"><i class="
                                    fas fa-eye"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="
                                    fas fa-trash"></i></a>
                                    <a href="" class="btn btn-sm btn-primary"><i class="
                                    fas fa-edit"></i></a>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
          </table>
</section>
</div>