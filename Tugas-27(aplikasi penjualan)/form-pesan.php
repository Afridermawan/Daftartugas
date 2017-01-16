<?php
  session_start();
  // session_destroy();
  include 'araybarang.php';
  if (isset($_SESSION['troli'])) {
    $cart = $_SESSION['troli'];
  } else {
    $cart = array();
  }

  if(isset($_GET['id'])) {
    $val=  $_SESSION['produk'][$_GET['id']];
  }

  include 'tampilan.php';

?>
<center><table border="2px" height:"100%"; width="33%">
 <div class="tengah">
  <fielsed style="">
    <form action="troli.php" method="POST">
      <tr>
        <td style="background-color:#1d4fe7"><center><h3> SILAHKAN ISI </h3></center></td>
          <link href='foto/d.png' rel='shortcut icon'>
      </tr>
      <tr>
        <td><input type="hidden" name="key" value="<?= $_GET['id'] ?>"></td>
      </tr>
      <tr>
        <td><center><img src="<?=$val['gambar'] ?>" width="250px;heigt:250px" name="gambar"></center></td><input type="hidden" name="gambar" value="<?=$val['gambar'] ?>"
      </tr>
      <tr>
        <td>Nama Barang :<center><input type="text" name="type" value="<?=$val['type'] ?>" readonly=""></td>
      </tr
      <tr>
        <td>Merk :<center><input type="text" name="merk" value="<?=$val['merk'] ?>" readonly=""></td>
      </tr>
     <tr>
       <td> Harga Barang :<center><input type="text" name="harga" placeholder="Harga Barang" value="<?=$val['harga'] ?>" readonly="" ></center></td><br>
     </tr>
     <tr>
       <td> Quantity :<center><input type="number" name="quantity" placeholder="Quantity"required></center></td><br>
     </tr>
     <tr>
       <input type="hidden" name="id_produk" value="<?= $val['id_produk']?>">
       <input type="hidden" name="produk" value="<?= $val['produk']?>">
       <td><center><a href="troli.php"><button style="width:490px;height:40px ; color:#ffffff;background:#1f55f9;border-radius:10px";  type="submit" name="save">Save</button></a></td></center>
     </tr>
   </form>
   </div>
  </table>
 <fieldset>
