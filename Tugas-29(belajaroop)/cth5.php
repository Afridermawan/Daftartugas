<?php
include 'cth4.php';
include 'cth6.php';
include 'cth7.php';

// $kipas	= new kipas;
// $kipas->setMerk('miyako','hijau');
$perkalian = new perkalian;
$perkalian->setAngka(9,45);
$pembagian = new pembagian;
$pembagian->setBagi('20');


 ?>

<!DOCTYPE html>
<html>
	<head>
		<title> Belajar OOP</title>
	</head>
	<body>
		<h3>Hasil dari perkalian 9 x 5 : <?= $perkalian->getAngka() ?></h3>
		<h3>Hasil dari pembagian 20 : 5 = <?= $pembagian->getBagi() ?> </h3>
	</body>
</html>