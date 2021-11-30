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
                    <?php echo $jumlah_admin ?>
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
                    <?php echo $jumlah_rumah ?>
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
                    <?php echo $jumlah_tipe ?>
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
                    <?php echo $jumlah_customer ?>
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
                </div>
                <div class="card-body">
                  
                  <div id="chart" class="statistic-details mt-sm-4">
                      <script src="<?php echo base_url('assets/highcharts/jquery.min.js')?>" type="text/javascript"></script>
                      <script src="<?php echo base_url('assets/highcharts/highcharts.js')?>" type="text/javascript"></script>
                      <script src="<?php echo base_url('assets/highcharts/modules/exporting.js')?>" type="text/javascript"></script>
                      <script src="<?php echo base_url('assets/highcharts/modules/offline-exporting.js')?>" type="text/javascript"></script>
                      <script type="text/javascript">
                        jQuery(function(){
                        new Highcharts.Chart({
                          chart: {
                          renderTo: 'chart',
                          type: 'column',
                          },
                          title: {
                          text: 'Grafik Statistik Penjualan',
                          x: -20
                          },
                          xAxis: {
                          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun','Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
                          },
                          yAxis: {
                            min: 0,
                            title: {
                            text: 'Total Terjual'
                            }
                          },
                          tooltip: {
                              valueSuffix: ' Unit'
                          },
                          plotOptions: {
                              bar: {
                                  dataLabels: {
                                      enabled: true
                                  }
                              }
                          },
                          series: [{
                          name: 'Terjual dalam Bulan',
                          data: <?php echo json_encode($grafik); ?>
                          }]
                        });
                        }); 
                      </script>
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
                              <td><?php echo $ps->nama_user?></td>
                              <td><?php echo $ps->email?></td>
                              <td><?php echo $ps->no_tlp?></td>
                              <td><?php echo $ps->pesan_?></td>
                          </tr>
                      <?php endforeach;?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

