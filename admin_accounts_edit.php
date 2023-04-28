<?php
require 'php/config.php';
include 'php/admin_session.php';
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

  <?php include 'includes/admin_sidebar.php';?>
  <section class="home-section">
      <div class="container_form">   

              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                <h1><a href="admin_accounts.php"><i class='bx bx-left-arrow-alt'></i></a>Edit User Account</h1>
                <form action="php/admin_code.php" method="post">
                  <div class="card" style="border-radius: 15px;">
                    <div class="card-body">
                    <?php
              
              $id = mysqli_real_escape_string($conn, $_GET['id']);
              $query = "SELECT * FROM tb_user WHERE id='$id' ";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0)
              {
                  $row = mysqli_fetch_array($query_run);
            ?>
             
            </div>  
            <input type="hidden" name="id"  value="<?= $row['id']; ?>" class="form_control no" >
                      <div class="row align-items-center py-3">
                        <div class="col-md-3 ps-5">

                          <h6 class="mb-0">Name<span style="color:red">*</span></h6>

                        </div>
                        <div class="col-md-9 pe-5">

                        <input type="text" name="user_name" class="form-control form-control-lg" value="<?= $row['name']; ?>" readonly/>

                        </div>
                      </div>
    
                      <hr class="mx-n3">

                    <div class="row align-items-center py-3">
                        <div class="col-md-3 ps-5">

                          <h6 class="mb-0">Email <span style="color:red">*</span></h6>

                        </div>
                        <div class="col-md-9 pe-5">

                        <input type="text" name="user_email" class="form-control form-control-lg" value="<?= $row['email']; ?>"/>
                        </div>
                      </div>

                      <hr class="mx-n3">

                    <div class="row align-items-center py-3">
                        <div class="col-md-3 ps-5">

                          <h6 class="mb-0">Password<span style="color:red">*</span></h6>

                        </div>
                        <div class="col-md-9 pe-5">

                        <input type="text" name="user_pass" class="form-control form-control-lg" value="<?= $row['password']; ?>" required/>
                        </div>
                      </div>

                    <hr class="mx-n3">

                      <div class="row align-items-center pt-4 pb-3">
                        <div class="col ps-5">

                          <h6 class="mb-1">Status<span style="color:red">*</span></h6>
                          <select class="form-select form-select-lg " name="status" aria-label="Default select example" required>
                              <option selected><?= $row['status']; ?></option>
                              <option value="Nurse 1">Nurse 1</option>
                              <option value="Nurse 2">Nurse 2</option>
                              <option value="Nurse 3">Nurse 3</option>
                              <option value="Nurse 4">Nurse 4</option>
                              <option value="Nurse 5">Nurse 5</option>
                              <option value="Nurse 6">Nurse 6</option>
                              <option value="Nurse 7">Nurse 7</option>

                          </select>
                        </div>
                        
 

                        <div class="col pe-5 ps-2">

                          <h6 class="mb-1">User Type<span style="color:red">*</span></h6>
                          <select class="form-select form-select-lg " name="type" aria-label="Default select example" required>
                              <option selected><?= $row['type']; ?></option>
                              <option value="User">User</option>
                              <option value="Admin">Admin</option>
                            
                          </select>
                        </div>
 
                        
                      </div>

                   

                      <hr class="mx-n3">

                      <div class="px-5 py-4">
                        <a href="admin_accounts.php" type="button" class="btn btn-secondary btn-lg">Go Back</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Account</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Account</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to edit the account?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="update_user" class="btn btn-primary">Save</button>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <form>

                      <?php
                  }
                ?>
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