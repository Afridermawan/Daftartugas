<?php
//class
class jam{
//property
public $jarumjam;
public $warna;
//method
public function setJam($jarumjam,$warna)
{
	$this->jarumjam = $jarumjam;
	$this->warna = $warna;
}
public function getJam()
{
	return $this->jarumjam;
	return $this->warna;
}

}
$jam = new jam;
$jam->setJam('berputar kekanan', 'putih');
echo "jarum jam selalu ".$jam->getJam()."<br>";
echo "dan jam nya berwarna ".$jam->getJam();
?>