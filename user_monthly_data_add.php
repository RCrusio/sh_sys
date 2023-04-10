<?php
require 'php/config.php';
include 'php/session.php';

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


?>


<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User Form</title>
      <link rel="stylesheet" href="assets/css/container.css">
      <link rel="stylesheet" href="assets/css/sidebar.css">    
      <link rel="stylesheet" href="assets/css/table.css">    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  </head>
  <body>

  <?php include 'includes/user_sidebar.php';?>
  <section class="home-section">
      <div class="container_form">   

              <div class="row d-flex justify-content-center align-items-center h-100 mb-5">
                <div class="col-xl-9">
                <?php
                if(isset($_GET['id'])) 
                {
                    $id = mysqli_real_escape_string($conn, $_GET['id']);
                    $query = "SELECT * FROM tb_monthly WHERE mon_id='$id' ";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $row = mysqli_fetch_array($query_run);
              ?>
                
                  <h1>Add <?= $row['mon_title']; ?> Data</h1>
                <form action="" method="post">
                  <div class="card" style="border-radius: 15px;">
                    <div class="card-body">
                         <div class="row mb-4 md-3">
            <div class="hstack gap-4">
            
           
 
             </div>
             
          </div> 
                   
              <input type="" name="mon_id"  value="<?= $row['mon_id']; ?>" class="form_control no" >
             
            </div>  
            <div class="row text-center mb-2">
                      <h4><strong> MONTHLY / ANNUAL HEALTH SERVICES<br>ACCOMPLISHMENT REPORT	</strong></h4>
                    </div>

                      <div class="row align-items-center py-3">
                        <div class="col ps-5">

                          <h5 class="mb-2">Total No. of Elem. Schools Visited</h5>
                          <input type="number" name="total_elem_vis" class="form-control form-control-lg" value=""  />

                        </div>
                       
                        <div class="col pe-5">

                          <h5 class="mb-2">Total No. of Sec. Schools Visited</h5>
                          <input type="number" name="total_sec_vis" class="form-control form-control-lg" value=""  />

                        </div>
                        
                      </div>
         
                      
                      <hr class="mx-n3 ">

                     
                    <!-- General Information -->
                      <?php include 'includes/forms/gen_information_add.php';?>


                      <hr class="mx-n3">  
                      
                      <!-- II. Health Services -->
                      <?php include 'includes/forms/health_serve_add.php';?>


                      <hr class="mx-n3">

                      <div class="px-5 py-4 ms-auto">
                        <a href="user_sdhcp.php" type="button" class="btn btn-secondary btn-lg">Go Back</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Report</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to add a data?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="add_mon_data" class="btn btn-primary">Add</button>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>

                      <?php
        }
        
        }
        ?>
                    </form>
                    </div>
                  </div>

                </div>


        </section>
      </div>
      </section>


  

<script src="assets/js/sidebar.js"></script>
<script src="assets/js/delete_modal.js"></script>
<script src="assets/js/search.js"></script>
  </body>
  </html>