<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nextProject</title>
    <link href="bootstrap6/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php include "nave_bar.php"?>
<div class="container">
    <div class="row">
        <form method="get" action="index.php" class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input name="p" type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                    <?php include "product_config.php";
                    $pds=new Products();
                    $p=$_GET['p'];
                    if($p){
                        $row=$pds->getSearch($p);

                    }else{
                        $row=$pds->getProduct();

                    }
                    foreach ($row as $rows):
                        ?>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="product/<?php echo $rows['images'] ?>" style="width: auto;height: 70px;"class="img-rounded">
                                <p class="text-primary text-center"><strong><?php echo $rows['p_name'] ?></strong></p>
                                <p class="text-center text-primary"><small>$<?php echo $rows['price']?></small></p>
                                <a href="add_to_cart.php?id=<?php echo $rows['id']  ?>" class="btn btn-primary btn-block">Add to Card</a>
                            </div>
                        </div>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Shopping Cart</div>
                <div class="panel-body">
                    <?php if(isset($_SESSION['cart'])){
                        ?>

                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Qty</td>
                            <td>Amount</td>
                        </tr>
                        <?php
                        $totalAmount=0;
                            foreach ($_SESSION['cart'] as $id=>$qty):
                                $myOrder=$pds->getCart($id);
                            foreach($myOrder as $order):
                                $totalAmount+=$order['price']*$qty;
                                ?>
                                <tr>
                                    <td><?php echo $order['p_name']?></td>
                                    <td>$<?php echo $order['price']?></td>
                                    <td><?php echo $qty?></td>
                                    <td>$<?php echo $order['price']*$qty?></td>
                                </tr>
                                <?php
                            endforeach;

                        endforeach;
                        ?>
                        <?php
                        if($totalAmount >0){
                            ?>
                            <tr>
                                <td>TotalAmount</td>
                                <td>$<?php echo $totalAmount?></td>
                            </tr>
                            <?php
                        }
                        ?>

                    </table>
                        <a href="cleat_cart.php" class="text-danger">&times; Cancel  </a>
                        <form method="post" action="post_checkout.php">
                            <div class="form-group">
                                <label for="Customer" class="control-label">Customer</label>
                                <input type="text" name="Customer" id="Customer" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Checkout</button>
                            </div>
                        </form>
                   <?php
                    }else{
                        ?>
                        <div class="alert alert-danger">No Items on Your Shopping Cart</div>

                        <?php
                    }?>

                </div>
            </div>

        </div>
    </div>
</div>
<script src="bootstrap6/js/jQuery.js"></script>
<script src="bootstrap6/js/bootstrap.js"></script>
</body>
</html>