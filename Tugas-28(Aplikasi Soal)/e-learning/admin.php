<?php
session_start();
// session_destroy();

require 'function.php';

// Cek kondisi session 'math'
if (!empty($_SESSION['math'])) {
    $math = $_SESSION['math'];
} else {
    $math = [];
}

// Normalisasi button
if (isset($_POST['submit'])) {
    // convert post to variable
    $quest     = $_POST['quest'];
    $a         = $_POST['a'];
    $b         = $_POST['b'];
    $c         = $_POST['c'];
    $d         = $_POST['d'];
    $answer    = $_POST['answer'];

    addQuest($quest, $a, $b, $c, $d, $answer);
}

// Delete quest
if (isset($_GET['delete'])) {
    unset($_SESSION['math'][$_GET['delete']]);
    directQuestlist();
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
                    <a  class="navbar-brand" href="admin.php">e-Learningku</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin.php?questlist"><span class="glyphicon glyphicon-th-list"></span> <?=count($_SESSION['math']);?> Question</a></li>
                        <li><a href="admin.php?addquest"><span class="glyphicon glyphicon-plus"></span> Add Quest</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Konten -->
        <div class="container" style="margin-top: 60px;margin-bottom: 5%">
        <!-- Add Quest -->
        <?php if(isset($_GET['addquest'])):?>
            <form  method="POST">
                <!-- Quest -->
                <div class="form-group">
                    <h2>Add Question</h2>
                    <textarea required name="quest" class="form-control" placeholder="Question" rows="5" style="max-width: 100%"></textarea>
                </div>
                <br>

                <!-- Option -->
                <div class="form-group">
                    <!-- A -->
                    <div class="col-lg-13">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input required name="answer" value="a" type="radio" aria-label="...">
                            </span>
                            <input placeholder="Option A" required name="a" type="text" class="form-control" aria-label="...">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <br>

                    <!-- B -->
                    <div class="col-lg-13">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input required name="answer" value="b" type="radio" aria-label="...">
                            </span>
                            <input placeholder="Option B" required name="b" type="text" class="form-control" aria-label="...">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <br>

                    <!-- C -->
                    <div class="col-lg-13">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input required name="answer" value="c" type="radio" aria-label="...">
                            </span>
                            <input placeholder="Option C" required name="c" type="text" class="form-control" aria-label="...">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <br>

                    <!-- D -->
                    <div class="col-lg-13">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input required name="answer" value="d" type="radio" aria-label="...">
                            </span>
                            <input placeholder="Option D" required name="d" type="text" class="form-control" aria-label="...">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div>
                <br>

                <button name="submit" class="btn btn-success">Submit Quest</button>
            </form> 
        <?php endif;?>

        <!-- Quest List -->
        <?php if(isset($_GET['questlist'])):?>
            <div class="panel panel-default">
                <!-- Default panel content -->
                <div class="panel-heading">Panel heading</div>
                <div class="panel-body">
                    <p>...</p>
                </div>

                <!-- List group -->
                <ul class="list-group">
                    <?php foreach($_SESSION['math'] as $key => $value):?>
                        <li class="list-group-item">
                            <?=$key+1 . ". " . $value['quest']?>
                            <a href="admin.php?delete=<?=$key?>"><button type="button" class="btn btn-danger btn-xs pull-right">Delete</button></a>
                            <a href="admin.php?edit=<?=$key?>"><button type="button" class="btn btn-success btn-xs pull-right" style="margin-right: 10px;"> Edit </button></a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        <?php endif;?>
        </div>      
    </body>
</html>

<?php
print_r($_SESSION['math']);