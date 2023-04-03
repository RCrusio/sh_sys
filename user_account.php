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
    <title>User Account</title>
    <link rel="stylesheet" href="assets/css/container.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/table.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'includes/user_sidebar.php';?>
  <section class="home-section">
      <div class="container_form">
      <H1>Personal Information</H1>
      <div class="container"> 
      <?php include 'php/message.php';?>
      <?php
                if(isset($_SESSION['id']))
                {
                    $id = mysqli_real_escape_string($conn, $_SESSION['id']);
                    $query = "SELECT * FROM tb_user WHERE id='$id' ";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $row = mysqli_fetch_array($query_run);
              ?>
      <form action="php/update.php" method="post">  
      <input type="hidden" name="id" value="<?= $row['id']; ?>"  />
        
      <div class="row mb-4"style="padding:20px 0px">
      
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Email</label>
                <input type="text" name="email" id="form6Example1" class="form-control" value="<?= $row['email']; ?>" require/>
                
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
              <label class="form-label" for="form6Example2">Password</label>
                <input type="text" id="form6Example2" name="password" value="<?= $row['password']; ?>"  class="form-control" require/>

              </div>
            </div>
          </div>
          
        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4" 
        data-toggle="modal"  data-target="#exampleModal">Update</button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure you update your account?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="acc_update" class="btn btn-primary">Update</button>
              </div>
            </div>
          </div>
        </div>
      </form>

        <?php
        }
        else
        {
            echo "<h4>No Such Id Found</h4>";
        }
        }
        ?>
      </div>
      </div>
      </section>

      
      <script src="assets/js/sidebar.js"></script>
</body>
</html>