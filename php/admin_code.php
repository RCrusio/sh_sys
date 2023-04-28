<?php
require 'config.php';


//User Accounts---------------------------------->
//Add User Account---->
if(isset($_POST['add_user']))
{

    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_pass = mysqli_real_escape_string($conn, $_POST['user_pass']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    


    $query = "INSERT INTO tb_user (name,email,password,status,type) VALUES ('$user_name','$user_email','$user_pass','$status','$type')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "User Account Added Successfully";
        header("Location: ../admin_accounts.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "User Account Not Added";
        header("Location: ../admin_accounts.php");
        exit(0);
    }
}


//Update User Account---->

if(isset($_POST['update_user']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_pass = mysqli_real_escape_string($conn, $_POST['user_pass']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    

    
    $query = "UPDATE tb_user SET name='$user_name', email='$user_email', password='$user_pass',status='$status',type='$type' WHERE id='$id'";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "User Account Added Successfully";
        header("Location: ../admin_accounts.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "User Account Not Added";
        header("Location: ../admin_accounts.php");
        exit(0);
    }
}


if(isset($_POST['delete_user']))
{
    $id = $_POST['delete_data'];

    $query = "DELETE FROM tb_user WHERE id='$id'";
  
    $query_run = mysqli_query($conn, $query);

    

    if($query_run)
    {
        $_SESSION['warning_message'] = "Data Deleted Successfully";
        header("Location: ../admin_accounts.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Deleted";
        header("Location: ../admin_accounts.php");
        exit(0);
    }
}

?>