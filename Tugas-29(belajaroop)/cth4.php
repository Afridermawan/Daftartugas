<?php
// //class
class Kipas
{
	//property
	public $merk;
	public $warna;

	//method
	public function setMerk($merk,$warna)
	{
		$this->merk = $merk;
		$this->warna = $warna;
	}

	public function getMerk()
	{
		return $this->merk;
	}
	public function getWarna()
	{
		return $this->warna;
	}

}
// $kipas = new kipas;
// $kipas->setMerk('miyako');
// echo "kipas angin itu merknya ".$kipas->getMerk();