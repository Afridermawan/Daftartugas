
<?php
echo "<h3><center>DAFTAR PELAJAR MIT SCHOOL</center></h3>";
$table=array();
 $table[]= [
   'nama'=>'Afri dermawan ginting',
   'kota asal'=>'Binjai',
   'kelas' => 'PHP'
 ];
 $table[]= [
   'nama' => 'Farhan mustaqiem',
   'kota asal' => 'Bekasi',
   'kelas' => 'PHP'
 ];
 $table[]= [
   'nama' => 'Muhammad ilham arrouf',
   'kota asal' => 'Malang',
   'kelas' => 'PHP'
 ];
 $table[]= [
   'nama'=> 'Muhammad cucu irsyad',
   'kota asal' => 'Tasik malaya',
   'kelas' => 'PHP'
 ];
 $table[]= [
   'nama' => 'Muhammad iqbal',
   'kota asal' => 'Bengkulu',
   'kelas' => 'PHP'
 ];
 $table[]= [
   'nama' => 'Febi andrian',
   'kota asal' => 'Baturaja',
   'kelas' => 'PHP'
 ];
 $table[]= [
   'nama' => 'Muhammad syafii',
   'kota asal' => 'Bojonegoro',
   'kelas' => 'PHP'
 ];
 $table[]= [
   'nama' => 'Labib muhajir',
   'kota asal' => 'Jombang',
   'kelas' => 'PHP'
 ];
?>
<center>
  <table border="5px">
    <tr>
      <th style="background:#2E8B57">NAMA</th>
      <th style="background:#2E8B57">KOTA ASAL</th>
      <th style="background:#2E8B57">KELAS</th>
    </tr>
      <?php foreach ($table as $value) : ?>
        <tr>
        <td style="background:#00FA9A; color:#000000; "width="180"><?=$value["nama"] ?></td>
        <td style="background:#00FA9A; color:#000000; "width="120"><center><?=$value["kota asal"] ?></center></td>
        <td style="background:#00FA9A; color:#000000; "width="120"><center><?=$value["kelas"] ?></center></td>
      </tr>
    <?php endforeach; ?>
  </table>
</center>
