<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <script src="assets/bootstrap%201/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap%201/js/bootstrap.js"></script>
    <script src="assets/bootstrap%201/js/popper.min.js"></script>

    <link rel="stylesheet" href="assets/bootstrap%201/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap%201/css/custom.css">
</head>
<body>
<section>
    <div class="row bg-light">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="text-info text-center">Register here</h1>
            <form method="post" action="register_handler.php">
                <input class="form-control" name="u_name" placeholder="Enter Name" type="text"><br><br>
                <input class="form-control" name="u_email" placeholder="Enter email" type="email"><br><br>
                <input class="form-control" name="u_password" placeholder="Enter Password" type="password"><br><br>
                <input class="btn btn-outline-info btn-block" name="btn_reg" value="Register" type="submit">
                <a class="btn btn-outline-success btn-block" href="users.php">View users</a>

            </form>
        </div>
        <div class="col-3"></div>
    </div>
</section>

</body>
</html>