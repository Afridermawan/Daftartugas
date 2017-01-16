<?php 
// session_start();
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
}
?>
<tr>
<li style="width:30px;padding-right:100px;float:right;padding-top:50px;margin:0px"><?= @$nama ?></li>
</tr>

<?php
include 'tampilan.php';
include 'array2.php';

function acakSoal()
{
	global $pertanyaan;
	
	shuffle($pertanyaan);
}

acakSoal();


if(isset($_GET['pilihan'])) {
	$total = 0 ;

	foreach($_GET['pilihan'] as $a => $b)

		if(substr($b, 0, 1) == $pertanyaan[$a]['jawaban'])
    $total++;
			echo "
				<script type='text/javascript'>
					alert('Skor anda : ".$total."');
					var jwb = confirm('ingin main lagi.?');
					if(jwb) {
						window.location ='pilihan_ganda.php';
					} else {
						window.location ='pilihan_ganda.php';
					}
				</script>
			";
}
$no = 1;
$layout = '
<div>
  <div><br>%s. %s</div>
  <div>%s</div>
</div>
';
?>

<form>

	<?php


	foreach($pertanyaan as $key => $value)
	{
		$pilihan = explode('|', $value['pilihan']);
		$radio = "";
		foreach($pilihan as $ky => $val)
		{
			$radio .= '<label><input type="radio" value="'.$val.'" name="pilihan['.$key.']">'.$val. '</label><br>';
		}

		printf($layout, $no++, $value['soal'], $radio);

  }
	?>
	<br><br><br>
<input type="submit" style="width:120px;height:50px;background:#00cd6b;color:#ffffff" value="Hitung score anda" name="score">
</form>

<?php

if(isset($_GET['score'])) {
	echo "
	<script type='text/javascript'>
	alert('Tolong isi soal berikut');
	</script>
	";
}


?>
