<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>
    </section>

    <form method="POST" action="<?php echo base_url('admin/data_customer/tambah_customer_aksi') ?>">

    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                    <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
                </div>
                <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text" name="username" class="form-control">
                    <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                    <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_tlp" class="form-control">
                    <?php echo form_error('no_tlp','<span class="text-small text-danger">','</span>') ?>
                </div>
                <div class="form-group">
                    <label>No KTP</label>
                    <input type="text" name="no_ktp" class="form-control">
                    <?php echo form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
                </div>
                <div class="form-group">
                    <label>Katasandi</label>
                    <input type="text" name="pass" class="form-control">
                    <?php echo form_error('pass','<span class="text-small text-danger">','</span>') ?>
                </div>
            </div>
        </div>

        <button style="submit" class="btn btn-sm btn-primary">Simpan</button>
        <button style="submit" class="btn btn-sm btn-danger">Reset</button>
    </form>
</div>
