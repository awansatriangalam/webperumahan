<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Ubah Kata Sandi</h1>
        </div>
    </section>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">

                <?= form_open_multipart('admin/profil/ganti_password');?>

                    <div class="form-box">
                        <div class="form-group col-md-4">
                            <label>Kata Sandi Lama</label>
                            <input type="hidden" name="id_user" value="<?php echo $user['id_user'] ?>">
                            <input type="password" class="form-control" name="sandi_lama" id="sandi_lama">
                            <?php echo form_error('sandi_lama','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group col-md-4">
                            <label>Kata Sandi Baru</label>
                            <input type="password" class="form-control" name="sandi_baru1" id="sandi_baru1">
                            <?php echo form_error('sandi_baru1','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group col-md-4">
                            <label>Ulangi Kata Sandi Baru</label>
                            <input type="password" class="form-control" name="sandi_baru2" id="sandi_baru2">
                            <?php echo form_error('sandi_baru2','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Ubah Sandi">
                    </div>   

                </form>

            </div>
        </div>
    </div>
</div>