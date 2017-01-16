<?php

// class
class KalkulatorSederhana
{
	//property
	private $a;
	private $b;
	//methode
	public function tambah($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
		$hasil = $this->a + $this->b;
		return $hasil;
	}

	public function kurang($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
		$hasli = $this->a - $this->b;
		return $hasil;
	}
	public function kali($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
		$hasil = $this->a * $this->b;
		return $hasil;
	}
	public function bagi($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
		$hasil = $this->a / $this->b;
		return $hasil;
	}

	public function TampilkanForm()
	{
		echo '<form method="POST">';
		echo '<input type="text" name="a"> &nbsp;';
		echo '<select name="matematika">
			<option value="tambah"> + </option>
			<option value="kurang"> - </option>
			<option value="kali"> x </option>
			<option value="bagi"> : </option>
			  </select> &nbsp;';
		echo '<input type="text" name="b"> &nbsp;';
		echo '<label> = </label> &nbsp;';
		echo '<input type="submit" value="hitung">';
		echo '</form>';
	}
}

$KalkulatorSederhana = new KalkulatorSederhana();
$KalkulatorSederhana-> TampilkanForm();

if ($_POST) {
	$a = $_POST['a'];
	$b = $_POST['b'];
	if($_POST["matematika"] == "tambah"){
		echo "Hasil ".$a." + ".$b." = ".$KalkulatorSederhana->tambah($a, $b)."</ br></ br>";
	}elseif($_POST['matematika'] == "kurang"){
		echo "Hasil ".$a." - ".$b." = ".$KalkulatorSederhana->kurang($a, $b)."</ br></ br>";
	}elseif($_POST['matematika'] == "kali"){
		echo "Hasil ".$a." x ".$b." = ".$KalkulatorSederhana->kali($a, $b)."</ br></ br>";
	}elseif($_POST['matematika'] == "bagi"){
		echo "Hasil ".$a." : ".$b." = ".$KalkulatorSederhana->bagi($a, $b)."</ br></ br>";
	}
}
?>