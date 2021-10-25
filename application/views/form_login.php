<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
            <h4>WEB PERUMAHAN</h4>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>MASUK</h4></div>

              <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('auth/login') ?>">
                  <div class="form-group">
                    <label for="username">Nama Pengguna</label>
                    <input id="username" type="username" class="form-control" name="username" tabindex="1" autofocus>
                    <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="pass" class="control-label">Katasandi</label>                     
                        <input id="pass" type="password" class="form-control" name="pass" tabindex="2" autofocus> 
                        <?php echo form_error('pass','<div class="text-small text-danger">','</div>') ?>                
                  </div></br>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Masuk
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
             Belum punya akun? <a href="<?php echo base_url('register') ?>">Buat</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Web Perumahan 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  
