<?php

if(!empty($_SESSION["id"])){
  header("Location: user_dash.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
  
  $row = mysqli_fetch_assoc($result);

  
  if(mysqli_num_rows($result) > 0){

    
  
   if($password == $row['password']){
      if($row['type'] == 'admin'){
        $_SESSION["login"] = true;
        $_SESSION['admin_name'] = $row['id'];
        header('location:admin_loc_rep.php');
      }
      else{
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
        header("Location: user_dash.php");
      
      }
    }
    
    else{
      $_SESSION['warning_message'] = "Wrong Password";
    }
  }
  else{
    $_SESSION['warning_message'] = "User not registered";
  }
  
}

?>