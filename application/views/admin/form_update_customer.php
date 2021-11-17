<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Ubah Data Customer</h1>
        </div>
    </section>

    <?php foreach($customer as $cs) : ?>

    <form method="POST" action="<?php echo base_url('admin/data_customer/update_customer_aksi') ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>">
                    <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
                </div>
                <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $cs->username ?>">
                    <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
                    <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_tlp" class="form-control" value="<?php echo $cs->no_tlp ?>">
                    <?php echo form_error('no_tlp','<span class="text-small text-danger">','</span>') ?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email_customer" class="form-control" value="<?php echo $cs->email_customer ?>">
                    <?php echo form_error('email_customer','<span class="text-small text-danger">','</span>') ?>
                </div>
            </div>
        </div>

        <button style="submit" class="btn btn-sm btn-primary">Simpan</button>
        <button style="submit" class="btn btn-sm btn-danger">Reset</button>
    </form>

    <?php endforeach; ?>
</div>
