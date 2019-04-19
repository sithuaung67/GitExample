<?php
  include 'config.php';

  $email=$_POST['email'];
  $password=$_POST['password'];

  $user=new Users();
  $user->login($email,$password);