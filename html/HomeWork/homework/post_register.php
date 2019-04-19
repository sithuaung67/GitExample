<?php
include 'user_db.php';

$user_name=$_POST['user_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_again=$_POST['password_again'];

$user=new User();
$user->register ($user_name, $email, $password, $password_again);

