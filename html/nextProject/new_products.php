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
            <?php
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success"><span class="glyphicon glyphicon-save"></span> <?php echo $_SESSION['info']?></div>

                <?php
            }
            unset($_SESSION['info']);
            ?>
            <?php
            if(isset($_SESSION['error'])){
                ?>
                <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span> <?php echo $_SESSION['error']?></div>

                <?php
            }
            unset($_SESSION['error']);
            ?>
            <div class="panel panel-primary">
                <div class="panel-heading">New Products</div>
                <div class="panel-body">
                    <form method="post" action="post_new_product.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price" class="control-label">Price</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image" class="control-label">Image</label>
                            <input type="file" name="image" id="image" class="form-control" style="height: auto">
                        </div>
                        <div class="form-group">
                            <center><button type="submit" class="btn btn-primary btn-lg">Login</button></center>
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
