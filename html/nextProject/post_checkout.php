<?php
include "Order_config.php";
$Customer=$_POST['Customer'];

$pd=new Order();
$pd->checkout($Customer);