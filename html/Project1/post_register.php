<?php
include 'config.php';
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$passwordAgain=$_POST['passwordAgain'];

$user=new Users();
$user->Register($name,$email,$password,$passwordAgain);
