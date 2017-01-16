<?php
include 'tampilan.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title> Form Login </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <center>
    <table border="5">
        <form method="POST" action="login.php">
          <tr>
            <td style="background:#008080"><center><h3>"SILAHKAN LOGIN"</h3></center>
              <hr><hr></td>
          </tr>
            <tr>
              <td><center><input type="text" name="nama" placeholder="Email or Username"></input></td>
            </tr>
            <tr>
              <td><center><input type="password" name="Password" placeholder="Password"></input></td>
            </tr>
            <br>
            <tr>
              <td style="background:#008080"><center><input type="submit" name="submit"style="background:#48D1CC; color:#000"></center></td>
            </tr>
            <?php
            if(isset($_POST['submit'])){
              echo "
                <script type='text/javascript'>
                  alert('Login Berhasil');
                  var jwb = confirm('Silahkan Lanjut!');
                  if(jwb) {
                    window.location ='pilihan_ganda.php';
                  } else {
                    window.location ='pilihan_ganda.php';
                  }
                </script>";
            }
              ?>
      </form>
    </table>
  </body>
</html>
