
<!-- <center> -->
<?php
  include 'araybarang.php';
?>
  <form method="POST" action="form-pesan.php">
  <link rel="stylesheet" href="store1.css">
  <?php foreach ($_SESSION['produk'] as $key => $val) : ?>
  <div class="isi" style="width:27%">

    <h4><?=$val['type'] ?></h4>
    <img src="<?=$val['gambar'] ?>" width=300px; height="250px"><br>
    <li> Harga :Rp. <?= number_format($val['harga'],"2",",",".")?></li><br>
      <a href="form-pesan.php?id=<?=$key?>"><button style="width:300px;height:30px;color:#ffffff;border-radius:20px; background:#00c198;"type="button" name="hp" value="" >Beli</button></a>
  </div>

</form>

<?php endforeach; ?>
