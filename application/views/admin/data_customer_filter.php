<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>

        <div class="row">
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="col-md-6 mb-3">
                <?php echo form_open('admin/data_customer/search') ?>
                <input type="text" name="keyword" class="form-control"
                placeholder="Cari">
            </div>
            <div class="navbar-form navbar-right">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close() ?>
            </div>
        </div>
        <table class="table table-striped table-responsive table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Gambar</th>
                <th>Kata Sandi</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no =1;
            foreach ($data_customer as $cs) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $cs->nama_user?></td>
                    <td><?php echo $cs->email?></td>
                    <td><?php echo $cs->alamat_user?></td>
                    <td><?php echo $cs->no_tlp?></td>
                    <td>
                        <img width="100px" src="<?php echo base_url().'assets/assets_stisla/assets/img/profil/' .$cs->gambar_user ?>">
                    </td>
                    <td><?php echo $cs->pass_user?></td>
                    <td>
                        <div class="row">
                            <a href="<?php echo base_url('admin/data_customer/delete_customer/') .$cs->id_user ?>" 
                            class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?php echo base_url('admin/data_customer/update_customer/') .$cs->id_user ?>" 
                            class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>



    </section>
</div>