<center><h3>"SILAHKAN LOGIN"</h3></center>
<center>
<table border="5">
    <form method="POST" action="form.php">
      <tr>
        <td style="background:#008080">Nama :</td>
      </tr>
      <tr>
        <td><input type="text" name="nama" placeholder="Masukkan nama"></input></td>
      </tr>
      <tr>
        <td style="background:#008080">No telepon :</td>
      </tr>
      <tr>
        <td><input type="text" name="no_telepon" placeholder="No_telepon"></input></td>
      </tr>
      <tr>
        <td style="background:#008080"><center><button style="background:#48D1CC; color:#000" name="submit" value="1">Submit</button></center></td>
      </tr>
    </form>
</table>
<?php
if(isset($_POST['submit'])){
  echo "Nama: " . $_POST["nama"] . "<br>";
  echo "No_telepon: ". $_POST["no_telepon"] . "<br>" ;
 $n = $_POST["nama"];
 $t = $_POST["no_telepon"];
  if ($n == "afridermawan" && $t == "082277119212") {
    echo "Selamat Login Anda Behasil .. (0_+)". "<br>";
  } else {
    echo "Data yang anda masukkan salah !". "<br>";
  }
}
?>
