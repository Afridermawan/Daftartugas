<?php
session_start();
if(isset($_POST['save'])) {
  $_SESSION['table'][$_POST['id']] = array(
    'user_id' => $_POST['user_id'],
    'nama' => $_POST['nama'],
    'password' => $_POST['password']
  );

  echo "
        <script>
            window.location = 'sessionlogin.php';
        </script>
       ";
}
$table = $_SESSION['table'][$_GET['edit']];

?>
<!DOCTYPE html>
<html>
  <head>
    <title> Edit Session </title>
    <link href="style.css" rel="stylesheet" class="edit session">
  </head>
  <body>
    <form action="edit_sessionlogin.php?edit=<?=$_GET['edit']?>" method="POST">
      ID : <input type="text" name="user_id" value="<?=$table['user_id']?>">
      Nama Bus : <input type="text" name="nama" value="<?=$table['nama']?>">
      Password : <input type="text" name="password" value="<?=$table['password']?>">

      <input type="hidden" name="id" value="<?=$_GET['edit']?>">
      <button type="submit" name="save" value="1">Simpan</button>
    </form>
  </body>
</html>
