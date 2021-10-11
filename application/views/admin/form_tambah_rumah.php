<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Input Data Rumah</h1>
          </div>

         <div class="card">
             <div class="card-body">

                <form method="POST" action="<?php echo base_url('admin/data_rumah/
                    tambah_aksi') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grup">
                                <label for="Type Rumah"></label>
                                <select name="kode_type" class="form-control">
                                    <option value=" ">--Pilih Type Rumah--</option>
                                    <?php foreach($type as $tp) : ?>
                                        <option value="<?php echo $tp->kode_type ?>">
                                    <?php echo $tp->nama_type ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('kode_type','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label> Luas Bangunan</label>
                                <input type="text" name="luas_bangunan" class="form-control">
                                <?php echo form_error('luas_bangunan','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Luas Tanah</label>
                                <input type="text" name="luas_tanah" class="form-control">
                                <?php echo form_error('luas_tanah','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Interior</label>
                                <input type="text" name="interior" class="form-control">
                                <?php echo form_error('interior','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Status</label>
                                <select name="status" class="form-control">
                                    <option value="--Pilih Status--"></option>
                                    <option value="1">Dijual</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?php echo form_error('status','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Harga</label>
                                <input type="text" name="harga" class="form-control">
                                <?php echo form_error('harga','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        </div>
                    </div>
                 </form>                       
             </div>

         </div>

    </section>
</div>