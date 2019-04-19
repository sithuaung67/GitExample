<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../PhPDatabase/bootstrap2/css/bootstrap.css">
    <title>Register</title>
</head>
<body>
<?php include "nav_bar.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center text-primary">MY navbar</h1>
        <form>
            <div class="form-group">
                <label class="control-label" for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label" for="email">email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label" for="password">password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label" for="Re-password">Re-password</label>
                <input type="password" name="Re-password" id="Re-password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up</button>
        </form>
         <br>Is you have Account?<a href="../PhPDatabase/Login.php">Login</a>

        </div>
    </div>
</div>
<script src="../PhPDatabase/bootstrap2/js/jQuery.js"></script>
<script src="../PhPDatabase/bootstrap2/js/bootstrap.js"></script>
</body>
</html>