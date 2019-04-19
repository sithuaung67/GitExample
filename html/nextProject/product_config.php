<?php
include "db_config.php";
session_start();
class Products extends DB{
    public function getCart($id){
        $sql="select * from product where id IN ($id)";
        return $this->db->query($sql);

    }
    public function delete($id){
        $sql="delete from product where id='$id'";
        $this->db->query($sql);
        header("location: products.php");
    }
    public function getSearch($p){
        $sql="select * from product where p_name LIKE '%$p%'";
        return $this->db->query($sql);
    }

    public function postProductsUpdate($id,$name,$price,$image){
        $img_name=$image['name'];
        $img_file=$image['tmp_name'];
        if($image){
            $myData="select images from product where id='$id'";
            $row=$this->db->query($myData)->fetch(PDO::FETCH_ASSOC);
            $db_image=$row['images'];
            unlink("product/$db_image");
            $sql="update  product set p_name='$name',price='$price',images='$img_name' where id='$id'";
            move_uploaded_file($img_file,"product/$img_name");

        }else{
            $sql="update product set p_name='$name',price='$price' where id='$id'";

        }
        $this->db->query($sql);
        header("location: products.php");
    }
    public function getProductbyId($id){
        $sql="select * from product where id='$id'";
        return $this->db->query($sql);
    }
    public function getProduct(){
        $sql="select Users.* , product.* from product left join Users on Users.id=product.user_id";
        return $this->db->query($sql);

    }
    public function newProduct($name,$price,$image){
        $img_name=$image['name'];
        $img_file=$image['tmp_name'];

        if($name){
            if($price){
                if($image){
                    $user_id=$_SESSION['user_id'];
                    $sql="insert into product (p_name,price,images,user_id,created_at) 
                          values ('$name','$price','$img_name','$user_id',now());";
                    $this->db->query($sql);
                    move_uploaded_file($img_file, "product/$img_name");
                    $_SESSION['info']="The new products is success";
                    header("location: new_products.php");

                }else{
                    $_SESSION['error']="The image field is required";
                    header("location: new_products.php");
                }
            }else{
                $_SESSION['error']="The price field is required";
                header("location: new_products.php");
            }
        }else{
            $_SESSION['error']="The user name field is required";
            header("location: new_products.php");
        }
    }
}