<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Black Name </title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  </head>
    <body>
      <center><table border="2px" width="33%">
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
