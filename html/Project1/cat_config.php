<?php
session_start();
class category
{
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=phpAuth", "root", "root");
        } catch (PDOException $e) {
            die("connection Fail");

        }
    }
    public function getBookById($id){
        $sql="select * from books where id='$id'";
        return $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    public function getcatgory(){
        $sql="select * from Category ORDER BY id";
        return $this->db->query($sql);
    }
    public function insert($catname){
        if($catname){
            $sql="select * from Category where cat_name='$catname'";
            $result=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
            if(!$result['cat_name']){
                $mysql="insert into Category(cat_name) values ('$catname')";
                    $this->db->query($mysql);
                    $_SESSION['success']="the category have been created";
                    header("location: category.php");
            }else{
                $_SESSION['error']="this name field is invalid";
                header("location: category.php");
            }


        }else{
            $_SESSION['error']="the cat name field is required";
            header("location: category.php");
        }
    }
    public  function newBook($book_name,$book_cover,$book_file,$cat_id){

        $book_cover_name=$book_cover['name'];
        $book_cover_tmp=$book_cover['tmp_name'];
        $book_file_name=$book_file['name'];
        $book_file_tmp=$book_file['tmp_name'];

        $sql="insert into books (book_name, book_cover, book_file, cat_id, created_at)
                  values ('$book_name', '$book_cover_name', '$book_file_name', '$cat_id', now())";
        $this->db->query($sql);
        move_uploaded_file($book_cover_tmp,"book_cover/$book_cover_name");
        move_uploaded_file($book_file_tmp,"book_file/$book_file_name");
        header("location: dashboard.php");



    }
    function delete($id){
        $sql="delete from Category where id='$id'";
        $this->db->query($sql);
        header("location: category.php");
    }
    function getBook(){
        $sql="select Category.cat_name,books.* from books left join Category on books.cat_id=Category.id";
        return $this->db->query($sql);
    }
    function deleteBook($book_name){
        $sql="select * from books where book_name='$book_name'";
        $row=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        $book_cover=$row['book_cover'];
        $book_file=$row['book_file'];
        unlink("book_cover/$book_cover");
        unlink("book_file/$book_file");

        $delete="delete from books where book_name='$book_name'";
        $this->db->query($delete);
        header("location: dashboard.php");
    }
    public function updateBook($id,$book_name,$book_cover,$book_file,$cat_id)
    {
        $book_cover_name = $book_cover['name'];
        $book_cover_tmp = $book_cover['tmp_name'];
        $book_file_name = $book_file['name'];
        $book_file_tmp = $book_file['tmp_name'];
        if ($book_cover_name && $book_file_name) {
            $sql = "update books set book_file='$book_file_name' ,book_cover='$book_cover_name',book_name='$book_name',cat_id='$cat_id' where id='$id'";
            move_uploaded_file($book_cover_tmp, "book_cover/$book_cover_name");
            move_uploaded_file($book_file_tmp, "book_file/$book_file_name");
        } else if ($book_cover) {
            $sql = "update books set book_cover='$book_cover_name',book_name='$book_name',cat_id='$cat_id' where id='$id'";
            move_uploaded_file($book_cover_tmp, "book_cover/$book_cover_name");

        } else if ($book_file) {
            $sql = "update books set book_file='$book_file_name' ,book_name='$book_name',cat_id='$cat_id' where id='$id'";
            move_uploaded_file($book_file_tmp, "book_file/$book_file_name");

        } else {
            $sql = "update books set book_name='$book_name',cat_id='$cat_id' where id='$id'";

        }
            $this->db->query($sql);
            header("location: dashboard.php");

    }

}