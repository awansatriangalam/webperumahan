<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi Dibatalkan</h1>
        </div>

        <?php echo $this->session->flashdata('pesan') ?>
        <div class="table-responsive">
            <div class="col-md-3 ml-auto"><a href="<?php echo base_url('admin/transaksi') ?>"><i class="fa fa-random"></i> Data Transaksi</a></div>
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Rumah</th>
                        <th>Harga</th>
                        <th>Tanggal Batal</th>
                        <th>Status</th>
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
                            <td><?php echo "Dibatalkan" ?></td>
                            <td>
                                <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal/'.$tr->id_pesan)?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
    </section>
</div>