<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap5/css/bootstrap.css" rel="stylesheet">
    <title>PhPAuth</title>
</head>
<body>
<?php include 'nav_bar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Category</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>Id</td>
                            <td>Cat Name</td>
                            <td>Edit</td>
                            <td>Actions</td>
                        </tr>
                        <?php
                        include 'cat_config.php';
                        $cats=new category();
                        $cat=$cats->getcatgory();
                        foreach ($cat as $row):
                            ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['cat_name']?></td>
                                <td><a href="#" class="text-info"><span class="glyphicon glyphicon-edit"></span>Edit </a> </td>
                                <td><a href="get_delete.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-trash text-danger">Delete</span></a></td>
                            </tr>

                            <?php

                        endforeach;

                        ?>
                    </table>
                </div>
            </div>


        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Auth Category</div>
                <div class="panel-body">
                    <?php if(isset($_SESSION["error"])) {
                        ?>
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><?php echo $_SESSION['error']?></div>

                        <?php
                    }
                    unset($_SESSION['error']);
                    ?>
                    <?php if(isset($_SESSION["success"])) {
                        ?>
                        <div class="alert alert-success"><span class="glyphicon glyphicon-alert"></span><?php echo $_SESSION['success']?></div>

                        <?php
                    }
                    unset($_SESSION['success']);
                    ?>
                    <form method="post" action="post_category.php">
                        <div class="form-group">
                            <label for="cat_name" class="control-label">Category Name</label>
                            <input type="text" name="cat_name" id="cat_name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap5/js/jQuery.js"></script>
<script src="bootstrap5/js/bootstrap.js"></script>
</body>
</html>