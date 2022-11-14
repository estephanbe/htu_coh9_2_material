<?php
session_start();
include '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST' && empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');

$_SESSION['error'] = null;

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$error = false;
$error_msg = '';



if (!empty($email) && !empty($password)) {

    $users = file_get_contents('../local_data/users.json');
    $users = json_decode($users);

    $valid_user;

    foreach ($users as $user) {
        if ($user->email == $email) {
            $valid_user = $user;
            break;
        }
    }

    if (!empty($valid_user)) {
        if ($password != $valid_user->password) {
            $error = true;
            $error_msg = 'Incorrect email or password';
        }
    } else {
        $error = true;
        $error_msg = 'Incorrect email or password';
    }
} else {
    $error = true;
    $error_msg = 'You need to enter some information';
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    anp_redirect('../');
} else {
    $_SESSION['user'] = array(
        'display_name' => $valid_user->display_name
    );
    anp_redirect('../home.php');
}
