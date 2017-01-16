<?php
//class
class pembagian
{
	//property
	public $angka;

	//methode
	public function setBagi($angka)
	{
		$this->angka = $angka;
	}
	public function getBagi()
	{
		return $this->angka / 5;
	}
}
