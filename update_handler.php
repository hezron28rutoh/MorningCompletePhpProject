<?php
//check if the button has been clicked
if (isset($_POST["btn_update"])){
//    receive the updated data from the form
    $userId = $_POST["u_id"];
    $updatedName = $_POST["u_name"];
    $UpdatedEmail = $_POST["u_email"];
    $updatedPassword = $_POST["u_pass"];
//    connect to the database to return the data
    require_once "db_connection.php";
//    create the update query
    $updateQuery = "UPDATE `users` SET `jina`='$updatedName',`arafa`='$UpdatedEmail',`siri`='$updatedPassword' WHERE `id`='$userId'";
//    Finally execute the update query by use of mysqli_query()
    $update = mysqli_query($connection,$updateQuery);
//    Check if the update was successful
    if (isset($update)){
//        Redirect the user to users.php to see changes
        header("location:users.php");
    }else{
        echo "Update Failed";
    }
}
