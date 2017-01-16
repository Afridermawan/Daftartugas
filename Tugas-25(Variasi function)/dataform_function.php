<?php
function luasPersegi($s){
  $luas = $s * $s;
  return $luas;
}

function luasPersergipanjang($p,$l){
  $luas = $p * $l;
  return $luas;
}
function luasSegitiga($a,$t){
  $luas = 1/2 * $a * $t;
  return $luas;
}
function kelilingBalok($p,$l,$t){
  $keliling = 4 * ($p + $l + $t);
  return $keliling;
}
define("PHI", 22/7);
function volumeKerucut($r ,$t){
  $volume = 1/3 * PHI * $r * $r *$t;
  return $volume;
}
function kelilingPersegipanjang($p,$l){
  $keliling = 2 * ($p + $l);
  return $keliling;
}
function modulus($x,$y){
  $z= $x % $y ;
  return $z;
}
?>
