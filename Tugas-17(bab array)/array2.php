<?php
echo "<center><h3>DAFTAR PELAJAR MIT SCHOOL</h3></center>";
 $data= array(
          array("nama"=>"Afri dermawan ginting","kota asal"=>"Binjai"),
          array("nama"=>"Farhan mustaqiem","kota asal"=>"Bekasi"),
          array("nama"=>"Muhammad ilham arrouf","kota asal"=>"Malang"),
          array("nama"=>"Muhammad cucu irsyad","kota asal"=>"Tasik malaya"),
          array("nama"=>"Muhammad iqbal","kota asal"=>"Bengkulu"),
          array("nama"=>"Febi andrian","kota asal"=>"Baturaja"),
          array("nama"=>"Muhammad syafi'i","kota asal"=>"Bojonegoro"),
          array("nama"=>"Labib muhajir","kota asal"=>"Jombang")
);
?>
<center>
  <table border="3">
    <tr>
      <th>NAMA</th>
      <th>KOTA ASAL</th>
      </tr>
      <?php foreach ($data as $value):?>
        <tr>
        <td width="180"><?=$value["nama"]?></td>
        <td width="120"><?=$value["kota asal"]?></td>
      </tr>
    <?php endforeach;?>
  </table>
</center>
