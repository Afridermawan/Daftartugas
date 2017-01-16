<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <title> G'Store </title>
      <link href='foto/d.png' rel='shortcut icon'>
      <link href="style.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  </head>
  <body>
    <img src="foto/d.png" class="logopic">
    <div class="legal">
      <h3> #AppsMap <h3>
    </div>
    <nav>
      <div class="profile">
          <ul>
            <li><a href="troli.php" title="Troli"><img src="foto/keranjang.png"width="60px" style="color:#000000"></a></li>
            <div class="notif"><?=@count($_SESSION['troli']) ?></div>
          </ul>
      </div>
      <ul class="menu">
        <li><a href="tampilan-pemesanan.php" title="Home"><button style="background:#00c198;border-radius:10px;color:#000;font-size:25px">Home</button></a></li>
        <li><a href="#"><button style="background:#00c198;border-radius:10px;border-radius:10px;color:#000;font-size:25px">Daftar</button></a></li>
        <li><a href="#"><button style="background:#00c198;border-radius:10px;color:#000;font-size:25px">Contact</button></a></li>
      </ul>
    </nav>
    <header></header>
    <section>
      <article class="center">
        <?php
          require 'daftarbarang.php';
        ?>
      </article>
    </section>

    <footer>~ By : Black Name ~</footer>
  </body>
</html>
