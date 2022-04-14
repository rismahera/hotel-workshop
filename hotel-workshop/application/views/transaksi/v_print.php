<style type="text/css">
 table{
 border-collapse: collapse;
 }
 tr>th{
 background-color: gray;
 }
 tr>th,tr>td{
 padding: 5px;
 }
</style>
<center>
<h2>TRANSAKSI</h2>
<table border="1">
    <thead>
    <tr>
            <th>No</th>
            <th>Nama Konsumen</th>
            <th>Nama Kamar</th>
            <th>Nomor Kamar</th>
            <th>Waktu Sewa</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Jenis Pembayaran</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($transaksi as $t): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $t->nama_konsumen?></td>
            <td><?= $t->kamar ?></td>
            <td><?= $t->nomor_kamar ?></td>
            <td><?= $t->waktu_sewa ." Hari"?></td>
            <td><?= "Rp.".number_format($t->harga); ?></td>
            <td><?= "Rp.".number_format($total); ?></td>
            <td><?= $t->jenis_pembayaran?></td>
        </tr>
        <?php endforeach; 
        ?>
    </tbody>
</table>
</center>

            <script>
                window.print()
            </script>