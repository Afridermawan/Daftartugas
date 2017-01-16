<?php
//class
class perkalian
{
	//property
	public $hasil;
	public $angka;

	//method
	public function setAngka($angka,$hasil)
	{
		$this->angka = $angka;
		$this->hasil = $hasil;
	}

	public function getAngka()
	{
		return $this->angka * 5;
	}
	public function getHasil()
	{
		return $this->hasil;
	}
}
