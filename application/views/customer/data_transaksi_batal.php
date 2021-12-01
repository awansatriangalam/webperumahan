<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="<?php echo base_url() ?>assets/assets_homepage/images/page-titles/1.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Data Transaksi Dibatalkan</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('welcome')?>">Beranda</a></li>
                            <li><a href="<?php echo base_url('customer/data_transaksi')?>">Data Transaksi</a></li>
                            <li><a href="<?php echo base_url('customer/data_transaksi_batal')?>">Data Transaksi Dibatalkan </a></li>
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
                        <h5>Data Transaksi Dibatalkan</h5>
                    </div>

                    <span><?php echo $this->session->flashdata('pesan')?></span>
                    <div class="card-body">
                        <table class="table table-bordered table-striped mb-0 ">
                            <tr>
                                <th><label>No</label></th>
                                <th><label>Nama Customer</label></th>
                                <th><label>Nama Rumah</label></th>
                                <th><label>Tanggal Batal</label></th>
                                <th><label>Harga</label></th>
                                <th style="width: 325px;"><label>Aksi</label></th>
                            </tr>

                            <?php $no=1;
                            foreach($transaksi as $tr):?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $tr->nama_user ?></td>
                                <td><?php echo $tr->nama_rumah ?></td>
                                <td><?php echo date('d F Y',strtotime($tr->tanggal_transaksi)) ?></td>
                                <td>Rp. <?php echo $tr->harga ?></td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('customer/transaksi/pesan_kembali/'.$tr->id_pesan) ?>">
                                        <input type="hidden" name="id_rumah" value="<?php echo $tr->id_rumah?>">
                                        <input type="hidden" name="harga" value="<?php echo $tr->harga?>">
                                        <input type="submit" onclick="return confirm('Yakin Untuk Membooking Lagi ?...')" value="Booking Kembali" style="width:100%" class="btn btn-sm btn-success">
                                    </form>
                                </td>                      
                            </tr>
                            <?php endforeach?>
                            <?echo date('d - M - y')?>;
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Transaksi sudah selesai dan tidak bisa di batalkan
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Keluar</button>
        </div>
        </div>
    </div>
</div>