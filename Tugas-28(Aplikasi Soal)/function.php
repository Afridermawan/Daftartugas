<?php
//check
function jawabanCheck($pertanyaan)
{
	global $jawabantrue , $jawabanfalse;

	foreach ($pertanyaan as $key => $val) {
		if ($_POST['jawaban'.$key]== $val['jawaban'] ) {
			$jawabantrue +=1;
		} else {
			$jawabanfalse +=1; 
		}
	}
	return $pertanyaan;
}
	$_SESSION['pertanyaan'][]	=	$pertanyaan;
	return$pertanyaan; 
