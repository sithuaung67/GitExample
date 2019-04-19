<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>Welcome Our PHP Auth</title>
</head>
<body>
<?php include "nav_bar.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center text-primary">Singup My PHP Auth</h1>
            <form method="post" action="post_register.php">
                <div class="form-group">
                    <label for="user_name" class="control-label">Username</label>
                    <input type="text" name="user_name" id="user_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password_again" class="control-label">Password Again</label>
                    <input type="password" name="password_again" id="password_again" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Signup</button>
                </div>
            </form>
            Already have an account ? <a href="login.php">Login</a>
        </div>
    </div>
</div>

<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>