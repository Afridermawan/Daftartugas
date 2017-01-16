<?php
session_start();
// session_destroy();
if(empty($_SESSION['data'])){
  $_SESSION['data'] = array();
}
// var_dump($_SESSION['login']);
$userID = $_SESSION['login']['user_id'];

if(isset($_POST['simpan'])){
  $data = array(
    'namabus' => $_POST['namabus'],
    'keberangkatan' => $_POST['keberangkatan'],
    'jurusan' => $_POST['jurusan'],
    'waktutiba' => $_POST['waktutiba'],
    'id_user' => $userID
  );
  $_SESSION['data'][] = $data;
  // var_dump($_SESSION['table']);
}
if(isset($_GET['del'])){
  unset($_SESSION['data'][$_GET['del']]);
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title> Jadwal Bus </title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <center><section>
      <form class="dev" action="jadwal.php" method="POST"></p>
        <p><input type="text" name="namabus" placeholder="Nama Bus"></p>
        <p><input type="text" name="keberangkatan" placeholder="keberangkatan"></p>
        <p><input type="text" name="jurusan" placeholder="Jurusan"></p>
        <p><input type="text" name="waktutiba" placeholder="Waktu tiba"></p>
        <p><input type="rext" name="id_user" placeholder="Id_user"></p>
        <p><button type="submit" name="simpan">Simpan</button>
          <a href="logout.php"><button type="button" name="logout">Log Out</button></a></p>
      </form>
      <table border="2px">
        <tr>
          <td> No</td>
          <td> Nama Bus</td>
          <td> Keberangkatan</td>
          <td> Jurusan </td>
          <td> Waktu tiba </td>
          <td> ID </td>
          <td colspan="3"><center> Option </td>
        </tr>
      <?php foreach($_SESSION['data'] as $key => $value) : ?>
      <?php if ($userID == 1) :?>
          <tr>
            <td><?= $key ?></td>
            <td><?= $value['namabus'] ?></td>
            <td><?= $value['keberangkatan'] ?></td>
            <td><?= $value['jurusan'] ?></td>
            <td><?= $value['waktutiba'] ?></td>
            <td><?= $value['id_user'] ?></td>
            <td><a href="jadwal.php?del=<?=$key?>">Delete</td>
            <td><a href="editjadwal.php?edit=<?=$key?>">Edit</td>
          </tr>
        <?php endif ?>
      <?php endforeach ?>
    </section>
  </body>
</html>
