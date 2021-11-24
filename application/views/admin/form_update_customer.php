<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Ubah Data Customer</h1>
        </div>
    </section>

    <?php foreach($user as $cs) : ?>

    <form method="POST" action="<?php echo base_url('admin/data_customer/update_customer_aksi') ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="id_user" value="<?php echo $cs->id_user ?>">
                    <input type="text" name="nama_user" class="form-control" value="<?php echo $cs->nama_user ?>">
                    <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $cs->email ?>">
                    <?php echo form_error('email','<span class="text-small text-danger">','</span>') ?>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat_user" class="form-control" value="<?php echo $cs->alamat_user ?>">
                    <?php echo form_error('alamat_user','<span class="text-small text-danger">','</span>') ?>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_tlp" class="form-control" value="<?php echo $cs->no_tlp ?>">
                    <?php echo form_error('no_tlp','<span class="text-small text-danger">','</span>') ?>
                </div>
            </div>
        </div>

        <button style="submit" class="btn btn-sm btn-primary">Simpan</button>
        <button style="submit" class="btn btn-sm btn-danger">Reset</button>
    </form>

    <?php endforeach; ?>
</div>
