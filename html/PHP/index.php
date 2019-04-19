<?php
session_start();

echo $_SESSION['name'];
echo $_SESSION['email'];
echo $_SESSION['password'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">My Projects</div>
                <div class="panel-body">
                    <form role="form" action="show.php" method="get">
                        <div class="form-group">
                            <input class="form-control" type="text"  name="user_name" placeholder="Enter User Name" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="border-radius: 10px">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>