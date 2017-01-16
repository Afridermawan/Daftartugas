<?php
session_start();
// session_destroy();
if(isset($_GET['del'])) {
  unset($_SESSION['troli'][$_GET['del']]);
  $_SESSION['troli'] = array();
}
if(isset($_GET['tambah'])) {
  $_SESSION['troli'][$_GET['tambah']][0]['quantity']++;
}
if(isset($_GET['kurang'])){
  if($_SESSION['troli'][$_GET['kurang']][0]['quantity'] > 1){
      $_SESSION['troli'][$_GET['kurang']][0]['quantity']--;
  }else{
    $_SESSION['troli'][$_GET['kurang']][0]['quantity'] = 1;
  }
if(isset($_GET['hapus'])){
  unset($_SESSION['troli']);
}

}
if (isset($_SESSION['troli'])) {
  $cart = $_SESSION['troli'];
} else {
  $_SESSION['troli'] = array();
}
function addtocard($key,$id, $produk,$merk,$type,$harga,$quantity,
  $gambar)
{

  if (in_array($id, array_column($_SESSION['troli'],'id_produk'))) {
    $search=array_search($id,array_column($_SESSION['troli'],'id_produk'));
    $_SESSION['troli'][$search][0]['quantity'] += $quantity ;
  } else {
  $cart[] = [
      'id'  => $key,
      'id_produk' => $id,
      'produk' =>  $produk,
      'merk'  =>  $merk,
      'type'  =>  $type,
      'harga' =>  $harga,
      'quantity'   => $quantity,
      'gambar'  =>  $gambar,
  ];

  echo("<script language='JavaScript'>
  window.alert('Berhasil ditambahkan ke Troli')
  ;</script>");

$_SESSION['troli'][]  = $cart;
return $cart;
}
}

// print_r($_SESSION['troli'][0][0]['id_produk']);

if(isset($_POST['save'])){
  addtocard($_POST['key'],$_POST['id_produk'],$_POST['produk'],$_POST['merk'],
  $_POST['type'],$_POST['harga'],$_POST['quantity'],$_POST['gambar']);
}

// print_r($_SESSION['troli']);
?>
<?php
include 'tampilan.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Troli Pesanan</title>
      <link href='foto/d.png' rel='shortcut icon'>
  </head>
  <body>
    <?php if(!empty($_SESSION['troli'])) : ?>
    <style type="text/css">
    body{background: #efefef;font-family: arial;}
    table{margin: 2em 0 0 0 ; border: 1px solid #eee;width: 100%;border-collapse: separate;;border-spacing: 0;}
    table th{background: #fafafa; border: none; padding: 20px; font-weight: normal;text-align: left;border: solid#eee}
    table td{background: #fff;border: none;padding: 12px 20px;font-weight: normal;text-align: left;border-top: 1px solid#eee;border: solid#eee}
    </style>
    <center><table class="troli" border="1px solid"; style="width:70%;height:70%">
      <tr>
        <td style="background:#208de6"> Gambar </td>
        <td style="background:#208de6"> Type </td>
        <td style="background:#208de6"> Merk </td>
        <td style="background:#208de6"> Harga </td>
        <td style="background:#208de6"> Quantity </td>
        <td style="background:#208de6"> Total </td>
        <td style="background:#208de6"> Option </td>
      </tr>
    <?php foreach ($_SESSION['troli'] as $key => $val) :?>
      <tr>
        <td><img src="<?=$val[0]['gambar'] ?>"style="width:150px;heigth:30%"></td>
        <td><?=$val[0]['type'] ?></td>
        <td><?=$val[0]['merk'] ?></td>
        <td><?=$val[0]['harga'] ?></td>
        <td>
          <a href="troli.php?tambah=<?= $key?>">
            <button>+</button>
          </a>
          <a href="troli.php?kurang=<?= $key ?>">
            <button>-</button>
          </a>

          <?=$val[0]['quantity'] ?>
        </td>
        <td><?=$total[]=$val[0]['harga']*$val[0]['quantity'] ?></td>
        <td><center><a href="troli.php?del=<?=$key?>"><button style="height:40px;width:80px;border-radius:10px; background-color:#00c198;color:#fff">Hapus</button></a></center></td>
      </tr>

      <?php endforeach; ?>
        <tr>
          <td colspan="6">Subtotal</td>
          <td colspan="1"><?=@array_sum($total)?></td>
        </tr>
        <tr>
          <th colspan="7"><a href="tampilan-pemesanan.php"><button style="height:40px;width:130px;border-radius:10px; background-color:#00c198;color:#fff">Lanjut Belanja</button>
          <a href="?sign=in"><button style="float:right;height:40px;width:130px;border-radius:10px; background-color:#00c198;color:#fff">Cek Out</button>
          <a href="troli.php?hapus"><button style="float:right;height:40px;width:130px;border-radius:10px; background-color:#00c198;color:#fff">Batalkan Pesanan</button></a></th>
        </tr>
        <?php
          //bab cekout
          if(isset($_GET['sign'])) :
         ?>

<form action="invoice.php" method="post" style="width:60%;height:60%">
  <table align="center">
    <tbody>
      <tr>
        <br>
         <center><form method="POST" style="width:60%;height:60%" action="troli.php">
           <fieldset style="width:68%">
             <center><h3> Silahkan isi form berikut!</h3></center>
             <hr>
             <hr>
             <p><input style="width:100%" type="text" name="nama" placeholder="Masukkan Nama Anda"/></p>
             <p><input style="width:100%" type="text" name="email" placeholder="Masukkan Email Anda"/></p>
             <p><textarea rows="10" cols="70" type="text" name="alamat" placeholder="Masukkan Alamat Anda"/></textarea></p>
             <p>Apakah anda Member ?
               <select name="member">
                 <option value="ya">Ya</option>
                 <option value="Tidak">Tidak</option>
               </select><br></p>
               <select style="width:25%" name="kota">
                <option value="1">Jakarta</option>
           			<option value="2">Bandung</option>
           			<option value="3">Surabaya</option>
                <option value="4">Bogor</option>
          			<option value="5">Bekasi</option>
          			<option value="6">Depok</option>
                <option value="7">Yogyakarta</option>
              </select><br></p>
             <button style="height:40px;width:130px;border-radius:10px; background-color:#00c198;color:#fff"><a href="troli.php?del=<?=$val['del']?>" style="text-decoration:none;color:#fff;">Batal cek out</a></button>
             <a href="invoice.php"><button type="submit" name="bayar"style="height:40px;width:130px;border-radius:10px; background-color:#00c198;color:#fff">Cek out</button></a>
         </fieldset>
        </form>
       <tbody>
      </table>
       <?php endif; ?>
 <?php
else :
echo "<center><img src=foto/.cart-kosong.png style=width:40%></center>";
endif;
?>

    </table>
  </body>
</html>
