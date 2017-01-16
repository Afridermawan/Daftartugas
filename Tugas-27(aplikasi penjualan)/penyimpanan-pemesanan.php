l<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Black Name </title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  </head>
    <body>
      <center><table border="2px" width="33%">
        <tr>
          <td> Nama barang </td><br>
          <td> Harga Barang </td><br>
          <td> Quantity </td><br>
          <td> Option </td>

        </tr>
  <?php if(!empty($_SESSION['table'])) :?>
    <?php foreach ($_SESSION['table'] as $key => $value) :?>
        <tr>
          <td><?= $value['namabarang'] ?></td>
          <td><?= $value['hargabarang'] ?></td>
          <td><?= $value['quantity'] ?></td>
          <td><a href="penyimpanan-pemesanan.php?del=<?=$key?>">Delete</td>
          </tr>
      <?php endforeach; ?>
        <tr>
          <center><td  colspan="4">
            <a href="tampilan-pemesanan.php"><button type="button" name="lanjut" value="1">Lanjut Belanja </button></a>
            <a href="penyimpanan-pemesanan.php"><button type="submit" name="bayar" value="1">Bayar </button></a></td></center>
        </tr>
      <?php endif; ?>
    </table>
  </body>
</html>
