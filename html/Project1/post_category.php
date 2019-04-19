<?php
include 'cat_config.php';
$catname=$_POST['cat_name'];

$category=new category();
$category->insert($catname);
