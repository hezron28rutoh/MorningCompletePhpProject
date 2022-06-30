<?php
//Check if the button has been clicked
if (isset($_POST["btn_reg"])){
//    start receiving data from the form
    $name = $_POST["u_name"];
    $email = $_POST["u_email"];
    $pass = $_POST["u_password"];
//    Now proceed to connect to the database to save your data
    require_once "db_connection.php";
//create the insert query to save the data
    $insertQuery = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) 
                    VALUES (null,'$name','$email','$pass')";
//    finally save the data using mysqli_query
    $save = mysqli_query($connection,$insertQuery);
//    check if the saving was successful
    if (isset($save)){
        echo "user registration is successful";
    }else{
        echo "User registration Failed";
    }
}