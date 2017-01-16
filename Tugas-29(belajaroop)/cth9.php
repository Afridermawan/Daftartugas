<?php

// class
class SuaraSederhana
{
	//property
	public $nama;
	public $warna;
	public $suara;
	//methode
	public function suaraKucing($nama, $warna , $suara)
	{
		$this->nama = $nama;
		$this->warna = $warna;
		$this->suara = $warna;
	}
}

$hewan = new suaraSederhana();

if(isset($_POST['input'])) {
	//property
	$hewan->nama = $_POST['nama'];
	$hewan->warna = $_POST['warna'];
	$hewan->suara = $_POST['suara']; 	
}

?>

<form action="cth9.php" method="POST">
	<input type="text" name="nama" placeholder="Nama hewan"><br>
	<input type="text" name="warna" placeholder="Warna hewan"><br>
	<input type="text" name="suara" placeholder="Suara hewan"><br>
	<input type="submit" value="Kenali hewan anda" name="input">
</form><br>

<?php if(isset($_POST['input'])) ?>
	<p><?= $hewan->nama ?> anda,yang berwarna <?= $hewan->warna ?> memiliki suara <?= $hewan->suara ?>.</p>
