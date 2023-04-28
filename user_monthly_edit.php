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

              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                  <h1>Update Monthly Report</h1>
                
                  <div class="card mb-4" style="border-radius: 15px;">
                    <div class="card-body">

                <?php
              
                    $id = mysqli_real_escape_string($conn, $_SESSION['id']);
                    $query = "SELECT * FROM tb_user WHERE id='$id' ";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $row = mysqli_fetch_array($query_run);
                  ?>
                  
              <input type="hidden" name="user_id"  value="<?= $row['id']; ?>" class="form_control no" >
             
            </div>  

                      <div class="row align-items-center py-3">
                        <div class="col-md-3 ps-5">

                          <h6 class="mb-0">Nurse</h6>

                        </div>
                        <div class="col-md-9 pe-5">

                        <input type="text" name="user_name" class="form-control form-control-lg" value="<?= $row['name']; ?>" readonly />

                        </div>
                      </div>
                      <?php
                  }
                ?>
                      
                      <?php
              
                    $id = mysqli_real_escape_string($conn, $_GET['id']);
                    $query = "SELECT * FROM tb_monthly WHERE mon_id='$id' ";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $row = mysqli_fetch_array($query_run);
                  ?>
                  <form action="php/user_code2.php" method="post">
                      <hr class="mx-n3">
                      <input type="hidden" name="mon_id" value="<?= $row['mon_id']; ?>">
                    <div class="row align-items-center py-3">
                        <div class="col-md-3 ps-5">

                          <h6 class="mb-0">Title Report</h6>

                        </div>
                        <div class="col-md-9 pe-5">

                          <textarea class="form-control" name="mon_title" rows="3" placeholder="Input Report Title....."><?= $row['mon_title']; ?></textarea>
                        </div>
                      </div>

                    <hr class="mx-n3">

                    <div class="row align-items-center py-3">
                        <div class="col-md-3 ps-5">

                          <h6 class="mb-0">Date<span style="color:red">*</span></h6>

                        </div>
                        <div class="col-md-9 pe-5">

                        <input type="month" name="mon_date" value="<?= $row['mon_date']; ?>" class="form-control form-control-lg" />

                        </div>
                      </div>

                   

                      <hr class="mx-n3">

                      <div class="px-5 py-4">
                        <a href="user_monthly.php" type="button" class="btn btn-secondary btn-lg">Go Back</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Update Report</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Report</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to update a report?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="update_mon" class="btn btn-primary">Update</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                  }
                ?>
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