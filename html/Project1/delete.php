<?php
include 'cat_config.php';
$book_name=$_GET['book_name'];

$ss=new category();
$ss->deleteBook($book_name);