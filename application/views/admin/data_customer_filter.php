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
                <th>Username</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no =1;
            foreach ($data_customer as $cs) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $cs->nama?></td>
                    <td><?php echo $cs->username?></td>
                    <td><?php echo $cs->alamat?></td>
                    <td><?php echo $cs->no_tlp?></td>
                    <td><?php echo $cs->email_customer?></td>
                    <td><?php echo $cs->pass?></td>
                    <td>
                        <div class="row">
                            <a href="<?php echo base_url('admin/data_customer/delete_customer/') .$cs->id_customer ?>" 
                            class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?php echo base_url('admin/data_customer/update_customer/') .$cs->id_customer ?>" 
                            class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>


    </section>
</div>