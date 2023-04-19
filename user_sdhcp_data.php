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

  <?php include 'includes/user_sidebar.php'; ?>
  <section class="home-section">
    <div class="container_form">
      <?php
      if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $query = "SELECT * FROM tb_sdhcp WHERE rep_id='$id' ";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
          $row = mysqli_fetch_array($query_run);
      ?>
          <H1><a href="user_sdhcp.php"><i class='bx bx-left-arrow-alt'></i></a>SDHCP Data <?= $row['rep_title']; ?> </H1>

          <div class="container">
            <?php include 'php/message.php'; ?>
            <div class="row mb-4 md-3">
              <div class="hstack gap-4">

                <div class="input-group rounded ">
                  <input type="text" class="form-control rounded" id="search_input" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                  <span class="input-group-text border-0" id="search-addon">
                    <i class='bx bx-search-alt'></i>
                  </span>
                </div>

                <form action="php/code.php" method="post">
                  <input type="hidden" name="rep_id" value="<?= $row['rep_id']; ?>">

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                          Are you sure you want to clear <strong>"<?= $row['rep_title']; ?>" </strong> data?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" name="clear" class="btn btn-danger">Clear Data</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>



                <form action="php/export.php" method="post">
                  <input type="hidden" name="rep_id" value="<?= $row['rep_id']; ?>">
                  <button type="submit" name="export" class="btn btn-success ms-auto" role="button">
                    Export Data
                  </button>
                </form>
              </div>

            </div>



        <?php
        }
      }
        ?>


        <table class="_table text-center">
          <thead>
            <tr>
            <tr>
              <th rowspan="2">Grade Level
              <th rowspan="2">Health Task
              <th colspan="2">Consultations Given</th>

              <th colspan="2">Services Delivered</th>
              <th rowspan="2">Referal</th>
              <th rowspan="2">Subtotal</th>
              <th rowspan="2" width="50px">
                Edit Data
              </th>

            <tr>
              <td>Online</td>
              <td>Face to Face</td>
              <td>Prescription</td>
              <td>Treatement</td>
            </tr>

            </tr>
          </thead>
          <?php

          $query = "SELECT * FROM tb_sdhcp_data WHERE rep_id='$id' ";
          $query_run = mysqli_query($conn, $query);

          if (mysqli_num_rows($query_run) > 0) {
            $row = mysqli_fetch_array($query_run);
            foreach ($query_run as $row) {
          ?>
              <tbody id="table_body">

                <tr>
                  <td hidden><?php echo $row['data_id']; ?></td>
                  <td><?php echo $row['g_level']; ?></td>
                  <td><?php echo $row['h_task']; ?></td>
                  <td><?php echo $row['online']; ?></td>
                  <td><?php echo $row['f2f']; ?></td>
                  <td><?php echo $row['prescription']; ?></td>
                  <td><?php echo $row['treatment']; ?></td>
                  <td><?php echo $row['referal']; ?></td>
                  <td><?php echo $row['subtotal']; ?></td>

                  <td>

                    <div class="action_container">

                      <a href="user_sdhcp_edit_data.php?id=<?= $row['data_id']; ?>" class="btn btn-primary" role="button" style="margin-right:3px">
                        Edit
                      </a>

                    </div>
                  </td>

                </tr>

              <?php
            }
          } else {
              ?>
              <a class="btn btn-primary ms-auto mb-3" role="button" href="user_sdhcp_add_data.php?id=<?= $row['rep_id']; ?>">
                Add Report
              </a>
              <h5 class="text-center text-secondary"> No Data Submitted Yet </h5>

            <?php
          }
            ?>

              </tbody>

              <tr>
                <td>Grand Total:</td>
                <td></td>

                <!--Online Total-------->
                <?php
                $result = mysqli_query($conn, "SELECT sum(online) FROM tb_sdhcp_data WHERE rep_id='$id' ");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <td><?php echo $row['sum(online)']; ?></td>
                <?php
                }
                ?>

                <!--Face-To-Face Total-------->
                <?php
                $result = mysqli_query($conn, "SELECT sum(f2f) FROM tb_sdhcp_data WHERE rep_id='$id' ");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <td><?php echo $row['sum(f2f)']; ?></td>
                <?php
                }
                ?>

                <!--Prescription Total-------->
                <?php
                $result = mysqli_query($conn, "SELECT sum(prescription) FROM tb_sdhcp_data WHERE rep_id='$id' ");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <td><?php echo $row['sum(prescription)']; ?></td>
                <?php
                }
                ?>

                <!--Prescription Total-------->
                <?php
                $result = mysqli_query($conn, "SELECT sum(treatment) FROM tb_sdhcp_data WHERE rep_id='$id' ");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <td><?php echo $row['sum(treatment)']; ?></td>
                <?php
                }
                ?>

                <!--Prescription Total-------->


                <td></td>

                <!--Prescription Total-------->
                <?php
                $result = mysqli_query($conn, "SELECT sum(subtotal) FROM tb_sdhcp_data WHERE rep_id='$id' ");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <td><?php echo $row['sum(subtotal)']; ?></td>
                <?php
                }
                ?>
                <td></td>
              </tr>


        </table>

        </form>

          </div>
    </div>
  </section>

  <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
  <?php include 'includes/modals/inv_del_modal.php'; ?>
  </form>
  </div>
  </div>
  </div>



  <script src="assets/js/sidebar.js"></script>
  <script src="assets/js/delete_modal.js"></script>
  <script src="assets/js/search.js"></script>
</body>

</html>