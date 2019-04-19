<?php
include "db_config.php";
session_start();
class User extends DB{
        public function login($email,$password){
        if($email){
            $sql="select id,name,email,password from Users where email='$email'";
            $row=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
            if($row['email']){
                if($password){
                    $enc_password=md5($password);
                    $db_password=$row['password'];
                    if($enc_password==$db_password){
                        $_SESSION['login']=$row['name'];
                        $_SESSION['user_id']=$row['id'];
                        header("location: home.php");
                    }else{
                        $_SESSION['err']="The password field is incorrect";
                    }
                }else{
                    $_SESSION['err']="The password fields is required";
                    header("location: login.php");
                }
            }else{
                $_SESSION['err']="The email field is not found in server";
                header('location: login.php');
            }
        }else{
            $_SESSION['err']="The email field is required";
            header("location: login.php");
        }
    }
    public function register($name,$email,$password,$passwordAgain){
            if($name){
                if($email){
                    $sql="select email from Users where email='$email'";
                    $dbemail=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
                    if(!$dbemail){
                        if($password){
                            if($passwordAgain){
                                $encPassword=md5($password);
                                    if($passwordAgain==$password){
                                        $sql="insert into Users (name,email,password,created_at) values ('$name','$email','$encPassword',now())";
                                        $this->db->query($sql);
                                        $_SESSION['success']="The register success";
                                        header('location: register.php');
                                    }else{
                                        $_SESSION['err']="Can you care password and passwordAgain are same?";
                                        header("location: register.php");
                                    }
                            }else{
                                $_SESSION['err']="the field is passwordAgain required";
                                header("location: register.php");
                            }
                        }else{
                            $_SESSION['err']="the field is password required";
                            header("location: register.php");
                        }
                    }else{
                        $_SESSION['err']="The field has same email so you fail sing up";
                        header("location: register.php");
                    }
                }else{
                    $_SESSION['err']="The field is email required";
                    header("location: register.php");
                }
            }else{
                $_SESSION['err']="The field is name required";
                header("location: register.php");
            }
    }
}