<?php
require 'config.php';


//SDHCP Report---------------------------------->
//SDHCP Add Report---->
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


//SDHCP Update Report---->

if(isset($_POST['update_rep']))
{
    $rep_id = mysqli_real_escape_string($conn, $_POST['rep_id']);
    $rep_title = mysqli_real_escape_string($conn, $_POST['rep_title']);
    $quarter = mysqli_real_escape_string($conn, $_POST['quarter']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    
    $query = "UPDATE tb_sdhcp SET rep_title='$rep_title', quarter='$quarter', date='$date' WHERE rep_id='$rep_id'";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Data Updated Successfully";
        header("Location: ../user_sdhcp.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Updated";
        header("Location: ../user_sdhcp.php");
        exit(0);
    }
}

//SDHCP Update Report Data---->

if(isset($_POST['update_rep_data']))
{
    $data_id = mysqli_real_escape_string($conn, $_POST['data_id']);
    $h_task = mysqli_real_escape_string($conn, $_POST['h_task']);
    $online = mysqli_real_escape_string($conn, $_POST['online']);
    $f2f = mysqli_real_escape_string($conn, $_POST['f2f']);
    $prescription = mysqli_real_escape_string($conn, $_POST['prescription']);
    $treatment = mysqli_real_escape_string($conn, $_POST['treatment']);
    $referal = mysqli_real_escape_string($conn, $_POST['referal']);
    $subtotal = mysqli_real_escape_string($conn, $_POST['subtotal']);


    
    $query = "UPDATE tb_sdhcp_data SET h_task='$h_task', online='$online', f2f='$f2f',prescription='$prescription', treatment='$treatment', referal='$referal',subtotal='$subtotal' WHERE data_id='$data_id'";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Data Edited Successfully";
        header("Location: ../user_sdhcp.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Edited";
        header("Location: ../user_sdhcp.php");
        exit(0);
    }
}

//SDHCP Data---------------------------------->

if(isset($_POST["submit_sdhcp"])){
    $data_id = $_POST["data_id"];
    $rep_id = $_POST["rep_id"];
    $g_level = $_POST["g_level"];
    $h_task = $_POST["h_task"];
    $online = $_POST["online"];
    $f2f = $_POST["f2f"]; 
    $prescription = $_POST["prescription"];
    $treatment = $_POST["treatment"];
    $referal = $_POST["referal"];
    $subtotal = $_POST["subtotal"];

    
      foreach($data_id as $key => $value){
        $result = "INSERT INTO tb_sdhcp_data VALUES('$data_id[$key]','$rep_id[$key]','$g_level[$key]','$h_task[$key]','$online[$key]','$f2f[$key]', '$prescription[$key]',  '$treatment[$key]','$referal[$key]','$subtotal[$key]')";
  
        $query = mysqli_query($conn, $result);
  
        if($result)
          {
              $_SESSION['success_message'] = "Data Stored Successfully";
              header("Location: ../user_sdhcp.php");
          }
          else
          {
              $_SESSION['danger_message'] = "Data Not Stored";
              header("Location: ../user_sdhcp.php");
          }
      }
  }

  if(isset($_POST['clear']))
  {
      $rep_id = $_POST['rep_id'];
  
      
      $query2 = "DELETE FROM tb_sdhcp_data WHERE rep_id='$rep_id'";
      $query_run2 = mysqli_query($conn, $query2);
      
  
      if($query_run2)
      {
          $_SESSION['warning_message'] = "Data Cleared Successfully";
          header("Location: ../user_sdhcp.php");
          exit(0);
      }
      else
      {
          $_SESSION['danger_message'] = "Data Not Cleared";
          header("Location: ../user_sdhcp.php");
          exit(0);
      }
  }


  if(isset($_POST['delete_report']))
  {
      $id = $_POST['delete_data'];
  
      $query = "DELETE FROM tb_sdhcp WHERE rep_id='$id'";
      $query2 = "DELETE FROM tb_sdhcp_data WHERE rep_id='$id'";
      $query_run = mysqli_query($conn, $query);
      $query_run2 = mysqli_query($conn, $query2);
      
  
      if($query_run)
      {
          $_SESSION['warning_message'] = "Data Deleted Successfully";
          header("Location: ../user_sdhcp.php");
          exit(0);
      }
      else
      {
          $_SESSION['danger_message'] = "Data Not Deleted";
          header("Location: ../user_sdhcp.php");
          exit(0);
      }
  }

?>