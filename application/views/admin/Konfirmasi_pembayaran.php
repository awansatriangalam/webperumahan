<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Konfirmasi Pembayaran</h1>
        </div>

        <div class="card" style="width: 55%">
            <div class="card-header">
                Konfirmasi Pembayaran
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran')?>">
                    <?php foreach ($pembayaran as $pm):?>

                        <a href="<?php echo base_url('admin/transaksi/download'.$pm->id_pesan) ?>" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download Bukti Pembayaran</a>

                    <?php endforeach ;?>
                </form>
            </div>
        </div>
    </section>
</div>