<?php
$produk=array();
  $produk[]=[
    'id_produk' => '0001',
    'produk' => 'HP',
    'merk' => 'Xiaomi',
    'type' => 'MI MAX',
    'harga' => '2560000',
    'quantity'  =>  '1',
    'gambar'  =>  'foto/XiaomiMi.png',
  ];
  $produk[]=[
    'id_produk' => '0002',
    'produk' => 'HP',
    'merk' => 'Xiaomi',
    'type' => 'MI 4',
    'harga' => '3300000',
    'quantity'  =>  '1',
    'gambar'  =>  'foto/Xiaomi-Mi4.png',
  ];
  $produk[]=[
    'id_produk' => '0003',
    'produk' => 'HP',
    'merk' => 'Xiaomi',
    'type' => 'REDMI NOTE 3',
    'harga' => '2215000',
    'quantity'  =>  '1',
    'gambar'  =>  'foto/xiaomi-redmi-note-3.png',
    // var_dump ($produk)
  ];
  $_SESSION['produk']  =  $produk;
?>
