<?php
session_start();

// username length must be between 5 and 10 chars.

if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
    die('You are someone not ethical trying to access our code directly!');

$_SESSION['error'] = null;

$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$error = false;
$error_msg = '';

$db_username = 'test123';
$db_password = '1234567';

if (!empty($username) && !empty('password')) {
    if (strlen($username) >= 5 && strlen($username) <= 10) {
        // proceed and check if the username equals the username in the databas
        if ($username == $db_username) {
            // preg_match('[0-9]', $password) - Regex (Regular Expression)
            // check password
            if ($password != $db_password) {
                $error = true;
                $error_msg = 'Incorrect username or password';
            }
        } else {
            $error = true;
            $error_msg = 'Incorrect username or password';
        }
    } else {
        $error = true;
        $error_msg = 'Username length should be between 5 and 10 chars.';
    }
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    header('Location: ./');
} else {
    $_SESSION['user'] = array('username' => $db_username);
    header('Location: ./home.php');
}


exit();
