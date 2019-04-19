<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
<h1>Hello World</h1>
<p>Today is :<?php echo date("d/m/y")?></p>
<p>
    <?php
    $now=time();
    $newyear= strtotime('2017-04-13');

    $sec_left=$newyear - $now;
    echo floor ($sec_left/(60 * 60 * 24));
    ?>
    days before Happy New Year.
</p>
</body>
</html>