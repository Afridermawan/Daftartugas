<!DOCTYPE html>
<html>
<head>
	<title>Cek jawaban</title>
</head>
<body>
	<form action="cekjawaban.php" method="POST" accept-charset="utf-8">
		<div>
			<tr>
				<td>Nilai benar</td>
				<td>Nilai salah</td>
				<?php foreach ($_SESSION['pertanyaan']):?>
			</tr>
			<tr>
				<td><?=$jawabantrue ?></td>
				<td><?=$jawabanfalse ?></td>
			</tr>
		</div>
	</form>
</body>
</html>