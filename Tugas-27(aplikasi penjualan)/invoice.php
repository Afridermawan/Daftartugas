<?php
session_start();
// include 'troli.php';
$val  = $_SESSION["invoice"][0];
?>
<div style="padding:40px; border:1px solid #000; width:70%">
<center>
<table width="100%" style="border-bottom:2px solid #000">
<div width="100%">
    <h2> INVOICE </h2>
    <hr width="50%">
</div>
    <table method="post"style="width:60%" action="troli.php">
      <tr>
        <td width='50%'>
          <p> No invoice : <?= $val['no_transaksi'] ?></p>
        </td>
        <td width="50%">
          <p>
            <pre>
              Tanggal :<?= date('d-m-Y') ?><br>
              Nama    :<?=$value['nama']?><br>
              E-mail  :<?=$value['email']?><br>
              Alamat  :<?=$value['alamat']?><br>
              Status  :<?=$value['member']?><br>
              Kota    :<?=$value['kota']?>
            </pre>
          </p>
        </td>
      </tr>
    </table>
    <table border="1" width="100%" style="border-collapse:collapse;">
      <tr style="background:#dedede ; color:#000">
        <th>No.</th>
        <th>Gambar</th>
        <th>type</th>
        <th>Merk</th>
        <th>Harga</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
      <?php
      $no=  1;
      foreach ($_SESSION['troli'] as $key => $val) :?>
      <tr>
        <td aligncenter><?= $no++ ?></td>
        <td><img src="<?=$val[0]['gambar'] ?>"style="width:150px;heigth:30%"></td>
        <td align="center"><?= $val['type'] ?></td>
        <td><?= idr($val['harga'])?></td>
        <td><?= $val['quantity']?></td>
        <td><?= idr($total[] = $val['quantity'] * $value['harga'])?></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="4" align="center"> Total bayar </td>
      <td colspan="2"><?php echo idr(array_sum($total));?></td>
    </tr>
  </center>
</div>
