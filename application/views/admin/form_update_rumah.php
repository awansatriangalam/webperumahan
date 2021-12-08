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
                                <input type="hidden" name="id_rumah" value="<?php echo $rm->id_rumah ?>">
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
                                    <?php echo $tp->kode_type ?></option>
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
                                <label> Jumlah Ruangan</label>
                                <input type="text" name="ruangan" class="form-control" value="<?php echo $rm->ruangan ?>">
                                <?php echo form_error('ruangan','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Jumlah Lantai</label>
                                <input type="text" name="lantai" class="form-control" value="<?php echo $rm->lantai ?>">
                                <?php echo form_error('lantai','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Jumlah Garasi</label>
                                <input type="text" name="garasi" class="form-control" value="<?php echo $rm->garasi ?>">
                                <?php echo form_error('garasi','<div class="text-small text-danger">
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
                                <label> Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" value="<?php echo $rm->lokasi ?>">
                                <?php echo form_error('lokasi','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Status</label>
                                <select name="status" class="form-control">
                                    <option <?php if($rm->status == "0"){echo "selected='selected'";}
                                    echo $rm->status; ?> value="0">Terisi</option>
                                    <option <?php if($rm->status == "1"){echo "selected='selected'";}
                                    echo $rm->status; ?> value="1">Tersedia</option>
                                    <option <?php if($rm->status == "2"){echo "selected='selected'";}
                                    echo $rm->status; ?> value="2">Dibooking</option>
                                </select>
                                <?php echo form_error('status','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?php echo $rm->alamat ?>">
                                <?php echo form_error('alamat','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Kota</label>
                                <input type="text" name="kota" class="form-control" value="<?php echo $rm->kota ?>">
                                <?php echo form_error('kota','<div class="text-small text-danger">
                                ','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Kode Pos</label>
                                <input type="text" name="kode_pos" class="form-control" value="<?php echo $rm->kode_pos ?>">
                                <?php echo form_error('kode_pos','<div class="text-small text-danger">
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
                            <div class="form-group">
                                <label> Gambar Lokasi</label>
                                <input type="file" name="map" class="form-control">
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