      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Admin</h4>
                  </div>
                  <div class="card-body">
                    2
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-home"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Rumah</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Tipe</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Customer</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Statistik</h4>
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary">Mingguan</a>
                      <a href="#" class="btn">Bulanan</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="myChart" height="182"></canvas>
                  <div class="statistic-details mt-sm-4">
                    <div class="statistic-details-item">
                      <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 7%</span>
                      <div class="detail-value">$243</div>
                      <div class="detail-name">Penjualan Hari Ini</div>
                    </div>
                    <div class="statistic-details-item">
                      <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 23%</span>
                      <div class="detail-value">$2,902</div>
                      <div class="detail-name">Penjualan Minggu Ini</div>
                    </div>
                    <div class="statistic-details-item">
                      <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>9%</span>
                      <div class="detail-value">$12,821</div>
                      <div class="detail-name">Penjualan Bulan Ini</div>
                    </div>
                    <div class="statistic-details-item">
                      <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%</span>
                      <div class="detail-value">$92,142</div>
                      <div class="detail-name">Penjualan Tahun Ini</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Pesan Customer</h4>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-responsive table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th style="width:55%;">Pesan</th>
                        </tr>
                      <?php
                      $no =1;
                      foreach ($pesan as $ps) : ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $ps->nama?></td>
                              <td><?php echo $ps->email_customer?></td>
                              <td><?php echo $ps->no_tlp?></td>
                              <td><?php echo $ps->pesan_?></td>
                          </tr>
                      <?php endforeach;?>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Statistik Minggu Ini</h4>
                  <div class="card-header-action">
                    <div class="dropdown">
                      <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">Filter</a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> Electronic</a>
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> T-shirt</a>
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> Hat</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Lihat Semuanya</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-info">
                      <h4>$1,053</h4>
                      <div class="text-muted">Sold 3 items on 2 customers</div>
                      <div class="d-block mt-2">
                        <a href="#">Lihat Semuanya</a>
                      </div>
                    </div>
                    <div class="summary-item">
                      <h6>Item List <span class="text-muted">(3 Items)</span></h6>
                      <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                          <a href="#">
                            <img class="mr-3 rounded" width="50" src="../assets/img/products/product-1-50.png" alt="product">
                          </a>
                          <div class="media-body">
                            <div class="media-right">$405</div>
                            <div class="media-title"><a href="#">PlayStation 9</a></div>
                            <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday</div>
                          </div>
                        </li>
                        <li class="media">
                          <a href="#">
                            <img class="mr-3 rounded" width="50" src="../assets/img/products/product-2-50.png" alt="product">
                          </a>
                          <div class="media-body">
                            <div class="media-right">$499</div>
                            <div class="media-title"><a href="#">RocketZ</a></div>
                            <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday
                            </div>
                          </div>
                        </li>
                        <li class="media">
                          <a href="#">
                            <img class="mr-3 rounded" width="50" src="../assets/img/products/product-3-50.png" alt="product">
                          </a>
                          <div class="media-body">
                            <div class="media-right">$149</div>
                            <div class="media-title"><a href="#">Xiaomay Readme 4.0</a></div>
                            <div class="text-muted text-small">by <a href="#">Kusnaedi</a> <div class="bullet"></div> Tuesday
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="d-inline">Tasks</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cbx-1">
                        <label class="custom-control-label" for="cbx-1"></label>
                      </div>
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                        <h6 class="media-title"><a href="#">Redesign header</a></h6>
                        <div class="text-small text-muted">Alfa Zulkarnain <div class="bullet"></div> <span class="text-primary">Now</span></div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cbx-2" checked="">
                        <label class="custom-control-label" for="cbx-2"></label>
                      </div>
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-5.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-primary mb-1 float-right">Completed</div>
                        <h6 class="media-title"><a href="#">Add a new component</a></h6>
                        <div class="text-small text-muted">Serj Tankian <div class="bullet"></div> 4 Min</div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cbx-3" >
                        <label class="custom-control-label" for="cbx-3"></label>
                      </div>
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-warning mb-1 float-right">Progress</div>
                        <h6 class="media-title"><a href="#">Fix modal window</a></h6>
                        <div class="text-small text-muted">Ujang Maman <div class="bullet"></div> 8 Min</div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cbx-4">
                        <label class="custom-control-label" for="cbx-4"></label>
                      </div>
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                        <h6 class="media-title"><a href="#">Remove unwanted classes</a></h6>
                        <div class="text-small text-muted">Farhan A Mujib <div class="bullet"></div> 21 Min</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

