<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>

        <?php echo $this->session->flashdata('pesan') ?>

        <div class="table-responsive">
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Rumah</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Cek Pembayaran</th>
                        <th width="180px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach($transaksi as $tr) :?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $tr->nama ?></td>
                            <td><?php echo $tr->nama_rumah ?></td>
                            <td><?php echo $tr->harga ?></td>
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
                                            ('admin/transaksi/transaksi_selesai')?>"><i class="
                                            fas fa-check"></i>
                                </a>
                                <a class="btn btn-sm btn-danger" href="<?php echo base_url
                                            ('admin/transaksi/transaksi_batal')?>"><i class="
                                            fas fa-times"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
    </section>
</div>