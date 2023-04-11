<?php
require 'config.php';


//Monthly Report---------------------------------->
//Monthly Add Report---->
if(isset($_POST['add_mon']))
{
    //$rep_id = mysqli_real_escape_string($conn, $_POST['id']);
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $mon_title = mysqli_real_escape_string($conn, $_POST['mon_title']);
    $mon_date = mysqli_real_escape_string($conn, $_POST['mon_date']);
    


    $query = "INSERT INTO tb_monthly (user_id,user_name,mon_title,mon_date) VALUES ('$user_id','$user_name','$mon_title','$mon_date')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Report Stored Successfully";
        header("Location: ../user_monthly.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Report Not Stored";
        header("Location: ../user_monthly.php");
        exit(0);
    }
}


//Monthly Update Report---->

if(isset($_POST['update_mon']))
{
    $mon_id = mysqli_real_escape_string($conn, $_POST['mon_id']);
    $mon_title = mysqli_real_escape_string($conn, $_POST['mon_title']);
    $mon_date = mysqli_real_escape_string($conn, $_POST['mon_date']);

    
    $query = "UPDATE tb_monthly SET mon_title='$mon_title', mon_date='$mon_date' WHERE mon_id='$mon_id'";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Report Updated Successfully";
        header("Location: ../user_monthly.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Report Not Updated";
        header("Location: ../user_monthly.php");
        exit(0);
    }
}



//Monthly delete Report & Data---->
  if(isset($_POST['delete_monthly']))
  {
      $id = $_POST['delete_data'];
  
      $query = "DELETE FROM tb_monthly WHERE mon_id='$id'";
      $query2 = "DELETE FROM tb_monthly_data WHERE mon_id='$id'";
      $query_run = mysqli_query($conn, $query);
      $query_run2 = mysqli_query($conn, $query2);
      
  
      if($query_run)
      {
          $_SESSION['warning_message'] = "Data Deleted Successfully";
          header("Location: ../user_monthly.php");
          exit(0);
      }
      else
      {
          $_SESSION['danger_message'] = "Data Not Deleted";
          header("Location: ../user_monthly.php");
          exit(0);
      }
  }


  //monthly clear Report Data---->
