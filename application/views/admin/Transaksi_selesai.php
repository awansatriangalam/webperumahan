<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Transaksi Selesai</h1>
        </div>
    </section>

    <?php foreach($transaksi as $tr):?>
        <form method="POST" action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi') ?>">
            <input type="hidden" name="id_pesan" value="<?php echo $tr->id_pesan ?>">

            <div class="form-group">
                <label> Status Transaksi</label>
                <select name="status_pesan" class="form-control">
                    <option value="<?php echo $tr->status_pesan?>"><?php echo $tr->status_pesan?></option>
                    <option value="Selesai">Selesai</option>
                    <option value="Belum Selesai">Belum Selesai</option>
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-success"> Simpan</button>
            
        </form>
    <?php endforeach;?>
</div>