<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Products Shows</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Prices</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        <?php
                        include 'my_db.php';
                        $myData=new Product();
                        $myFile=$myData->getMyData();
                        foreach ($myFile as $row):
                            ?>
                            <tr>
                                <td><?php echo $row['Id'] ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Price'] ?></td>
                                <td><a href="#" data-toggle="modal" data-target="#<?php echo $row['Id'] ?>"><span class="glyphicon glyphicon-edit"></span> </a> </td>


                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo $row['Id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel"><?php echo $row['Name'] ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="post_update.php">
                                                    <input type="hidden" name="id" value="<?php echo $row['Id'] ?>"
                                                    <div class="form-group">
                                                        <label class="control-label" for="name" id="name">Name</label>
                                                        <input type="text" value="<?php echo $row['Name'] ?>" name="name" id="name" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" for="price" id="price">Price</label>
                                                        <input type="number" name="price" value="<?php echo $row['Price'] ?>" id="price" class="form-control">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td><a href="get_delete.php?id=<?php echo $row['Id']?>"><span class="glyphicon glyphicon-trash text-danger"></span></a></td>
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
                <div class="panel-heading">My Project</div>
                <div class="panel-body">
                    <form method="post" action="post_new.php">
                        <div class="form-group">
                            <label class="control-label" for="name" id="name"><span class="glyphicon glyphicon-user">Name</span></label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="price" id="price"><span class="glyphicon glyphicon-usd">Price</span></label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="bootstrap3/js/jQuery.js"></script>
<script src="bootstrap3/js/bootstrap.js"></script>
</body>
</html>