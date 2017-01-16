<?php
session_start();
// session_destroy();

require 'function.php';
require 'data.php';

// Cek session 'login'
if (empty($_SESSION['login'])) {
    directIndex();
} else {
    $login = $_SESSION['login'];
}

// kondisi score
if (empty($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

// Logout
if (isset($_GET['logout'])) {
    unset($_SESSION['login']);
    unset($_SESSION['score']);
    directIndex();
}

// Normalisasi submit
if (isset($_POST['submit'])) {
    if (isset($_GET['math'])) {
        answerCheck($_SESSION['math']);
    } elseif (isset($_GET['history'])) {
        answerCheck($history);
    }
    
}

// Reset score
if (isset($_GET['reset'])) {
    $_SESSION['score'] *= 0;
    directQuestion();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Judul -->
        <title>e-Learningku</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=2">
        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- Navigasi atas -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  class="navbar-brand" href="question.php">e-Learningku</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="question.php?history">History</a></li>
                        <li><a href="question.php?math">Math</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="">
                                <span class="glyphicon glyphicon-stats"></span> <?=$_SESSION['score']?> Point
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="question.php?reset">Reset point</a></li>
                                <li><a href="#">Print nilai</a></li>
                            </ul>                            
                        </li>

                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?=$login['username'];?></a></li>
                        <li><a href="question.php?logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Konten -->
        <div class="container" style="margin-top: 60px;margin-bottom: 5%">
            <!-- History quest -->
            <?php if(isset($_GET['history'])):?>
                <form method="POST">
                    <h1 align="center">Jawablah soal dibawah ini dengan benar!</h1>
                    <?php if(isset($_POST['submit'])):?>
                        <div class="alert alert-info">
                            <strong><span class="glyphicon glyphicon-bullhorn"></span> INFO !</strong> 
                            Dari <?=count($history)?> pertanyaan, <?=$trueanswer?> di jawab benar, dan <?=$falseanswer?> di jawab salah !
                        </div>
                        <br>
                    <?php endif;?>

                    <?php foreach($history as $key => $value):?>
                        <?php if (isset($_POST['submit'])):?>
                            <h3><?= $key+1 . ". " . $value['quest']?></h3>
                            a. <?=$value['a']?><br>
                            b. <?=$value['b']?><br>
                            c. <?=$value['c']?><br>
                            d. <?=$value['d']?><br>
                        <?php else:?>
                            <h3><?= $key+1 . ". " . $value['quest']?></h3>
                            <input type="radio" name="answer<?=$key?>" value="a" required>
                            a. <?=$value['a']?><br>
                            <input type="radio" name="answer<?=$key?>" value="b" required>
                            b. <?=$value['b']?><br>
                            <input type="radio" name="answer<?=$key?>" value="c" required>
                            c. <?=$value['c']?><br>
                            <input type="radio" name="answer<?=$key?>" value="d" required>
                            d. <?=$value['d']?><br>
                        <?php endif;?>
                        
                        <?php if(isset($_POST['submit'])):?>
                            <?php if($_POST['answer'.$key]==$value['answer']):?>
                                <div class="alert alert-success">
                                    <span class="glyphicon glyphicon-ok-circle"></span> 
                                    <strong>Jawaban "<?=$value['answer']?>" benar</strong>
                                </div>
                            <?php else:?>
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-remove-circle"></span> 
                                    <strong>Jawaban salah! </strong>
                                    Jawaban yang benar adalah "<?=$value['answer']?>".
                                </div>
                            <?php endif;?>
                        <?php endif;?>                    
                    <?php endforeach;?>
                    <br>
                    <?php if(!isset($_POST['submit'])):?>
                        <button class="btn btn-success" name="submit">
                            Submit Jawaban
                        </button>
                    <?php endif;?>
                </form>
                
            <!-- Math quest -->
            <?php elseif(isset($_GET['math'])):?>
                <?php if(!empty($_SESSION['math'])):?>
                    <h1 align="center">Jawablah soal dibawah ini dengan benar!</h1>
                    <form method="POST">
                        <?php if(isset($_POST['submit'])):?>
                            <div class="alert alert-info">
                                <strong><span class="glyphicon glyphicon-bullhorn"></span> INFO !</strong> 
                                Dari <?=count($_SESSION['math'])?> pertanyaan, <?=$trueanswer?> di jawab benar, dan <?=$falseanswer?> di jawab salah !
                            </div>
                            <br>
                        <?php endif;?>

                        <?php foreach($_SESSION['math'] as $key => $value):?>
                            <?php if (isset($_POST['submit'])):?>
                                <h3><?= $key+1 . ". " . $value['quest']?></h3>
                                a. <?=$value['a']?><br>
                                b. <?=$value['b']?><br>
                                c. <?=$value['c']?><br>
                                d. <?=$value['d']?><br>
                            <?php else:?>
                                <h3><?= $key+1 . ". " . $value['quest']?></h3>
                                <input type="radio" name="answer<?=$key?>" value="a" required>
                                a. <?=$value['a']?><br>
                                <input type="radio" name="answer<?=$key?>" value="b" required>
                                b. <?=$value['b']?><br>
                                <input type="radio" name="answer<?=$key?>" value="c" required>
                                c. <?=$value['c']?><br>
                                <input type="radio" name="answer<?=$key?>" value="d" required>
                                d. <?=$value['d']?><br>
                            <?php endif;?>
                            
                            <?php if(isset($_POST['submit'])):?>
                                <?php if($_POST['answer'.$key]==$value['answer']):?>
                                    <div class="alert alert-success">
                                        <span class="glyphicon glyphicon-ok-circle"></span> 
                                        <strong>Jawaban "<?=$value['answer']?>" benar</strong>
                                    </div>
                                <?php else:?>
                                    <div class="alert alert-danger">
                                        <span class="glyphicon glyphicon-remove-circle"></span> 
                                        <strong>Jawaban salah! </strong>
                                        Jawaban yang benar adalah "<?=$value['answer']?>".
                                    </div>
                                <?php endif;?>
                            <?php endif;?>                    
                        <?php endforeach;?>
                        <br>
                        <?php if(!isset($_POST['submit'])):?>
                            <button class="btn btn-success" name="submit">
                                Submit Jawaban
                            </button>
                        <?php endif;?>
                    </form>
                <?php else:?>
                    <h1 align="center">Soal belum dibuat!</h1>
                <?php endif;?>
            <?php else:?>
                <h1 align="center">Good Luck</h1>
            <?php endif;?>            
        </div>

    </body>
</html>