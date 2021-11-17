<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <h4>WEB PERUMAHAN</h4>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>DAFTAR</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('authn/registrasi') ?>">
                    <div class="form-group ">
                      <label for="nama">Nama</label>
                      <input id="nama_user" type="text" class="form-control" name="nama_user" placeholder="Nama" value="<?php echo set_value('nama_user') ?>" autofocus>
                      <?php echo form_error('nama_user','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email') ?>">
                      <?php echo form_error('email','<div class="text-small text-danger">','</div>') ?>
                    </div>
                 
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input id="alamat_user" type="text" class="form-control" name="alamat_user" placeholder="Alamat" value="<?php echo set_value('alamat_user') ?>">
                      <?php echo form_error('alamat_user','<div class="text-small text-danger">','</div>') ?>
                      <div class="invalid-feedback">
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="no_tlp">No Telepon</label>
                        <input id="no_tlp" type="text" class="form-control" name="no_tlp" placeholder="Nomor Telepon" value="<?php echo set_value('no_tlp') ?>">
                        <?php echo form_error('no_tlp','<div class="text-small text-danger">','</div>') ?>
                        <div class="invalid-feedback">
                    </div>

                  <div class="row">
                      <div class="form-group col-6">
                        <label>Kata Sandi</label>
                        <input id="pass_user1" type="password" name="pass_user1"  placeholder="Kata Sandi (minimal 6 karakter)" value="<?php echo set_value('pass_user1') ?>" class="form-control">
                        <?php echo form_error('pass_user1','<div class="text-small text-danger">','</div>') ?>
                      </div>

                      <div class="form-group col-6">
                        <label>Ulangi Kata Sandi</label>
                        <input id="pass_user2" type="password" name="pass_user2" placeholder="Ulangi Kata Sandi" value="<?php echo set_value('pass_user2') ?>" class="form-control">
                        <?php echo form_error('pass_user2','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Daftar
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Web Perumahan 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>