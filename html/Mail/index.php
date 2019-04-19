<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="bootstrap0/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h2>Send Eamil</h2>
            <form method="post" action="send">
                <div class="form-group">
                    <input type="email" name="sender_email" class="form-control" placeholder="Enter Sender Email Address">
                </div>
                <div class="form-group">
                    <input type="email" name="receiver_email" class="form-control" placeholder="Enter Receiver Email Address">
                </div>
                <div class="form-group">
                    <input type="text" name="subject" class="form-control" placeholder="subject">
                </div>
                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Enter Email Body"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
                <h3><a href="show/1000/sithu">Go Show</a></h3>

            </form>
        </div>
    </div>
</div>

</body>
</html>