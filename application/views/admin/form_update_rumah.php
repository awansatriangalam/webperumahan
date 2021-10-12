<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Update Data Rumah</h1>
          </div>

         <div class="card">
             <div class="card-body">

                <?php foreach ($rumah as $rm) : ?>
                <form method="POST" action="<?php echo base_url('admin/data_rumah/update_rumah_aksi') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label> Nama Rumah</label>
                                <input type="hidden" class="id_rumah" value="<?php echo $rm->id_rumah ?>">
                                <input type="text" name="nama_rumah" class="form-control" value="<?php echo $rm->nama_rumah ?>">
                                <?php echo form_error('nama_rumah','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-grup">
                                <label> Type Rumah </label>
                                <select name="kode_type" class="form-control">
                                    <option value="<?php echo $rm->kode_type ?> "><?php echo $rm->kode_type ?></option>
                                    <?php foreach($tipe as $tp) : ?>
                                        <option value="<?php echo $tp->kode_type ?>">
                                    <?php echo $tp->nama_type ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('kode_type','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label> Luas Bangunan</label>
                                <input type="text" name="luas_bangunan" class="form-control" value="<?php echo $rm->luas_bangunan ?>">
                                <?php echo form_error('luas_bangunan','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Luas Tanah</label>
                                <input type="text" name="luas_tanah" class="form-control" value="<?php echo $rm->luas_tanah ?>">
                                <?php echo form_error('luas_tanah','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Interior</label>
                                <input type="text" name="interior" class="form-control" value="<?php echo $rm->interior ?>">
                                <?php echo form_error('interior','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" value="<?php echo $rm->deskripsi ?>">
                                <?php echo form_error('deskripsi','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label> Jumlah Kamar Tidur</label>
                                <input type="text" name="kamar_tidur" class="form-control" value="<?php echo $rm->kamar_tidur ?>">
                                <?php echo form_error('kamar_tidur','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Jumlah Kamar Mandi</label>
                                <input type="text" name="kamar_mandi" class="form-control" value="<?php echo $rm->kamar_mandi ?>">
                                <?php echo form_error('kamar_mandi','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Status</label>
                                <select name="status" class="form-control">
                                    <option <?php if($rm->status == "1"){echo "selected='selected'";}
                                    echo $rm->status; ?> value="1">Tersedia</option>
                                    <option <?php if($rm->status == "0"){echo "selected='selected'";}
                                    echo $rm->status; ?> value="0">Telah Diisi</option>
                                </select>
                                <?php echo form_error('status','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Harga</label>
                                <input type="text" name="harga" class="form-control" value="<?php echo $rm->harga ?>">
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
                 <?php endforeach; ?>

             </div>

         </div>

    </section>
</div>