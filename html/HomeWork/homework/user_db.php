<?php
class User{
    public function __construct ()
    {
        try{
            $this->db=new PDO('mysql:host=localhost; dbname=phpLesson3', 'root', 'password');
        }catch (PDOException $e){
            die("connection failed to database server.");
        }
    }
    public function register($user_name, $email, $password, $password_again){
        $enc_password=md5 ($password);
        $sql="insert into users (user_name, email, password, created_at) 
              values ('$user_name', '$email', '$enc_password', now())";
        $this->db->query ($sql);
        header("location: register.php");

    }
}