<?php
session_start();
include 'func.php';
$val = $_SESSION['kasir'][0];
?>
<div style="padding:40px; border:1px solid #000; width:70%; margin:0 auto;">
<center>
<table width="100%" style="border-bottom:2px solid #000;">
    <tr>
        <td width="50%">
            <h2>Ngeluk Book Store</h2>
            <p>
                Jalan Depokan II<br>
                Gang Paleman Baru No. 99<br>
                Yogyakarta 99999</p>
        </td>
        <td width="50%"><br>
            <p>
                <pre>
                Telp    : (021) 455221<br>
                HP      : 0823 4919 5324<br>
                Email   : ngelukbookstore@gmail.com<br>
                Website : ngelukbookstore.co.id
                </pre>
            </p>
        </td>
    </tr>
</table>
<div width="100%">
    <h2>Invoice</h2>
    <hr width="100%">
</div>
<table width="100%">
    <tr>
        <td width="50%">
            <p>Invoice No : <?= $val['no_transaksi'] ?></p>
        </td>
        <td width="50%">
            <p>
                <pre>
                Tanggal      : <?= date('d-m-Y')?><br>
                Pelanggan    : <?= $val['nama'] ?><br>
                Alamat       : <?= $val['alamat'] ?><br>
                No. HP       : <?= $val['no_hp'] ?><br>
                Email        : <?= $val['email'] ?>
                </pre>
            </p>
        </td>
    </tr>
</table>
<table border="1" width="100%" style="border-collapse:collapse;">
        <tr style="background:#dedede ; color:#000;">
        <th>No.</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
    </tr>
   <?php
   $no = 1;
   foreach($_SESSION['keranjang'] as $key => $value) :?>
    <tr>
        <td align="center"><?= $no++ ?></td>
        <td align="center"><?= $value['nama'] ?></td>
        <td><?= idr($value['harga'])?></td>
        <td><?= $value['jumlah']?></td>
        <td><?= idr($total[] = $value['jumlah'] * $value['harga'])?></td>
    </tr>
    <?php endforeach;?>
    <tr>
        <td colspan="4" align="center">Total Bayar</td>
        <td colspan="2"><?php echo idr(array_sum($total)); ?></td>
    </tr>
</center>
</div>

