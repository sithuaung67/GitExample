<?php include "public_config.php"?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap5/css/bootstrap.css" rel="stylesheet">
    <title>PhPAuth</title>
</head>
<body>
<?php include 'nav_bar.php'?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">SearchBook</div>
                <div class="panel-body">
                    <form class="navbar-form" role="search" method="get" action="index.php">
                        <div class="form-group">
                            <input name="book_name" type="text" class="form-control" placeholder="Search">
                        </div>
                        <button  style="border-radius:5px " type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Categories</div>
                <div class="panel-body">
                    <ul class="list-group">
                        <?php
                            $get_cat=new MyPublic();
                            $cats=$get_cat->getCategory();
                            foreach ($cats as $cat):
                                ?>
                                <li class="list-group-item"><a href="index.php?cat_id=<?php echo $cat['id']?>"> <?php echo $cat['cat_name']?></a></li>
                                <?php
                            endforeach;
                                ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">Books</div>
                <div class="panel-body">
                    <?php
                    $book_name=$_GET['book_name'];
                    $cat_id=$_GET['cat_id'];

                    if($book_name){
                        $books=$get_cat->SearchBook($book_name);
                    }else{
                        $books=$get_cat->getBooks($cat_id);
                    }

                    foreach ($books as $book):
                    ?>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="book_cover/<?php echo $book['book_cover'] ?>" style="width: 50px; height: 50px" class="img-circle">
                            <h4 class="text-center text-primary"><?php echo $book['book_name']?></h4>
                            <p><h6>Upload on:<?php echo date("D-m-Y/h:i A",strtotime($book['created_at']))?></h6></p>
                            <a href="book_file/<?php echo $book['book_file']?>" class="btn btn-primary btn-block">Download</a>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="bootstrap5/js/jQuery.js"></script>
<script src="bootstrap5/js/bootstrap.js"></script>
</body>
</html>