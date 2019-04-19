<?php
class DB{
    public function __construct()
    {
        try{
            $this->db=new PDO("mysql:host=localhost; dbname=nextProject;","root","root");
        }catch (PDOException $e){
            die("connection problem in this database server");
        }
    }
}