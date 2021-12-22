<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Tipe Rumah Baru</h1>
        </div>
        
            <div class="row">
            <div class="col-md-6">   
        <a class="btn btn-primary mb-3" href="<?php echo base_url('admin/data_type/tambah_type')?>">
            Tambah Tipe</a>
            </div>
        <?php echo $this->session->flashdata('pesan') ?>
            <div class=" col-md-5" >
                <?php echo form_open('admin/data_type/search') ?>
                <input type="text" name="keyword" class="form-control"
                placeholder="Cari" required>
            </div>
            <div class="navbar-form navbar-right">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close() ?>
            </div>
        </div> 

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th>Kode Tipe</th>
                    <th>Nama Tipe</th>
                    <th width="180px">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach($data_type as $tp) :?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tp->kode_type ?></td>
                        <td><?php echo $tp->nama_type ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url
                                        ('admin/data_type/update_type/' .$tp->id_type) ?>"><i class="
                                        fas fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url
                                        ('admin/data_type/delete_type/' .$tp->id_type) ?>"><i class="
                                        fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>