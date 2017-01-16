<?php
session_start();
// session_destroy();
include 'tampilan.php';
include 'function.php';
include 'array.php';

if(empty($_SESSION['score'])){
  $_SESSION['score'] = 0;
}
if(isset($_POST['submit'])){
  jawabanCheck($_SESSION['pertanyaan']);
}
if(isset($_GET['reset'])){
  $_SESSION['score'] = 0;
  directQuestion();
}
//function acak
function acak($pertanyaan)
{
  global $pertanyaan;
  shuffle($pertanyaan);
}
acak ($pertanyaan);
?>
</tr>

<!DOCTYPE html>
<html>
  <head>
    <title> E~Learning </title>
    <link href="style.css" rel="styelesheet/text">
  </head>
  <body>
    <div class="learning">
      <fieldset class="field">
        <?php
        include 'array.php';
        ?>
        <form action="soal.php" method="POST" width="40%">
          <h1 align="center"> Silahkan di isi sesuai kemampuan anda ['!']</h1>
          <hr class="mains">

          <?php if(isset($_POST['submit'])):?>
          <div>
            <strong><span></span> NOTICE ! </strong>Dari <?=count($_SESSION['pertanyaan'])?>  Question , antum berhasil menjawab, <?=$jawabantrue?> pertanyaan benar dan <?=$jawabanfalse?> pertanyaan salah !
          </div>
          <?php endif ?>  
         
          <?php foreach($_SESSION['pertanyaan'] as $key => $val ) :?> 
            <?php if(isset($_POST['submit'])): ?>
              <h3><?=$key+1 . ".". $val['soal']?></h3>
              A. <?=$val['A']?><br>
              B. <?=$val['B']?><br>
              C. <?=$val['C']?><br>
           <?php else: ?>
              <h3><?=$key+1 . ".". $val['soal']?></h3>
              <input value="A" type="radio" name="jawaban<?=$key?>" value="['A']" required>
              A.  <?=$val['A'] ?><br>            
              <input value="B" type="radio" name="jawaban<?=$key?>" value="['B']" required>
              B.  <?=$val['B'] ?><br>
              <input value="C" type="radio" name="jawaban<?=$key?>" value="['C']" required>
              C.  <?=$val['C'] ?><br>
            <?php endif; ?> 
  
          <?php if(isset($_POST['submit'])):?>
            <?php if($_POST['jawaban'.$key] == $val['jawaban']): ?>
            <div>
              <strong>Jawaban '<?=$val['jawaban'] ?>" benar</strong>
            </div>
          <?php else: ?>
          <div>
            <strong>Jawaban anda salah</strong>
            Jawaban yang benar adalah"<?=$val['jawaban']?>".
          </div>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>
      <br>
      <?php if(!isset($_POST['submit'])): ?> 
          <button style="border-radius: 20px; width:150px;height:50px;background:#00cd6b;color:#ffffff" name="submit">
          Hitung score
          </button>
      <?php endif; ?>  
           <a href="soal.php"><button style="border-radius: 20px; width:150px; height:50px; background:#00cd6b; color:#ffffff" type="button">Kembali ke soal</button></a>
      </form>
    </div>
  </body>
</html>
<?php
// print_r($_SESSION['pertanyaan']);
