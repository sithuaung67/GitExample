<?php
include "my_db.php";

$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];

$pd=new Product();
$pd->update($id,$name,$price);