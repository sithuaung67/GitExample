<?php
/*
$name=$_REQUEST['user_name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

echo $name."+".$email."+".$password;
session_start();
$name=$_REQUEST['user_name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['password']=$password;
header("location: index.php");*/
session_start();
$name=$_REQUEST['user_name'];
$password=$_REQUEST['password'];

if(($name=='admin')&& ($password=='admin')){
    $_SESSION["login"]="<br>Administrator";
    header("location: login.php");
}else{
    header("location: login.php");
}
