<?php
  session_start();
  // session_destroy();
  if(!isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
  } else {
    $produk = array();
  }
    $produk[] = [
      'produk'=> 'HP',
      'merk' => 'xiaomi',
      'type' => 'mi max',
      'harga' => '2560000',
      'quantity' => '1',
      'gambar'  =>  'XiaomiMi.png',
    ];
    $produk[] = [
      'produk'=> 'HP',
      'merk' => 'xiaomi',
      'type' => 'mi4',
      'harga' => '3300000',
      'quantity' => '1',
      'gambar'  =>  'Xiaomi-Mi4.png',
    ];
    $produk[] = [
      'produk'=> 'HP',
      'merk' => 'xiaomi',
      'type' => 'redmi note 3',
      'harga' => '2215000',
      'quantity' => '1',
      'gambar'  =>  'xiaomi-redmi-note-3.png',
      var_dump ($produk)
    ];
  function addtocard($produk,$merk,$type,$harga,$quantity,$gambar)
{
  global $produk;

  $cart = array(
    'produk'  =>   $produk,
    'merk'  =>  $merk,
    'type'  =>  $type,
    'harga' =>  $harga,
    'quantity'  =>  $quantity,
    'gambar'  =>  $gambar,
  );

  $_SESSION['cart'][] = $cart;

  return $cart;
}

addtocard($produk[1]['produk'],$produk[1]['merk'],$produk[1]['type'],$produk[1]['harga'],$produk[1]['quantity'],$produk[1]['gambar']);


// var_dump($produk);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> BLACK NAME </title>
    <link href="style.css" rel="stylesheet" class="member">
  </head>
  <body>
    <?php
      include 'daftarbarang.php';
    ?>
     </form>
  </body>
</html>
  
