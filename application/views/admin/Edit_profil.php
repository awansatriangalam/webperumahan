<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Profil</h1>
        </div>
    </section>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">

                <?= form_open_multipart('admin/profil/edit');?>

                    <div class="form-group-row">
                        <div class="col-sm-2">
                            Gambar
                        </div>
                        <div class="col-sm-10 mt-2">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/assets_stisla/assets/img/profil/') .$user['gambar_user'] ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9 mt-auto">
                                    <div>
                                        <input type="file" id="gambar_user" name="gambar_user">
                                        <label for="gambar_user"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><hr>

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= $user['id_user'] ?>">
                        <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $user['nama_user'] ?>">
                        <?php echo form_error('nama_user','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
                        <?php echo form_error('email','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat_user" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat_user" name="alamat_user" value="<?= $user['alamat_user'] ?>">
                        <?php echo form_error('alamat_user','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_tlp" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?= $user['no_tlp'] ?>">
                        <?php echo form_error('no_tlp','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Ubah">
                    
                </form>

            </div>
        </div>
    </div>
</div>