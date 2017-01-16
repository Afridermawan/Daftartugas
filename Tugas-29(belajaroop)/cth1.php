<?php
//class
class robot{

//property
	public $pedang = 'samurai';

//method
// public function pedang()
// {
// 	echo 'robotnya memiliki pedang' . $this->pedang;
// }
// public function setJumlahPedang($pedang)
// {
// 	 $this->pedang = $pedang;
// }
// public function tampil()
// {
// 	echo 'robot itu punya'.$this->pedang.'pedang';
// }

//method set && get

	public function set_pedang($pedang)
	{
		$this->pedang = $pedang ;
	}

	public function get_pedang()
	{
		return $this->pedang;
	}

}
$robot = new robot ;
// $robot->pedang();
// $robot->setJumlahPedang(2);
// $robot->tampil();
$robot->set_pedang('parang');
echo 'peralatannya'. $robot->get_pedang();
?>