<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>

        <?php echo $this->session->flashdata('pesan') ?>
        <form method="POST" action="<?php echo base_url('admin/transaksi') ?>">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Dari Tanggal</label>
                    <input type="date" name="dari" class="form-control">
                    <?php echo form_error('dari','<span class="text-small text-danger">','</span>') ?>
                </div>
            
                 <div class="form-group col-md-6">
                    <label>Sampai Tanggal</label>
                    <input type="date" name="sampai" class="form-control">
                    <?php echo form_error('sampai','<span class="text-small text-danger">','</span>') ?>
                </div>

                <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Cari</button>
                </div>
           </div> 
        </form>
        <div class="table-responsive">
            <div class="col-md-3 ml-auto"><a href="<?php echo base_url('admin/data_transaksi_batal') ?>"><i class="fa fa-random"></i> Transaksi Dibatalkan</a></div>
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Rumah</th>
                        <th>Harga</th>
                        <th>Tanggal Transaksi</th>
                        <th>Status</th>
                        <th>Cek Pembayaran</th>
                        <th width="120px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach($transaksi as $tr) :?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $tr->nama_user ?></td>
                            <td><?php echo $tr->nama_rumah ?></td>
                            <td><?php echo $tr->harga ?></td>
                            <td><?php echo date('d F Y',strtotime($tr->tanggal_transaksi)) ?></td>
                            <td><?php echo $tr->status_pesan ?></td>
                            <td>
                                <center>
                                    <?php
                                    if (empty($tr->bukti_bayar)) { ?>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                                    <?php } else{ ?>
                                        <a class="btn btn-sm btn-success"href="<?php echo base_url('admin/transaksi/pembayaran/' .$tr->id_pesan) ?>"><i class="fas fa-check-circle"></i></a>
                                    <?php } ?>
                                </center>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-success mr-2" href="<?php echo base_url
                                            ('admin/transaksi/transaksi_selesai/'.$tr->id_pesan)?>"><i class="
                                            fas fa-check"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" href="<?php echo base_url
                                            ('admin/transaksi/transaksi_batal/'.$tr->id_pesan)?>"><i class="
                                            fas fa-times"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
    </section>
</div>