<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Konfirmasi Pembayaran</h1>
        </div>

        <center>
            <div class="card" style="width: 55%">
                <div class="card-header">
                    Konfirmasi Pembayaran
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran')?>">
                        <?php foreach ($pembayaran as $pm):?>

                            <a href="<?php echo base_url('admin/transaksi/download_bukti/'.$pm->id_pesan) ?>" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download Bukti Pembayaran</a>
                            <div class="custom-control custom-switch ml-5">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_bayar">
                                <input type="hidden" class="custom-control-input"  value="<?php echo $pm->id_pesan ?>" name="id_pesan">
                                <label for="customSwitch1" class="custom-control-label"> Konfirmasi Pembayaran</label>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan </button>

                        <?php endforeach ;?>
                    </form>
                </div>
            </div>
        </center>
    </section>
</div>