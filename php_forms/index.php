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
    <h1 class="text-center">PHP Forms</h1>
    <hr class="mb-5">

    <a href="./login/" class="my-3 btn btn-primary">Login forms - full</a>

    <?php if (!empty($_GET) && isset($_GET['username']) && isset($_GET['password'])) {
        if ($_GET['username'] == 'test' && $_GET['password'] == '123') : ?>
            <div class="alert alert-success" role="alert">
                Correct Creds
            </div>
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                Incorrect Creds
            </div>
    <?php endif;
    } ?>

    <form class="w-50" method="GET" action="./">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>