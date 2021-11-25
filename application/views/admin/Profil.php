<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profil Saya</h1>
        </div>
    </section>

    <?php echo $this->session->flashdata('pesan') ?>
    
   <div class="row">
        <div class="col-md-3 mt-5 ml-5">
            <img style="width:80%" src="<?php echo base_url('assets/assets_stisla/assets/img/profil/') .$user['gambar_user'] ?>" >
        </div>
        <div class="col-md-5 mt-5">
            <div class="card-body">
                <h5 class="card-title"><?php echo $user['nama_user']?></h5>
                <p class="card-text"><?php echo $user['email']?></p>
                <p class="card-text"><?php echo $user['alamat_user']?></p>
                <p class="card-text"><?php echo $user['no_tlp']?></p><hr>
                <p class="card-text">
                    <small class="text-muted">Dibuat <?php echo date('d,F,Y', $user['tanggal_buat']) ?></small>
                </p>
            </div>
        </div>
        <div class="col-md-3 mt-auto">
            <a href="<?php echo base_URL('admin/profil/edit') ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Profil</a>
        </div>
   </div>
</div>