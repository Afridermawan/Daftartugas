<!DOCTYPE html>
  <html>
    <head>
      <title> Login Bus </title>
      <link href="play.css" rel="stylesheet" type="text/css">
    </head>
    <body>
  <center>
  <?php
  session_start();
  // session_destroy();
  // var_dump($_SESSION['table']);
       if (!empty($_POST['save'])) {
           foreach ($_SESSION['table'] as $val) {
               if ($val['nama'] == $_POST['nama']
                   && $val['password'] == $_POST['password']
               ) {
                   $_SESSION['login'] = $val;
               }
           }

           if (empty($_SESSION['login'])) {
               echo "Nama dan password tidak ditemukan". "<br>";
               echo "Silahkan Daftarkan Bus Anda !!"."<br>";
             } else {
             echo  "<script>window.location = 'jadwal.php'; </script>";
           }
         }
  ?>
  <section>
  <table>
    <tr>
      <td><form action="sessionlogin.php" method="POST">
        <button type="submit" name="save"> Disini !</button>
      </form></td>
    </tr>
  </table>

  <form method="POST">
   <table width="300" height="169" border="0" cellpadding="0" cellspacing="0">
     <tr bgcolor="#1beeb5">
        <td height="26" colspan="2"><div align="center"><strong>LOGIN YUUK !</strong></div></td>
      </tr>
      <tr>
        <td width="95" height="32">Nama</td>
        <td width="304"><label>:
            <input name="nama" type="text" id="nama" placeholder="Nama"/>
        </label></td>
      </tr>
      <tr>
        <td height="26">Password</td>
        <td><label>:
            <input name="password" type="text" id="password" placeholder="password"/>
        </label></td>
      </tr>
      <tr>
        <td height="48" class="wew"> </td>
        <td><button type="submit" name="save" value="1" id="login" style="background-color:#1beeb5"> Login </button>
            <input name="Batal" type="submit" id="Batal" value="Batal" style="background-color:#1beeb5">  </td>
      </tr>
          </form>
        </table>
      </section>
    </center>
  </body>
</html>
