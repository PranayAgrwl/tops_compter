<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item me-auto">
                <a class="nav-link" href="<?php echo $GLOBALS['baseurl'].'user/' ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $GLOBALS['baseurl'].'user/about' ?>">About</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<php echo $GLOBALS['baseurl'].'user/about' ?>">About</a>
            </li> -->
        </ul>
        <div class="d-flex">
            <?php include ('userlogin.php') ?>
        </div>
    </div>
</nav>
