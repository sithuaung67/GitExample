<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">My Projects</div>
            <div class="panel-body">
                <form role="form" action="show.php" method="get">
                    <div class="form-group">
                        <input class="form-control" type="text"  name="user_name" placeholder="Enter User Name" required>
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
        <div class="col-md-6">
            <?php
            session_start();
            if($_SESSION['login']){
                echo "get login";
                echo $_SESSION['login'];
                echo "<a href='logout.php'><br>Logout</a>";
            }else {
                echo "no login";
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>