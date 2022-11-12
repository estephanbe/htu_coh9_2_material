<?php session_start();
if (isset($_SESSION['user']))
    header("Location: ./home.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container my-5">
    <a href="../">Back</a>
    <h1 class="text-center">PHP Forms - Full</h1>
    <hr class="mb-5">

    <?php if (!empty($_SESSION) && isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['error'] ?>
        </div>
    <?php endif;
    // $_SESSION['error'] = null; // flash msgs
    ?>

    <form class="w-50" method="POST" action="./form_validation.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>