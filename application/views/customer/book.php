        <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="assets/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>Book</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Add Property</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>

   <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="card mx-auto" >
                        <div class="card-header">
                            <h5>Data Transaksi</h5>
                        </div>

                        <span><?php echo $this->session->flashdata('pesan')?></span>
                        <div class="card-body">
                            <table class="table table-bordered table-striped mb-0 ">
                                <tr>
                                    <th><label>No</label></th>
                                    <th><label>Nama Customer</label></th>
                                    <th><label>Nama Rumah</label></th>
                                    <th><label>Harga</label></th>
                                    <th><label>Aksi</label></th>
                                </tr>

                                <?php $no=1;
                                foreach($transaksi as $tr):?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $tr->nama ?></td>
                                    <td><?php echo $tr->nama_rumah ?></td>
                                    <td>Rp. <?php echo $tr->harga ?></td>
                                    <td>
                                        <?php if($tr->status_pesan=="Selesai") { ?>
                                            <button class="btn btn-sm btn-danger" style="width:100%">Selesai</button>
                                        <?php }else{ ?>
                                            <a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_pesan) ?>" class="btn btn-sm btn-success" style="width:100%">Cek Pembayaran</a>
                                        <?php }?>
                                    </td>
                                </tr>
                                <?php endforeach?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>