<h3 style="text-align:center">Laporan Transaksi</h3>


<table>
    <tr>
        <td>Dari Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y',strtotime($_GET['dari'])); ?></td>
    </tr>
    <tr>
        <td>Sampai Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y',strtotime($_GET['sampai'])); ?></td>
    </tr>
</table>

<table class="table table-bordered table-striped mt-4">
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

<script type="text/javascript">
    window.print();
</script>