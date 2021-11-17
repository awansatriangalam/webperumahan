<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profil Saya</h1>
        </div>
    </section>

   <div class="row">
   <div class="col-md-3">
       <img src="<?php echo base_url('assets/assets_stisla/assets/img/profil/') .$user['gambar_user'] ?>" >
   </div>
   <div class="col-md-6">
       <div class="card-body">
           <h5 class="card-title"><?php echo $user['nama_user']?></h5>
           <p class="card-text"><?php echo $user['email']?></p>
           <p class="card-text">
               <small class="text-muted">Admin Sejak <?php echo date('d,F,Y', $user['tanggal_buat']) ?></small>
           </p>
       </div>
   </div>
   </div>
</div>