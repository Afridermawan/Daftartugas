<?php
function menghitung($x,$y){
  $z= $x+$y ;
  return $z;
}
echo "Rumus = x + y  = z";
echo "<br>";
echo "Angka penjumlahan = (2,3)";
echo "<br>";
echo "1. hasil dari penjumlahan ="." ".menghitung(2,3);
echo "<br>";
echo "<hr>";
function luasPersegi($s){
  $luas = $s**2;
  return $luas;
}
echo "Rumus = sisi pangkat 2";
echo "<br>";
echo "Angka luasPersegi = (4)**2";
echo "<br>";
echo "2. hasil dari perpangkatan ="." ".luasPersegi(4);
echo "<br>";
echo "<hr>";

define("PHI", 22/7);

function luasLingkaran($r){
  $Lingkaran = $r * $r * PHI ;
  return $Lingkaran;
}
echo "Rumus = r * r * PHI";
echo "<br>";
echo "Angka luasLingkaran = (21) * (21) * 22/7";
echo "<br>";
echo "3. hasil dari luas Lingkaran ="." ".luasLingkaran(21);
echo "<br>";
echo "<hr>";

function prismaLingkaran($r,$t){
  $volume = $r * $r * PHI * $t;
  return $volume;
}
echo "Rumus = r * r * PHI * t";
echo "<br>";
echo "Angka Prisma Lingkaran = 7 * 7 * 22/7 * 10 ";
echo "<br>";
echo "4. hasil dari prisma Lingkaran ="." ".prismaLingkaran(7,10);
echo "<br>";
echo "<hr>";

function luasPersergipanjang($p,$l){
  $luas = $p * $l;
  return $luas;
}
echo "Rumus = P * L";
echo "<br>";
echo "Angka Luas Persegi Panjang = 7 * 10";
echo "<br>";
echo "5. hasil dari prisma Lingkaran ="." ".prismaLingkaran(7,10);
echo "<br>";
echo "<hr>";

function luasSegitiga($a,$t){
  $luas = 1/2 * $a * $t;
  return $luas;
}
echo "Rumus = 1/2 a * t";
echo "<br>";
echo "Angka Luas Segitiga= 10 * 5";
echo "<br>";
echo "6. hasil dari luas Segitiga  ="." ".luasSegitiga(10,5);
echo "<br>";
echo "<hr>";

Function kelilingPersegi($s){
  $keliling = $s + $s + $s + $s ;
  return $keliling;
}
echo "Rumus = s + s + s + s";
echo "<br>";
echo "Angka Keliling Persegi = 15 ";
echo "<br>";
echo "7. hasil dari keliling Persegi ="." ".kelilingPersegi(15);
echo "<br>";
echo "<hr>";

Function kelilingPersegipanjang($a,$t){
  $keliling = 2 * $a + 2 * $t ;
  return $keliling;
}
echo "Rumus = 2 * a + 2 * t";
echo "<br>";
echo "Angka Keliling Persegi = 2 * 2 + 2 * 6 ";
echo "<br>";
echo "8. hasil dari keliling Persegi ="." ".kelilingPersegipanjang(2,6);
echo "<br>";
echo "<hr>";

function membagikan($x,$y){
  $z= $x / $y ;
  return $z;
}
echo "Rumus = x / y  = z";
echo "<br>";
echo "Angka membagikan = (15,3)";
echo "<br>";
echo "9. hasil dari pembagian ="." ".membagikan(15,3);
echo "<br>";
echo "<hr>";

function modulus($x,$y){
  $z= $x % $y ;
  return $z;
}
echo "Rumus = x % y  = z";
echo "<br>";
echo "Angka modulus = (16,3)";
echo "<br>";
echo "10. hasil dari modulus ="." ".modulus(16,3);
echo "<br>";
echo "<hr>";

function print_text(){
  echo ".....";
  echo "Kocaaaakkkk !!";
  echo ".....";
}
function jarak(){
  echo "<br>";
}
print_text();
jarak();
print_text();
jarak();
print_text();
echo "<br>";
echo "<hr>";

function kelilingBalok($p,$l,$t){
  $keliling = 4 * ($p + $l + $t);
  return $keliling;
}
echo "Rumus = 4 * (p + l + t)";
echo "<br>";
echo "Angka Keliling Balok = 4 * (10 + 2 + 4) ";
echo "<br>";
echo "12. hasil dari keliling Balok ="." ".kelilingBalok(10,2,4);
echo "<br>";
echo "<hr>";

function volumeKerucut($r ,$t){
  $volume = 1/3 * PHI * $r * $r *$t;
  return $volume;
}
echo "1/3 * PHI * r * r * t";
echo "<br>";
echo "Angka volume Kerucut = 1/3 * PHI * 3 * 3 * 7 ";
echo "<br>";
echo "13. hasil dari Volume kerucut ="." ".volumeKerucut(3,7);
echo "<br>";
echo "<hr>";

?>