if(isset($_POST['clear']))
{
    $mon_id = $_POST['mon_id'];

    
    $query2 = "DELETE FROM tb_monthly_data WHERE mon_id='$mon_id'";
    $query_run2 = mysqli_query($conn, $query2);
    

    if($query_run2)
    {
        $_SESSION['warning_message'] = "Data Cleared Successfully";
        header("Location: ../user_monthly.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Cleared";
        header("Location: ../user_monthly.php");
        exit(0);
    }
}


//-----------------------------------
//Add Monthly Report Data--------------

if(isset($_POST['add_mon_data']))
{
    //$rep_id = mysqli_real_escape_string($conn, $_POST['id']);
    $mon_id = mysqli_real_escape_string($conn, $_POST['mon_id']);

    $total_elem_vis = mysqli_real_escape_string($conn, $_POST['total_elem_vis']);
    $total_sec_vis = mysqli_real_escape_string($conn, $_POST['total_sec_vis']);

    $se_male = mysqli_real_escape_string($conn, $_POST['se_male']);
    $se_female = mysqli_real_escape_string($conn, $_POST['se_female']);

    $sp_teaching_male = mysqli_real_escape_string($conn, $_POST['sp_teaching_male']);
    $sp_teaching_female = mysqli_real_escape_string($conn, $_POST['sp_teaching_female']);

    $sp_non_teaching_male = mysqli_real_escape_string($conn, $_POST['sp_non_teaching_male']);
    $sp_non_teaching_female = mysqli_real_escape_string($conn, $_POST['sp_non_teaching_female']);

    $ha_noa_learners = mysqli_real_escape_string($conn, $_POST['ha_noa_learners']);
    $ha_noa_teachers = mysqli_real_escape_string($conn, $_POST['ha_noa_teachers']);
    $ha_noa_ntp = mysqli_real_escape_string($conn, $_POST['ha_noa_ntp']);

    

    $ha_nhp_learners = mysqli_real_escape_string($conn, $_POST['ha_nhp_learners']);
    $ha_nhp_teachers = mysqli_real_escape_string($conn, $_POST['ha_nhp_teachers']);
    $ha_nhp_ntp = mysqli_real_escape_string($conn, $_POST['ha_nhp_ntp']);

    $ha_vs_learners = mysqli_real_escape_string($conn, $_POST['ha_vs_learners']);

    $td_learners = mysqli_real_escape_string($conn, $_POST['td_learners']);
    $td_teachers = mysqli_real_escape_string($conn, $_POST['td_teachers']);
    $td_ntp = mysqli_real_escape_string($conn, $_POST['td_ntp']);

    $npd_r1 = mysqli_real_escape_string($conn, $_POST['npd_r1']);
    $npd_r2 = mysqli_real_escape_string($conn, $_POST['npd_r2']);

    $npgis = mysqli_real_escape_string($conn, $_POST['npgis']);

    $npi_g1v = mysqli_real_escape_string($conn, $_POST['npi_g1v']);
    $npi_g7v = mysqli_real_escape_string($conn, $_POST['npi_g7v']);
    $npi_g4v = mysqli_real_escape_string($conn, $_POST['npi_g4v']);

    $nca_learners = mysqli_real_escape_string($conn, $_POST['nca_learners']);
    $nca_teachers = mysqli_real_escape_string($conn, $_POST['nca_teachers']);

    $referral_physician = mysqli_real_escape_string($conn, $_POST['referral_physician']);
    $referral_dentis = mysqli_real_escape_string($conn, $_POST['referral_dentis']);
    $referral_other = mysqli_real_escape_string($conn, $_POST['referral_other']);
    $referral_hospital = mysqli_real_escape_string($conn, $_POST['referral_hospital']);

    $query = "INSERT INTO tb_monthly_data (mon_id,total_elem_vis,total_sec_vis,se_male,se_female,sp_teaching_male,sp_teaching_female,sp_non_teaching_male,sp_non_teaching_female,ha_noa_learners,ha_noa_teachers,ha_noa_ntp,ha_nhp_learners,ha_nhp_teachers,ha_nhp_ntp,ha_vs_learners,td_learners,td_teachers,td_ntp,npd_r1,npd_r2,npgis,npi_g1v,npi_g7v,npi_g4v,nca_learners,nca_teachers,referral_physician,referral_dentis,referral_other,referral_hospital) VALUES ('$mon_id','$total_elem_vis','$total_sec_vis','$se_male','$se_female','$sp_teaching_male','$sp_teaching_female','$sp_non_teaching_male','$sp_non_teaching_female','$ha_noa_learners','$ha_noa_teachers','$ha_noa_ntp','$ha_nhp_learners','$ha_nhp_teachers','$ha_nhp_ntp','$ha_vs_learners','$td_learners','$td_teachers','$td_ntp','$npd_r1','$npd_r2','$npgis','$npi_g1v','$npi_g7v','$npi_g4v','$nca_learners','$nca_teachers','$referral_physician','$referral_dentis','$referral_other','$referral_hospital')";
    

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Report Data Stored Successfully";
        header("Location: ../user_monthly.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Report Data Not Stored";
        header("Location: ../user_monthly.php");
        exit(0);
    }
}


//--------------------------------------------------------------------->
//Update Monthly Data

if(isset($_POST['edit_mon_data']))
{
    $data_id = mysqli_real_escape_string($conn, $_POST['data_id']);
    $total_elem_vis = mysqli_real_escape_string($conn, $_POST['total_elem_vis']);
    $total_sec_vis = mysqli_real_escape_string($conn, $_POST['total_sec_vis']);

    $se_male = mysqli_real_escape_string($conn, $_POST['se_male']);
    $se_female = mysqli_real_escape_string($conn, $_POST['se_female']);

    $sp_teaching_male = mysqli_real_escape_string($conn, $_POST['sp_teaching_male']);
    $sp_teaching_female = mysqli_real_escape_string($conn, $_POST['sp_teaching_female']);

    $sp_non_teaching_male = mysqli_real_escape_string($conn, $_POST['sp_non_teaching_male']);
    $sp_non_teaching_female = mysqli_real_escape_string($conn, $_POST['sp_non_teaching_female']);

    $ha_noa_learners = mysqli_real_escape_string($conn, $_POST['ha_noa_learners']);
    $ha_noa_teachers = mysqli_real_escape_string($conn, $_POST['ha_noa_teachers']);
    $ha_noa_ntp = mysqli_real_escape_string($conn, $_POST['ha_noa_ntp']);

    

    $ha_nhp_learners = mysqli_real_escape_string($conn, $_POST['ha_nhp_learners']);
    $ha_nhp_teachers = mysqli_real_escape_string($conn, $_POST['ha_nhp_teachers']);
    $ha_nhp_ntp = mysqli_real_escape_string($conn, $_POST['ha_nhp_ntp']);

    $ha_vs_learners = mysqli_real_escape_string($conn, $_POST['ha_vs_learners']);

    $td_learners = mysqli_real_escape_string($conn, $_POST['td_learners']);
    $td_teachers = mysqli_real_escape_string($conn, $_POST['td_teachers']);
    $td_ntp = mysqli_real_escape_string($conn, $_POST['td_ntp']);

    $npd_r1 = mysqli_real_escape_string($conn, $_POST['npd_r1']);
    $npd_r2 = mysqli_real_escape_string($conn, $_POST['npd_r2']);

    $npgis = mysqli_real_escape_string($conn, $_POST['npgis']);

    $npi_g1v = mysqli_real_escape_string($conn, $_POST['npi_g1v']);
    $npi_g7v = mysqli_real_escape_string($conn, $_POST['npi_g7v']);
    $npi_g4v = mysqli_real_escape_string($conn, $_POST['npi_g4v']);

    $nca_learners = mysqli_real_escape_string($conn, $_POST['nca_learners']);
    $nca_teachers = mysqli_real_escape_string($conn, $_POST['nca_teachers']);

    $referral_physician = mysqli_real_escape_string($conn, $_POST['referral_physician']);
    $referral_dentis = mysqli_real_escape_string($conn, $_POST['referral_dentis']);
    $referral_other = mysqli_real_escape_string($conn, $_POST['referral_other']);
    $referral_hospital = mysqli_real_escape_string($conn, $_POST['referral_hospital']);

    
    $query = "UPDATE tb_monthly_data SET total_elem_vis='$total_elem_vis', total_sec_vis='$total_sec_vis', se_male='$se_male',se_female='$se_female', sp_teaching_male='$sp_teaching_male', sp_teaching_female='$sp_teaching_female',sp_non_teaching_male='$sp_non_teaching_male',sp_non_teaching_female='$sp_non_teaching_female',ha_noa_learners='$ha_noa_learners',ha_noa_teachers='$ha_noa_teachers',ha_noa_ntp='$ha_noa_ntp',ha_nhp_learners='$ha_nhp_learners',ha_nhp_teachers='$ha_nhp_teachers',ha_nhp_ntp='$ha_nhp_ntp',ha_vs_learners='$ha_vs_learners',td_learners='$td_learners',td_teachers='$td_teachers',td_ntp='$td_ntp',npd_r1='$npd_r1',npd_r2='$npd_r2',npgis='$npgis',npi_g1v='$npi_g1v',npi_g7v='$npi_g7v',npi_g4v='$npi_g4v',nca_learners='$nca_learners',nca_teachers='$nca_teachers',referral_physician='$referral_physician',referral_dentis='$referral_dentis',referral_other='$referral_other',referral_hospital='$referral_hospital' WHERE data_id='$data_id'";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success_message'] = "Data Edited Successfully";
        header("Location: ../user_monthly.php");
        exit(0);
    }
    else
    {
        $_SESSION['danger_message'] = "Data Not Edited";
        header("Location: ../user_monthly.php");
        exit(0);
    }
}







?>


