<?php
require 'config.php';

if(isset($_POST['add_rep']))
{
    //$rep_id = mysqli_real_escape_string($conn, $_POST['id']);
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $rep_title = mysqli_real_escape_string($conn, $_POST['rep_title']);
    $quarter = mysqli_real_escape_string($conn, $_POST['quarter']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    


    $query = "INSERT INTO tb_sdhcp (user_id,user_name,rep_title,quarter,date) VALUES ('$user_id','$user_name','$rep_title','$quarter','$date')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Report Stored Successfully";
        header("Location: ../user_sdhcp.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Report Not Stored";
        header("Location: ../user_sdhcp.php");
        exit(0);
    }
}

?>