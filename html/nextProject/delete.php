<?php
include 'product_config.php';
$id=$_GET['id'];

$ss=new Products();
$ss->delete($id);