<?php

 class Product{
    public function __construct(){
        try{
            $this->db=new PDO('mysql:host=localhost; dbname=Products','root','root');
        }catch (PDOException $e){
            die('this not doing work');
        }
    }
    function insert($name,$price){

        $sql="insert into Products (Name,Price) values('$name','$price')";
        $this->db->query($sql);
        header("location: index.php");
        }
     function getMyData(){
        $sql="select * from Products";
        return $this->db->query($sql);
     }
     function delete($id){
         $sql="delete from Products where Id='$id'";
         $this->db->query($sql);
         header("location: index.php");
     }
     function update($id,$name,$price){
         $sql="update Products set Name='$name', Price='$price' where Id='$id' ";
         $this->db->query($sql);
      header('location: index.php');
     }


}