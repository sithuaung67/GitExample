<?php include 'auth.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap5/css/bootstrap.css" rel="stylesheet">
    <link href="dataTable.css" rel="stylesheet">
    <title>Document</title>

</head>
<body>

<?php include 'nav_bar.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">Book</div>
                <div class="panel-body">
                    <table class="table" id="MyTable">
                        <thead>
                        <tr>
                            <th>Books Name</th>
                            <th>Book Cover</th>
                            <th>Book File</th>
                            <th>Categories</th>
                            <th>Created_at</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <?php
                        include 'cat_config.php';
                        $books=new category();
                        $book=$books->getBook();
                        foreach ($book as $row):

                        ?>
                            <tr>
                                <td><?php echo $row['book_name']?></td>
                                <td><img src="book_cover/<?php echo $row['book_cover']?>" style="width: 50px;height: 50px"></td>
                                <td><a href="book_file/<?php echo $row['book_file']?>">Download</a></td>
                                <td><?php echo $row['cat_name']?></td>
                                <td><?php echo date ('d-m-y/h:i A',strtotime($row['created_at']))?></td>
                                <td><a href="Edit.php?id=<?php echo $row['id'] ?>" class="text-info"><span class="glyphicon glyphicon-edit">Edit</span> </a> </td>
                                <td><a href="delete.php?book_name=<?php echo $row['book_name']?>"><span class="glyphicon glyphicon-trash text-danger">Delete</span></a></td>



                            </tr>

                            <?php
                        endforeach;
                        ?>

                    </table>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel panel-heading">New book</div>
                <div class="panel-body">
                    <form method="post" action="post_book.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="book_name"  class="control-label">Book Name</label>
                            <input  type="text" name="book_name" id="book_name" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="book_cover" class="control-label">Book Cover</label>
                            <input style="height: auto" type="file" name="book_cover" id="book_cover" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="book_file" class="control-label">Book File</label>
                            <input style="height:auto" type="file" name="book_file" id="book_file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cat_id" class="control-label">Cat_ID</label>
                            <select name="cat_id" id="cat_id" class="form-control">
                                <option value="">Select Categories</option>
                                <?php

                                $cat_row=new category();
                                $cats=$cat_row->getcatgory();
                                foreach ($cats as $cat):?>
                                <option value="<?php echo $cat['id'] ?>"><?php echo $cat['cat_name']?></option>

                                    <?php
                                endforeach;

                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="bootstrap5/js/jQuery.js"> </script>
<script src="bootstrap5/js/bootstrap.js"></script>
<script src="dataTable.js"></script>
<script>
    $("#MyTable").dataTable();
</script>

</body>
</html>
