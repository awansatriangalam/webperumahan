<html>
    <head>
        <style>
            table, td, th {  
                text-align: left;
                }

            table {
                border-collapse: collapse;
                width: 70%;
                }
                
            th, td {
                padding: 15px;
                }

            h3{
                font-weight: bold;
                font-size:20px;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <table align="center">
            <h3>Print Pembayaran</h3>
                <?php foreach($transaksi as $tr) : ?>
                    <tr>
                        <th>Nama Customer</th>
                        <td>:</td>
                        <td><?php echo $tr->nama ?></td>
                    </tr>
                    <tr>
                        <th>Nama Rumah</th>
                        <td>:</td>
                        <td><?php echo $tr->nama_rumah ?></td>
                    </tr>
                    <tr>  
                        <th>Harga</th>
                        <td>:</td>
                        <td>Rp. <?php echo $tr->harga ?></td>
                    </tr>
                    <tr>  
                        <th>Status Pembayaran</th>
                        <td>:</td>
                        <td>
                            <?php 
                                if($tr->status_bayar == '0' ) {
                                    echo "Belum Lunas";
                                } else { 
                                    echo "Lunas" ;
                                } 
                            ?>
                        </td>
                    </tr>
                    <tr style="font-weight:bold; color:red">  
                        <th>JUMLAH PEMBAYARAN</th>
                        <td>:</td>
                        <td>Rp. <?php echo $tr->harga ?></td>
                    </tr>
                <?php endforeach;?>
                
        </table>
    </body>
</html>
<script type="text/javascript">
    window.print();
</script>

