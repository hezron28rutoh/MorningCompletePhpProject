<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register|Log in</title>

    <script src="assets/bootstrap%201/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap%201/js/bootstrap.js"></script>
    <script src="assets/bootstrap%201/js/popper.min.js"></script>

    <link rel="stylesheet" href="assets/bootstrap%201/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap%201/css/custom.css">
</head>
<body>
<div class="container">
    <div class="login_box">
        <div class="row ">
            <div class="col-md-6 login_left">
                <form action="validation_db.php">
                    <h1>Register Here</h1>
                    <label for="">Username</label> <br>
                    <input class="form-control" name="u_name" type="text">
                    <label for="">Password</label> <br>
                    <input class="form-control" name="pass" type="password"> <br><br>
                    <input class="btn btn-info" value="Register" type="submit">
                </form>
            </div>
            <div class="col-md-6 login_right">
                <form action="entry_db.php">
                    <h1>Register Here</h1>
                    <label for="">Username</label> <br>
                    <input class="form-control" name="u_name" type="text">
                    <label for="">Password</label> <br>
                    <input class="form-control" name="pass" type="password"> <br><br>
                    <input class="btn btn-info" value="Register" type="submit">
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
