<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Konfirmasi Pembayaran</h1>
        </div>

        <center>
            <div class="card" style="width: 100%">
                <div class="card-body">
                    <?php foreach ($pembayaran as $pm):?>
                        <div class="row">
                            <div class="ml-5">
                                <iframe src="<?php echo base_url('assets/upload/'.$pm->bukti_bayar) ?>" width="450" height="600"></iframe>
                            </div>
                            <div class="mx-auto mt-5">
                                <form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran')?>">
                                    <div class="custom-control custom-switch mt-5">
                                        <input type="hidden" class="custom-control-input"  value="<?php echo $pm->id_pesan ?>" name="id_pesan">
                                        <input type="hidden" class="custom-control-input" value="Selesai" name="status_pesan">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_bayar">
                                        <label for="customSwitch1" class="custom-control-label"> Konfirmasi Pembayaran</label>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-sm btn-primary">Simpan </button>   
                                </form>
                            </div>
                        </div>
                    <?php endforeach ;?>
                </div>
            </div>
        </center>
    </section>
</div>