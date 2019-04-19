<?php
include "Order_config.php";
$id=$_GET['id'];
$order=new Order();
$row=$order->getOrderById($id)->fetch(PDO::FETCH_ASSOC);
?>
<?php
include "auth.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
    <link href="bootstrap6/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center">China Food Shop</h2>
            <p class="text-center">Thaton,Gault Stree,Computer University</p>
            <p>Invoice ID : <?php echo $row['id']?></p>
            <p>Customer Name : <?php echo $row['Customer']?></p>
            <table class="table">
                <tr>
                    <td>Item_Name</td>
                    <td>Price</td>
                    <td>Qty</td>
                    <td>Amount</td>
                </tr>
                <?php
                $order_id=$row["id"];
                $order_item=$order->getOrderItem($order_id);
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
        </div>
    </div>
</div>
<script src="bootstrap6/js/jQuery.js"></script>
<script src="bootstrap6/js/bootstrap.js"></script>
</body>
</html>

