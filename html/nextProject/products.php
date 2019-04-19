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
            <div class="panel panel-primary">
                <div class="panel-heading"><h2>Products</h2></div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>Images</td>
                            <td>Products Name</td>
                            <td>Price</td>
                            <td>Created Usre</td>
                            <td>Created DateTime</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        <?php 
                        include "product_config.php";
                        $dps=new Products();
                        $dp=$dps->getProduct();
                        foreach ($dp as $row):
                            ?>
                            <tr>
                                <td><img src="product/<?php echo $row['images']?>" style="width: 100px" class="img-circle" ></td>
                                <td><?php echo $row['p_name']?></td>
                                <td>$<?php echo $row['price']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo date("D,M,Y : h:i A",strtotime($row['created_at']))?></td>
                                <td><a href="edit.php?id=<?php echo $row['id']?>">Edit</a> </td>
                                <td><a href="delete.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-trash text-danger">Delete</span></a></td>

                            </tr>
                            <?php
                        endforeach;
                        ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap6/js/jQuery.js"></script>
<script src="bootstrap6/js/bootstrap.js"></script>
</body>
</html>
