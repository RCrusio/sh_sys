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

          <H1>SDHCP Reports</H1>
          
          <div class="container"> 
          <?php include 'php/message.php';?>
          <div class="row mb-4 md-3">
          <div class="hstack gap-4">
            
          <div class="input-group rounded ">
            <input type="text" class="form-control rounded" id="search_input" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
            <i class='bx bx-search-alt'></i>
            </span>
          </div>
             </div>
             
          </div>  
          
          <table class="_table">
              <thead class="text-center">
                <tr>
                  <th width="50px">ID</th>
                  <th width="20%">Submitter</th>
                  <th>Report Title </th>
                  <th width="100px">Quarter </th>
                  <th width="100px">Date</th>
                  <th width="50px">
                    View Report
                  </th>
                </tr>
              </thead>
              <tbody id="table_body">
              <?php 
                 
                  $query = "SELECT * FROM tb_sdhcp";
                  $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                      foreach($query_run as $row)
                      {
                      ?>
                      <tr>
                           
                            <td><?php echo $row['rep_id'];?></td>
                            <td><?php echo $row['user_name'];?></td>
                            <td><?php echo $row['rep_title'];?></td>
                            <td><?php echo $row['quarter'];?></td>
                            <td><?php echo $row['date'];?></td>

                            <td>
                            
                            <div class="action_container">
                                <a href="admin_sdhcp_data.php?id=<?= $row['rep_id']; ?>" class="btn btn-secondary" role="button" style="margin-right:3px">
                                View
                                </a>
                               

                            </div>
                            </td>

                       </tr>
                       <?php
                        }
                        }
                        else
                        {
                            echo "<h5> No Reports Found </h5>";
                        }
                    ?>
              </tbody>
            </table>

            </form>
        </div>
      </div>
      </section>

 <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
 <?php include 'includes/modals/sdhcp_del_modal.php';?>
                  </form>
                </div>
              </div>
            </div>

  

<script src="assets/js/sidebar.js"></script>
<script src="assets/js/delete_modal.js"></script>
<script src="assets/js/search.js"></script>
  </body>
  </html>