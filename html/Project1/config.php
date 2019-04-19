
<?php
session_start();
class Users{
    public  function __construct()
    {
        try{
            $this->db=new PDO("mysql:host=localhost;dbname=phpAuth","root","root");
        }catch (PDOException $e){
            die("connection Fail");

        }
    }
    public function Register($name,$email,$password,$passwordAgain){

if ($name){
    if($email){
        $user="select email from users where email='$email'";
        $db_email=$this->db->query($user)->fetch(PDO::FETCH_ASSOC);
        if(!$db_email){
          if($password){
            if($passwordAgain){
                if($password==$passwordAgain){
                    $enc_password=md5($password);
                    $sql="insert into users(name,email,password,created_at) values( '$name' , '$email' , '$enc_password',now())";
                    $this->db->query($sql);
                    $_SESSION['success']="this login is success";
                    header("location:register.php");
                }

            }else{
                $_SESSION['error']="Password and Password Again need to same";
                header("location: register.php");
            }

        }else{
            $_SESSION['error']="Password field is needed";

        header("location: register.php");}

        }else{
        $_SESSION['error']="Email is exit";
        header("location: register.php");

        }

    }
        else{
        $_SESSION['error']="Email field is needed";
        header("location: register.php");
    }

}else{
    $_SESSION['error']="Name field is needed";
    header("location: register.php");
}
    }

    public function login($email,$password){
        if($email){
            $user="select name,email,password from users where email='$email'";
            $db_email=$this->db->query($user)->fetch(PDO::FETCH_ASSOC);
            if($db_email){
                if($password){
                    $db_password=$db_email["password"];
                    $enc_password=md5($password);
                    if($db_password==$enc_password){
                        $_SESSION['login']=$db_email['name'];
                        header('location: dashboard.php');
                    }else{
                        $_SESSION['error']="this password is invalid";
                        header("location: login.php");
                    }

                }else{
                    $_SESSION['error']="password error";
                    header("location: login.php");
                }
            }else{
                $_SESSION['error']="the selected email is invalid";
                header("location: login.php");
            }
        }else{
            $_SESSION['error']="This Email field required";
            header("location: login.php");
        }
    }


}