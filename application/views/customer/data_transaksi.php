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
                            <h1>Data Transaksi</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('customer/dashboard')?>">Beranda</a></li>
                            <li class="active">Data Transaksi</li>
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
                                <th><label>Tanggal Transaksi</label></th>
                                <th><label>Harga</label></th>
                                <th style="width: 325px;"><label>Aksi</label></th>
                            </tr>

                            <?php $no=1;
                            foreach($transaksi as $tr):?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $tr->nama_user ?></td>
                                <td><?php echo $tr->nama_rumah ?></td>
                                <td><?php echo date('d F,Y') ?></td>
                                <td>Rp. <?php echo $tr->harga ?></td>
                                <td>
                                    <?php if($tr->status_pesan=="Selesai") { ?>
                                        <button class="btn btn-sm btn-danger" style="width:100%"> <i class="fa fa-check"></i> Selesai</button>
                                    <?php }else{ ?>
                                        <a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_pesan) ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Cek Pembayaran</a>
                                    <?php }?>

                                    <?php if($tr->status_pesan == 'Belum Selesai') { ?>
                                        <a onclick="return confirm('Yakin Membatalkan Transaksi ?...')" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_pesan) ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</a>
                                    <?php }else { ?>
                                    <?php } ?>
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