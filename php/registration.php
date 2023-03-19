<?php
if(!empty($_SESSION["id"])){
    header("Location: login.php");
  }
  
  
  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $schoolId = $_POST["schoolId"];
    $status = $_POST["status"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
      echo
      "<script> alert('Email Has Already Taken'); </script>";
    }
    else{
      if($password == $confirmpassword){
        $query = "INSERT INTO tb_user VALUES('','$name', '$schoolId','$status','$email','$password')";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Registration Successful'); </script>";
        header("Location: ../login.php");
      }
      else{
        echo
        "<script> alert('Password Does Not Match'); </script>";
      }
    }
  }
?>