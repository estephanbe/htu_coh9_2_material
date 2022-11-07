<?php
session_start();

// username length must be between 5 and 10 chars.

if ($_SERVER['REQUEST_METHOD'] != 'POST' && empty($_POST))
    die('You are someone not ethical trying to access our code directly!');

$_SESSION['error'] = null;

$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

var_dump($username);
var_dump($password);


$db_username = 'test123';
$db_password = '1234567';

if (!empty($username) && !empty('password')) {
    if (strlen($username) >= 5 && strlen($username) <= 10) {
        // proceed and check if the username equals the username in the databas
    } else {
        $_SESSION['error'] = 'Username length should be between 5 and 10 chars.';
        var_dump($_SESSION);
        header('Location: ./');
        exit();
    }
}
