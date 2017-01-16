<?php
$table=array();
 $table[]= [
   'nama'=>'Afri dermawan ginting',
   'kota asal'=>[
     'kota'=> 'Binjai' ],
   'kecamatan' => 'tanah seribu',
   'kelas' => 'PHP'
 ];
 $table[]= [
   'nama' => 'Farhan mustaqiem',
   'kota asal' =>[
     'kota'=>'Bekasi'],
   'kecamatan' => 'tambun',
   'kelas' => 'PHP'
];
foreach ($table as $value):
  echo $value['nama'] . "&nbsp; <br>";
  echo $value['kota asal']['kota'] . "&nbsp; <br>";

endforeach;

?>
