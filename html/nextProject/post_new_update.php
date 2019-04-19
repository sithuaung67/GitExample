<?php
include "product_config.php";
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_FILES['image'];

$pp=new Products();
$pp->postProductsUpdate($id,$name,$price,$image);