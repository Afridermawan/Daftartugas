<?php
// Direct page
function directIndex()
{
    echo "<script>window.location = 'index.php';</script>";
}

function directQuestion()
{
    echo "<script>window.location = 'question.php';</script>";
}

function directAdmin()
{
	echo "<script>window.location = 'admin.php';</script>";
}

function directQuestlist()
{
	echo "<script>window.location = 'admin.php?questlist';</script>";
}

// Login status
function loginStatus()
{
	echo "<script>alert('Username atau password salah!');</script>";
	directIndex();
}

// Register status
function registerStatus1()
{
	echo "<script>alert('Username telah digunakan!');</script>";
	echo "<script>window.location = 'register.php';</script>";	
}

function registerStatus2()
{
	echo "<script>alert('Pendaftaran berhasil!');</script>";
	directIndex();
}

// Register account
function addAccount($username, $email, $password)
{
	$account = [
		'username'	=> $username,
		'email'		=> $email,
		'password'	=> $password,
	];

	$_SESSION['account'][] = $account;
	
	return $account;
}

// Answer cek
function answerCheck($question)
{
	global $trueanswer, $falseanswer;

    foreach ($question as $key => $value) {
        if ($_POST['answer'.$key] == $value['answer']) {
            $_SESSION['score'] += 10;
            $trueanswer += 1;
        } else {
            $_SESSION['score'] -= 3;
            $falseanswer += 1;
        }
    }

    return $question;
}

// Add question
function addQuest($quest, $a, $b, $c,$d, $answer)
{
    $math = [
        'quest'  => $quest,
        'a'      => $a,
        'b'      => $b,
        'c'      => $c,
        'd'      => $d,
        'answer' => $answer,
    ];

	$_SESSION['math'][] = $math;

	return $math;
}