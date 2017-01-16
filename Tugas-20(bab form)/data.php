<?php
  $nama_barang = $_POST['barang'];
  $harga = $_POST['harga'];
  $quantity = $_POST['quantity'];
  $status = $_POST['status'];
  $kota = $_POST['kota'];
  $namapelanggan = $_POST['nama'];

  $subtotal = $harga * $quantity;


  switch ($status) {
    case "Member":
      $diskon = $subtotal * 0.05 ;
    break ;
    default :
      $diskon = 0 ;
  }

  $total1 = $subtotal -$diskon ;

  if($kota == "jakarta"){
    $ongkir = 10000;
  } elseif ($kota == "bandung"){
    $ongkir = 9000;
  } elseif ($kota == "surabaya"){
    $ongkir = 8000;
  } else {
    $ongkir = 0 ;
  }

  $total = ($subtotal - $diskon) + $ongkir;
 ?>


<center><table border="5" width="300px" height="100"></center>
  <center>
    <form method="POST" action="formpenjualan.php">
      <tr>
        <td style="background:#20B2AA"><center><h3> "DATA PEMBELIAN" </h3></center>
          <center><p> NPWP : 12.4788.12002 </p></center>
          <center><p> Tanggal pembelian : 26'12'2016 </p></center>
          <center><p> Rejowinangun , Kota Yogyakarta</p></center>
        </td>
      </tr>
      <tr>
        <td style="background:#00FFFF"> Nama Pelanggan : </td>
      </tr>
      <tr>
        <td style="background:#E6E6FA"><?php echo "$namapelanggan"; ?></td>
      </tr>
      <tr>
        <td style="background:#00FFFF"> Status Pelanggan : </td>
      </tr>
      <tr>
        <td style="background:#E6E6FA"><?php echo "$status"?></td>
      </tr>
      <tr>
        <td style="background:#00FFFF"> Nama Barang :</td>
      </tr>
      <tr>
        <td style="background:#E6E6FA"><?php echo "$nama_barang";?></td>
      </tr>
      <tr>
        <td style="background:#00FFFF"> Harga :</td>
      </tr>
      <tr>
        <td  style="background:#E6E6FA"><?php if ($harga > 0) {
            echo "Rp.".number_format($harga);
          } else {
            echo "0";
          }
          ?></td>
      </tr>
      <tr>
        <td style="background:#00FFFF"> Quantity :</td>
      </tr>
      <tr>
        <td style="background:#E6E6FA"><?php echo "$quantity"; ?></td>
      </tr>
      <tr>
        <td style="background:#00FFFF"> Ongkos Kirim :</td>
      </tr>
        <td style="background:#E6E6FA"><?php echo "Rp." .number_format($ongkir); ?></td>
      </tr>
      <tr>
        <td style="background:#00FFFF"> Diskon :</td>
      </tr>
      <tr>
        <td style="background:#E6E6FA"><?php echo "Rp." .number_format($diskon); ?></td>
      </tr>
      <tr>
        <td style="background:#00FFFF"> Subtotal :</td>
      </tr>
      <tr>
        <td style="background:#E6E6FA"><?php echo "Rp." .number_format($total1); ?></td>
      </tr>
      <tr>
        <td style="background:#00FFFF"> Total  :</td>
      </tr>
      <tr>
        <td style="background:#E6E6FA"><?php echo "Rp.".number_format($total);?> </td>
      </tr>
      <tr>
        <td> Kasir : Afri muhsin </td>
      </tr>
      <tr>
        <td style="background:#20B2AA">
          <a href="formpenjualan.php"><center><button name="back" style="width:25%"> Back </button>
        </center></td></a>
      </tr>
     </form>
    </table>
  </center>
