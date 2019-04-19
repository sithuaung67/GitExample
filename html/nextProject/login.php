<?php session_start();
include "user_config.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nextProject => Login</title>
    <link href="bootstrap6/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php include "nave_bar.php"?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <?php
            if(isset($_SESSION['err'])){
                ?>
                <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span> <?php echo $_SESSION['err']?></div>
                <?php
            }
            unset($_SESSION['err']);
            ?>
            <?php
            if(isset($_SESSION['success'])){
                ?>
                <div class="alert alert-success"><span class="glyphicon glyphicon-save"></span> <?php echo $_SESSION['success']?></div>
                <?php
            }
            unset($_SESSION['success']);
            ?>

            <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form method="post" action="post_login.php">
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap6/js/jQuery.js"></script>
<script src="bootstrap6/js/bootstrap.js"></script>
</body>
</html>