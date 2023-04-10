<?php
require 'php/config.php';
include 'php/session.php';
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

      <h1 style="margin-left:7%">Add SDHCP Report</h1>
              <div class="row d-flex justify-content-center align-items-center h-100 mb-5">
                <div class="col-xl-10">

                
                  
                <form action="php/code.php" method="post">
                  <div class="card" style="border-radius: 15px;">
                    <div class="card-body">
                         <div class="row mb-4 md-3">
            <div class="hstack gap-4">
            
          

              <form action="php/code.php" method="post">
              <input type="hidden" name="rep_id" value="">

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger me-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Clear Data
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Clear Data</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to clear all data?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" name="clear" class="btn btn-danger">Clear Data</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>

              <a class="btn btn-primary " role="button" href="user_monthly_add_data.php?id=<?= $row['rep_id']; ?>">
                       Add Report
              </a>
              
              <form action="php/export.php" method="post">
              <input type="hidden" name="rep_id" value="">

              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Export Data
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Clear Data</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to export data to "Excel"?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" name="export" class="btn btn-sucess">Export</button>
                    </div>
                  </div>
                </div>
              </div>

              </form>
              
              
             </div>
             
          </div> 
           

                  
              <input type="hidden" name="user_id"  value="" class="form_control no" >
             
            </div>  

      
            <div class="row text-center mb-2">
                      <h4><strong> MONTHLY / ANNUAL HEALTH SERVICES<br>ACCOMPLISHMENT REPORT	</strong></h4>
                    </div>

                      <div class="row align-items-center py-3">
                        <div class="col ps-5">

                          <h5 class="mb-2">Total No. of Elem. Schools Visited</h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="11" readonly />

                        </div>
                       
                        <div class="col pe-5">

                          <h5 class="mb-2">Total No. of Sec. Schools Visited</h5>
                          <input type="number" name="user_name" class="form-control form-control-lg" value="12" readonly />

                        </div>
                        
                      </div>
         
                      
                      <hr class="mx-n3 ">

                     
                    <!-- General Information -->
                      <?php include 'includes/forms/gen_information.php';?>


                      <hr class="mx-n3">  
                      
                      <!-- II. Health Services -->
                      <?php include 'includes/forms/health_serve.php';?>


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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Report</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to add a report?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="add_rep" class="btn btn-primary">Add</button>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <form>
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