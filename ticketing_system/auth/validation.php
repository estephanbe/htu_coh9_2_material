<?php
session_start();
include '../functions.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');

$_SESSION['error'] = null;

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$error = false;
$error_msg = '';



if (!empty($email) && !empty($password)) {

    $connection = connect();
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    var_dump($result);
    $user = mysqli_fetch_object($result);
    mysqli_close($connection);

    if (!empty($user)) {
        if ($user->password != $password) {
            $error = true;
            $error_msg = 'Incorrect email or password';
        }
    } else {
        $error = true;
        $error_msg = 'Incorrect email or password';
    }
} else {
    $error = true;
    $error_msg = 'You need to enter all the information';
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    ts_redirect('../');
} else {
    $_SESSION['user'] = array(
        'display_name' => $user->display_name,
        'is_admin' => (bool) $user->is_admin,
        'user_id' => (int) $user->id
    );
    ts_redirect('../home.php');
}
