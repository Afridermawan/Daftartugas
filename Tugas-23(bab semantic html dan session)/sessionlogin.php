<?php
  session_start();
  // session_destroy();
  if(!isset($_SESSION['table'])){
    $_SESSION['table'] = array();
  } else {
    $table = $_SESSION['table'];
  }

  if(isset($_POST['save']) && $_POST['save'] == 1){
    $table[] = [
      'user_id'=> $_POST['user_id'],
      'nama' => $_POST['nama'],
      'password' => $_POST['password'],
    ];

    $_SESSION['table'] = $table;
  }
  if(isset($_GET['del'])) {
    unset($_SESSION['table'][$_GET['del']]);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Daftar Member </title>
    <link href="style.css" rel="stylesheet" class="member">
  </head>
  <body>
    <center><table border="2px" height:"100%"; width="33%">
     <form action="sessionlogin.php" method="POST">
       <tr>
         <td style="background-color:#1d4fe7"><center><h3> Daftar Member </h3></center></td>
       </tr>
       <tr>
         <td> ID :<center><input type="text" name="user_id" placeholder="user_id" style="width:90%"></center></td><br>
       </tr>
       <tr>
         <td> Nama :<center><input type="text" name="nama" placeholder="Nama" style="width:90%"></center></td><br>
       </tr>
       <tr>
         <td> Password :<center><input type="text" name="password" placeholder="password"style="width:90%"></center></td><br>
       </tr>
       <tr>
         <td><center><button type="submit" name="save" value="1">Save</button></td>
       </tr>
     </table>
     </form>

    <table border="2px" width="33%">
      <tr>
        <td> ID </td><br>
        <td> Nama </td><br>
        <td> password </td><br>
      </tr>
      <?php if(!empty($_SESSION['table'])) :?>
        <?php foreach ($_SESSION['table'] as $key => $value) :?>
        <tr>
          <td><?= $value['user_id'] ?></td>
          <td><?= $value['nama'] ?></td>
          <td><?= $value['password'] ?></td>
        </tr>
      <?php endforeach; ?>
      <tr>
        <td  colspan="3"><a href="coba.php"><center><button type="submit" name="login" value="1">LOGIN</button></a></td>
      </tr>
    <?php endif; ?>
    </table>
  </body>
</html>
