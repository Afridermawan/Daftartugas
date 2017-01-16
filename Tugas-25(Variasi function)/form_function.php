<?php
include "dataform_function.php";
?>
<h2> Menghitung Luas Persegi </h2>
<form action="form_function.php" method="POST">
  <input type="number" placeholder="Masukkan nilai" name="nilai1">
  <button type="submit" name="proses1"> Proses </button>
  <button type="submit"> Hapus </button>
</form>
<?php
  if(isset($_POST['proses1'])){
    echo luasPersegi($_POST['nilai1']) ;
  }
?>
<hr>

<h2> Menghitung luas Persegi Panjang </h2>
  <form action="form_function.php" method="POST">
    <input type="number" placeholder="Panjang" name="nilai1">
    <input type="number" placeholder="Lebar" name="nilai2">
    <button type="submit" name="proses2"> Proses </button>
    <button type="submit"> Hapus </button>
  </form>
  <?php
    if(isset($_POST['proses2'])){
      echo luasPersergipanjang($_POST['nilai1'],$_POST['nilai2']) ;
    }
  ?>

 <hr>

<h2> Menghitung luas Segitiga </h2>
  <form action="form_function.php" method="POST">
    <input type="number" placeholder="Alas" name="nilai1">
    <input type="number" placeholder="Tinggi" name="nilai2">
    <button type="submit" name="proses3"> Proses </button>
    <button type="submit"> Hapus </button>
  </form>
  <?php
    if(isset($_POST['proses3'])){
      echo luasSegitiga($_POST['nilai1'],$_POST['nilai2']);
    }
  ?>

  <hr>

  <h2> Menghitung Keliling Balok </h2>
    <form action="form_function.php" method="POST">
      <input type="number" placeholder="Panjang" name="nilai1">
      <input type="number" placeholder="Lebar" name="nilai2">
      <input type="number" placeholder="Tinggi" name="nilai3">
      <button type="submit" name="proses4"> Proses </button>
      <button type="submit"> Hapus </button>
    </form>
    <?php
      if(isset($_POST['proses4'])){
        echo kelilingBalok($_POST['nilai1'],$_POST['nilai2'],$_POST['nilai3']) ;
      }
    ?>

   <hr>

   <h2> Volume Kerucut</h2>
     <form action="form_function.php" method="POST">
       <input type="number" placeholder="Panjang jari*" name="nilai1">
       <input type="number" placeholder="Tinggi" name="nilai2">
       <button type="submit" name="proses5"> Proses </button>
       <button type="submit"> Hapus </button>
     </form>
     <?php
       if(isset($_POST['proses5'])){
         echo volumeKerucut($_POST['nilai1'],$_POST['nilai2']) ;
       }
     ?>

     <hr>

     <h2> Keliling Persegi Panjang </h2>
     <form action="form_function.php" method="POST">
      <input type="number" placeholder="Panjang" name="nilai1">
      <input type="number" placeholder="Lebar" name="nilai2">
      <button type="submit" name="proses6"> Proses </button>
      <button type="submit"> Hapus </button>
    </form>

    <?php
      if(isset($_POST['proses6'])){
        echo kelilingPersegipanjang($_POST['nilai1'],$_POST['nilai2']) ;
      }
    ?>
      <hr>

      <h2> Modulus </h2>
      <form action="form_function.php" method="POST">
       <input type="number" placeholder="Nilai 1" name="nilai1">
       <input type="number" placeholder="Nilai 2" name="nilai2">
       <button type="submit" name="proses7"> Proses </button>
       <button type="submit"> Hapus </button>
     </form>

     <?php
       if(isset($_POST['proses7'])){
         echo modulus($_POST['nilai1'],$_POST['nilai2']);
       }
    ?>
