<?php
session_start();
include '../functions.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');

$_SESSION['error'] = null;

$display_name = isset($_POST['display_name']) ? $_POST['display_name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$error = false;
$error_msg = '';



if (!empty($email) && !empty($password) && !empty($display_name)) {
    $new_user_id = create_user($email, $password, $display_name);
    if ($new_user_id) {
        $user = get_user($new_user_id);
        if (empty($user)) {
            $error = true;
            $error_msg = 'User is not existed';
        }
    } else {
        $error = true;
        $error_msg = 'User is already existed';
    }
} else {
    $error = true;
    $error_msg = 'You need to enter all the information';
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    ts_redirect('../user_registration.php');
} else {
    $_SESSION['user'] = array(
        'display_name' => $user->display_name,
        'is_admin' => $user->is_admin,
        'user_id' => $user->id
    );
    ts_redirect('../home.php');
}
