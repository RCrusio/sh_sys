<?php
require 'config.php';

if(isset($_POST['acc_update']))
{
    $id = $_POST["id"];
    $email = $_POST["email"];   
    $password = $_POST["password"];

    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE password = '$password'");
    if(mysqli_num_rows($duplicate) > 0){
        $_SESSION['warning_message'] = "Please Change Password";
        header("Location: ../user_account.php");
        exit(0);
      }
    else{
    $query = "UPDATE tb_user SET email='$email', password='$password' WHERE id='$id'";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        
        header("Location: logout.php");
    }
}
}
?>