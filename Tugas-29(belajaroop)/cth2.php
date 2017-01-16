<?php
//class
class motor{

//property
public $roda ;

//method
public function setRoda($roda)
{
	$this->roda = $roda;
}
public function getRoda()
{
	return $this->roda;
}

}
$motor = new motor;
$motor->setRoda(2);
echo 'motor itu punya'." ".$motor->getRoda()." " .'roda yang selalu di gunakan untuk berjalan dan'." ".$motor->getRoda()." ". "roda itu harus selalu di ganti";



?>