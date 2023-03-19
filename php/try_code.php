<?php

require 'config.php';

if(isset($_POST['add_locator']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO student (`fname`,`lname`,`course`,`contact`) VALUES ('$fname','$lname','$course','$contact')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: ../try_table.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}



if(isset($_POST['updatedata']))
{   
    $id = $_POST['update_id'];
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];

    $query = "UPDATE student SET fname='$fname', lname='$lname', course='$course', contact=' $contact' WHERE id='$id'  ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:../try_table.php");
    }
    else
    {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}


if(isset($_POST['delete_locator']))
{
    $id = $_POST['delete_data'];

    $query = "DELETE FROM tree_locate WHERE tree_id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:../try_table.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}


?>