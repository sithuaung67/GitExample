<?php
include 'cat_config.php';
$id=$_POST['id'];
$book_name=$_POST['book_name'];
$book_cover=$_FILES['book_cover'];
$book_file=$_FILES['book_file'];
$cat_id=$_POST['cat_id'];

$newBook=new category();
$newBook->updateBook($id,$book_name,$book_cover,$book_file,$cat_id);