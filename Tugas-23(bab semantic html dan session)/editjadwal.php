<?php
session_start();
if(isset($_POST['save'])) {
    $_SESSION['table'][$_POST['id']] =array(
      'namabus' => $_POST['namabus'],
      'keberangkatan' => $_POST['keberangkatan'],
      'jurusan' => $_POST['jurusan'],
      'waktutiba' => $_POST['waktutiba'],
      'id_user' => $_POST['id_user']
    );
    echo"
          <script>
            window.location = 'jadwal.php';
          </script>
          ";
  }
  $table = $_SESSION['table'][$_GET['edit']];

  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <title> Edit Jadwal </title>
      <link href="style.css" rel="stylesheet">
    </head>
    <body>
      <div class="bray">
        <form class="enjoy"
         action="editjadwal.php?edit=<?=$_GET['edit']?>" method="POST">
         <center><table border="2">
           <tr>
            <td>Nama Bus :<center><input type="text" name="namabus"value="<?=$table['namabus']?>"></center><td>
           </tr>
           <tr>
            <td>keberangkatan :<center><input type="text" name="keberangkatan" value="<?=$table['keberangkatan']?>"></center></td>
          </tr>
          <tr>
            <td>Jurusan :<center><input type="text" name="jurusan" value="<?=$table['jurusan']?>"></center></td>
          </tr>
          <tr>
            <td>Waktu Tiba :<center><input type="text" name="waktutiba" value="<?=$table['waktutiba']?>"></center></td>
          </tr>
          <tr>
            <td>ID User :<center><input type="text" name="id_user" value="<?=$table['id_user']?>"></center></td>
          <tr>
            <td><input type="hidden" name="id" value="<?=$_GET['edit']?>">
            <center><button type="submit" name="save" value="1">Save</button></center></td>
          </tr>
          </table></table>
        </form>
      </div>
    </body>
  </html>
