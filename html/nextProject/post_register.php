<?php
include "user_config.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$passwordAgain=$_POST['passwordAgain'];

$users=new User();
$users->register($name,$email,$password,$passwordAgain);