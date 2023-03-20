<?php
require 'php/config.php';
include 'php/session.php';

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

      <?php
                if(isset($_GET['id'])) 
                {
                    $id = mysqli_real_escape_string($conn, $_GET['id']);
                    $query = "SELECT * FROM tb_sdhcp WHERE rep_id='$id' ";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $row = mysqli_fetch_array($query_run);
              ?>

          <H1>SDHCP Report <?= $row['rep_id']; ?> Data</H1>
          <form action="" method="post" >
          <div class="container">
            <div class="row top-tab">
           
              
                    


              </div>  

              <table class="_table">
                <thead class="text-center">
                  <tr>
                  <th rowspan="2">Grade Level
                  <th rowspan="2">Health Task 
                  <th colspan="2">Consultations Given</th>

                  <th colspan="2">Services Delivered</th>
                  <th rowspan="2">Referal</th>  
                  <th rowspan="2">Subtotal</th>

                  </tr>
                  <tr>
                  <td>Online</td>
                  <td>Face to Face</td>
                  <td>Prescription</td>
                  <td>Treatement</td>
                  </tr>
                </thead>

                <tbody id="table_body">

                <?php include 'includes/data_table.php';?>
                </tbody>
              </table>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
              <button type="button" class="btn btn-primary btn-block mt-3 mb-4 float-right"
              data-bs-toggle="modal" data-bs-target="#exampleModal" >Submit Data</button>
              </div>
              <?php
        }
        
        }
        ?>
              
  </div>
  <?php include 'includes/modals/sdhcp_data_form_modal.php';?>
  </form>
       
        </div>
      </div>
      </section>  

<script src="assets/js/sidebar.js"></script>
<script src="assets/js/delete_modal.js"></script>
<script src="assets/js/search.js"></script>
  </body>
  </html>