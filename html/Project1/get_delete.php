<?php
include 'cat_config.php';
$id=$_GET['id'];
$pd=new category();
$pd->delete($id);