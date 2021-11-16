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
                            <h1>Pembayaran</h1>
                        </div>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url('customer/dashboard')?>">Beranda</a></li>
                                <li class="active">Pembayaran</li>
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
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header alert alert-success">
                        <h5>Pembayaran</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <?php foreach($transaksi as $tr) : ?>
                                <tr>
                                    <th><label>Nama Rumah</label></th>
                                    <td>:</td>
                                    <td><?php echo $tr->nama_rumah ?></td>
                                </tr>
                                <tr>  
                                    <th><label>Harga</label></th>
                                    <td>:</td>
                                    <td>Rp. <?php echo $tr->harga ?></td>
                                </tr>
                                <tr>  
                                    <th><label>JUMLAH PEMBAYARAN</label></th>
                                    <td>:</td>
                                    <td><button class="btn btn-sm btn-success" style="width:100%">Rp. <?php echo $tr->harga ?></button></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><a href="<?php echo base_url('customer/transaksi/cetak/' .$tr->id_pesan) ?>" class="btn btn-sm btn-primary" style="width:100%">Print</a></td>
                                </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
               <div class="card">
                    <div class="card-header alert alert-warning">
                        <h6> Informasi Pembayaran</h6>
                    </div>
                    <div class="card-body">
                        <p class="text-success mb-3">Silahkan Melakukan Pembayaran Melalui Nomor Rekening di Bawah ini !</p>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bank Mandiri</li>
                            <li class="list-group-item">Bank BCA</li>
                            <li class="list-group-item">Bank BNI</li>
                        </ul>

                        <?php if(empty($tr->bukti_bayar)) { ?>
                                <button style="width:100%" type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    Upload Bukti Pembayaran
                                </button>
                        <?php } elseif($tr->status_bayar == '0') { ?>
                                <button class="btn btn-sm btn-warning" style="width:100%"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</button>
                        <?php } elseif($tr->status_bayar == '1') { ?>
                                <button class="btn btn-sm btn-success" style="width:100%"><i class="fa fa-check"></i> Pembayaran Selesai</button>
                        <?php } ?>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                </div>

                <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Upload Bukti Pembayaran</label>
                            <input type="hidden" name="id_pesan" class="form-control" value="<?php echo $tr->id_pesan?>">
                            <input type="file" name="bukti_bayar" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-success">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


