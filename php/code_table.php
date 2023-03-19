<?php
require 'config.php';

//<---------Add Data Locator--------->
if(isset($_POST['add_locator']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $school = mysqli_real_escape_string($conn, $_POST['school']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $tree_num = mysqli_real_escape_string($conn, $_POST['tree_num']);
    $tree_name = mysqli_real_escape_string($conn, $_POST['tree_name']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $planted = mysqli_real_escape_string($conn, $_POST['planted']);
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);


    $query = "INSERT INTO tree_locate (id,user_id,user,school,location,tree_num,tree_name,type,status,planted,longitude,latitude) VALUES ('$id','$user_id','$user','$school','$location','$tree_num','$tree_name','$type','$status','$planted','$longitude','$latitude')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Data Stored Successfully";
        header("Location: ../user_locator_tbl.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Stored";
        header("Location: ../user_locator_tbl.php");
        exit(0);
    }
}


//-------------------------------------------------------------
//<---------Edit Data Locator--------->

if(isset($_POST['edit_locator']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $school = mysqli_real_escape_string($conn, $_POST['school']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $tree_num = mysqli_real_escape_string($conn, $_POST['tree_num']);
    $tree_name = mysqli_real_escape_string($conn, $_POST['tree_name']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $planted = mysqli_real_escape_string($conn, $_POST['planted']);
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);

    
    $query = "UPDATE tree_locate SET school='$school', location='$location',tree_num='$tree_num', tree_name='$tree_name',type='$type',status='$status',planted='$planted',longitude='$longitude',latitude='$latitude' WHERE id='$id'";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Data Updated Successfully";
        header("Location: ../user_locator_tbl.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Updated";
        header("Location: ../user_locator_tbl.php");
        exit(0);
    }
}

//-------------------------------------------------------------
//<---------Delete Data Locator--------->


if(isset($_POST['delete_locator']))
{
    $id = $_POST['delete_data'];

    $query = "DELETE FROM tree_locate WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['warning_message'] = "Data Deleted Successfully";
        header("Location: ../user_locator_tbl.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Deleted";
        header("Location: ../user_locator_tbl.php");
        exit(0);
    }
}




//<-------------------------------------------------->
//<---------Add Data Inventory--------->

if(isset($_POST['add_inventory']))
{

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $tree_id = mysqli_real_escape_string($conn, $_POST['tree_id']);
    $tree_name = mysqli_real_escape_string($conn, $_POST['tree_name']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $no_alive = mysqli_real_escape_string($conn, $_POST['no_alive']);
    $no_dead = mysqli_real_escape_string($conn, $_POST['no_dead']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);



    $query = "INSERT INTO tree_inventory (id,user_id,user,tree_id,tree_name,type,no_alive,no_dead,remarks) VALUES ('$id','$user_id','$user','$tree_id','$tree_name','$type','$no_alive','$no_dead','$remarks')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Data Stored Successfully";
        header("Location: ../user_inventory_tbl.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Stored";
        header("Location: ../user_inventory_tbl.php");
        exit(0);
    }
}


//-------------------------------------------------------------
//<---------Edit Data Inventory--------->

if(isset($_POST['edit_inventory']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $tree_id = mysqli_real_escape_string($conn, $_POST['tree_id']);
    $tree_name = mysqli_real_escape_string($conn, $_POST['tree_name']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $no_alive = mysqli_real_escape_string($conn, $_POST['no_alive']);
    $no_dead = mysqli_real_escape_string($conn, $_POST['no_dead']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

    
    $query = "UPDATE tree_inventory SET tree_name='$tree_name',type='$type',no_alive='$no_alive',no_dead='$no_dead',remarks='$remarks' WHERE id='$id'";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Data Updated Successfully";
        header("Location: ../user_inventory_tbl.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Updated";
        header("Location: ../user_inventory_tbl.php");
        exit(0);
    }
}

//-------------------------------------------------------------
//<---------Delete Data Inventory--------->


if(isset($_POST['delete_inventory']))
{
    $id = $_POST['delete_data'];

    $query = "DELETE FROM tree_inventory WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['warning_message'] = "Data Deleted Successfully";
        header("Location: ../user_inventory_tbl.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Deleted";
        header("Location: ../user_inventory_tbl.php");
        exit(0);
    }
}

?>