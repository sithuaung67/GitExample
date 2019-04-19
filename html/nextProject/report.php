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
    <title>Report</title>
    <link href="bootstrap6/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <?php include "side_bar.php";?>
        </div>
        <div class="col-md-9">
        <?php
        include "Order_config.php";
        $myOrder=new Order();
        $order=$myOrder->getOrders();
        foreach ($order as $orders):
        ?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Invoice ID:<?php echo $orders['id'] ?>
                    Customer:<?php echo $orders['Customer']?>
                    Date:<?php echo date('d-M-Y : h:i A',strtotime($orders['created_at']));?>
                </div>
                <div class="panel-body">
                    <?php
                    $order_id=$orders['id'];
                    $order_item=$myOrder->getOrderItem($order_id);
                    ?>
                    <table class="table" >
                        <tr>
                            <td>Item_Name</td>
                            <td>Price</td>
                            <td>Qty</td>
                            <td>Amount</td>
                        </tr>
                        <?php
                        $totalAmount=0;
                        foreach ($order_item as $OrderItem):
                            $totalAmount+=$OrderItem['Price']*$OrderItem['Qty'];
                            ?>

                            <tr>
                                <td><?php echo $OrderItem['Item_Name']?></td>
                                <td>$<?php echo $OrderItem['Price']?></td>
                                <td><?php echo $OrderItem['Qty']?></td>
                                <td>$<?php echo $OrderItem['Price']*$OrderItem['Qty']?></td>

                            </tr>

                            <?php
                            endforeach;
                        ?>
                        <tr>
                            <td>TotalAmount</td>
                            <td>$<?php echo $totalAmount?></td>
                        </tr>
                    </table>
                    <a target="_blank" href="print.php?id=<?php echo $orders['id']?>"><span class="glyphicon glyphicon-print" ></span></a>
                </div>
            </div>
            <?php
        endforeach;
        ?>
        </div>
    </div>
</div>
<script src="bootstrap6/js/jQuery.js"></script>
<script src="bootstrap6/js/bootstrap.js"></script>
</body>
</html>
