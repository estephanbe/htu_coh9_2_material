<?php
session_start();
include './functions.php';

if (!isset($_SESSION['user']) && !strpos($_SERVER['SCRIPT_FILENAME'], 'index.php') && !strpos($_SERVER['SCRIPT_FILENAME'], 'user_registration.php'))
    ts_redirect('./');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Ticketing System</title>


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-light px-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="./home.php">Ticketing System</a>
                <?php if (isset($_SESSION['user'])) : ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./home.php">
                                    Home
                                </a>
                            </li>
                        </ul>
                        <div>
                            <span class="me-3">
                                <?= $_SESSION['user']['display_name'] ?>
                            </span>
                            <a href="./auth/logout.php" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </nav>


    </header>

    <div class="container">
        <!-- closing tag in the footer.php -->