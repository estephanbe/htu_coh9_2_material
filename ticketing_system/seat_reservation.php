<?php
session_start();
include './functions.php';

if (!isset($_SESSION['user']))
    ts_redirect('./');

if (empty($_GET['id']))
    die("you are trying to access directyly!");

$seat = get_seat($_GET['id']);

if (empty($seat))
    die('There is no seat with this id');


if ($seat->is_available) { // ture (Seat is available)
    // update the seat and make it unavailable
    update_seat_reservation($seat->id, 0, $_SESSION['user']['user_id']);
} else {
    // if the seat is available, the user that is make the seat unavailable should be the editor
    if ($seat->user_id != $_SESSION['user']['user_id'])
        die('You are trying to access a resource that you did not edit before');
    // update the seat and make it available
    update_seat_reservation($seat->id, 1, null);
}

ts_redirect('./home.php');
