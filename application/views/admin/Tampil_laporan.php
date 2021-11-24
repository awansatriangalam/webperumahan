<div class="main-content">
    <section class="section">
        <div class="section-header">
           <h1>Laporan Transaksi</h1>
        </div>
    </section>

    <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
        <div class="form-group">
            <label>Dari Tanggal</label>
            <input type="date" name="dari" class="form-control">
            <?php echo form_error('dari','<span class="text-small text-danger">','</span>') ?>
        </div>
        <div class="form-group">
            <label>Sampai Tanggal</label>
            <input type="date" name="sampai" class="form-control">
            <?php echo form_error('sampai','<span class="text-small text-danger">','</span>') ?>
        </div>

        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Tampilkan Data</button>
    </form><hr>

    <div class="btn-group">
        <a href="<?php echo base_url().'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>" class="btn btn-sm btn-success" target="_blank"><i class="fas fa-print"></i> Print</a>    
    </div><hr>

    <div class="table-responsive">
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Rumah</th>
                        <th>Harga</th>
                        <th>Tanggal Transaksi</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach($laporan as $lr) :?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $lr->nama_user ?></td>
                            <td><?php echo $lr->nama_rumah ?></td>
                            <td><?php echo $lr->harga ?></td>
                            <td><?php echo date('d F Y',strtotime($lr->tanggal_transaksi)) ?></td>
                            <td><?php echo $lr->status_pesan ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</div>