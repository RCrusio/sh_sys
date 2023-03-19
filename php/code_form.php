<?php
require 'config.php';


//--Locator--
if(isset($_POST["submit_locator"])){
  $id = $_POST["id"];
  $user_id = $_POST["user_id"];
  $user = $_POST["user"];
  $school = $_POST["school"];
  $location = $_POST["location"];
  $tree_num = $_POST["tree_num"]; 
  $tree_name = $_POST["tree_name"];
  $type = $_POST["type"];
  $status = $_POST["status"];
  $planted = $_POST["planted"];
  $longitude = $_POST["longitude"];
  $latitude = $_POST["latitude"];
  
    foreach($id as $key => $value){
      $result = "INSERT INTO tree_locate VALUES('$id[$key]','$user_id','$user','$school','$location','$tree_num[$key]', '$tree_name[$key]',  '$type[$key]','$status[$key]','$planted[$key]','$longitude[$key]', '$latitude[$key]')";

      $query = mysqli_query($conn, $result);

      if($result)
        {
            $_SESSION['success_message'] = "Data Stored Successfully";
            header("Location: ../user_locator_tbl.php");
        }
        else
        {
            $_SESSION['danger_message'] = "Data Not Stored";
            header("Location: ../user_locator_tbl.php");
        }
    }
}

//--Inventory--


if(isset($_POST["submit_inventory"])){
    $id = $_POST["id"]; 
    $user_id = $_POST["user_id"];
    $user = $_POST["user"];  
    $tree_id = $_POST["tree_id"];   
    $tree_name = $_POST["tree_name"];
    $type = $_POST["type"];
    $no_alive = $_POST["no_alive"];
    $no_dead = $_POST["no_dead"];
    $remarks = $_POST["remarks"];
    
      foreach($id as $key => $value){
        $query = "INSERT INTO tree_inventory VALUES('$id[$key]','$user_id','$user','$tree_id[$key]', '$tree_name[$key]',  '$type[$key]','$no_alive[$key]','$no_dead[$key]','$remarks[$key]')";
  
        $result = mysqli_query($conn, $query);
        if($result)
        {
            $_SESSION['success_message'] = "Data Stored Successfully";
            header("Location: ../user_inventory_tbl.php");

        }
        else
        {
            $_SESSION['danger_message'] = "Data Not Stored";
            header("Location: ../user_inventory_tbl.php");

        }
    }
  }

?>