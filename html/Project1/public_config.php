<?php

    class MyPublic{
        public function __construct()
        {
            try{
                $this->db=new PDO("mysql:host=localhost;dbname=phpAuth","root","root");

            }catch (PDOException $e){
                die("connection fail");
            }
        }
        public function getCategory(){
            $sql="select * from Category";
            return $this->db->query($sql);

        }
        public function getBooks($cat_id){
            if($cat_id){
                $sql="select * from books where cat_id=$cat_id ORDER BY id DESC ";
            }else {
                $sql = "select * from books ORDER BY id DESC ";
            }
                return $this->db->query($sql);
        }
        public function SearchBook($book_name){
            $sql="select * from books where book_name LIKE '%$book_name%'";
            return $this->db->query($sql);
            }

    }