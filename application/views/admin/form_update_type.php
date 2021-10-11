<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Update Data Type Rumah</h1>
        </div>
    </div>

    <?php foreach ($type as $tp) : ?>
        <form method="POST" action="<?php echo base_url('admin/data_type/update_type_aksi')?>">
            <div class="form-group">
                <label>Kode Type</label>
                <input type="hidden" name="id_type" value="<?php echo $tp->id_type ?>" >
                <input type="text" name="kode_type" class="form-control" value="<?php echo $tp->kode_type ?>">
                <?php echo form_error('kode_type','<div class="text-small text-danger">', 
                '</div>') ?>
            </div>
            <div class="form-group">
                <label>Nama Type</label>
                <input type="text" name="nama_type" class="form-control" value="<?php echo $tp->nama_type ?>">
                <?php echo form_error('nama_type','<div class="text-small text-danger">', 
                '</div>') ?>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
            <button type="reser" class="btn btn-danger mt-4">Reset</button>
        </form>
    <?php endforeach; ?>
</div>