<?php
include "product_config.php";
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_FILES['image'];

$pp=new Products();
$pp->newProduct($name,$price,$image);