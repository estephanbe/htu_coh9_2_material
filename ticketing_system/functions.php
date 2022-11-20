<?php

/**
 * Redirect - it redirect the script to a required path.
 *
 * @param String $path
 * @return void
 */
function ts_redirect($path)
{
    header("Location: $path");
    exit();
}

function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "c9php_ts2";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function create_user($email, $password, $display_name)
{
    $connection = connect();
    $sql = "INSERT INTO users (email, password, display_name) VALUES ('$email', '$password', '$display_name')";
    $new_user_id = 0;
    if (mysqli_query($connection, $sql)) {
        $new_user_id = $connection->insert_id;
    }
    mysqli_close($connection);

    return $new_user_id;
}

function get_user($id)
{
    $connection = connect();
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    mysqli_close($connection);

    return mysqli_fetch_object($result);
}

function create_seats($seats_num)
{
    for ($i = 1; $i <= $seats_num; $i++) {
        $connection = connect();
        $sql = "INSERT INTO seats (seat_num) VALUES ($i)";
        mysqli_query($connection, $sql);
        mysqli_close($connection);
    }
}

function get_seats()
{
    $connection = connect();
    $sql = "SELECT * FROM seats";
    $result = mysqli_query($connection, $sql);

    $seats = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_object($result)) {
            $seats[] = $row;
        }
    }

    return $seats;
}
