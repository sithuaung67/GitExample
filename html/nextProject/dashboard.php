<?php
session_start();
include "auth.php";
include 'nave_bar.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="bootstrap6/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php include "side_bar.php"; ?>

        </div>
        <div class="col-md-9">

        </div>
    </div>
</div>

<script src="bootstrap6/js/jQuery.js"></script>
<script src="bootstrap6/js/bootstrap.js"></script>
</body>
</html>
