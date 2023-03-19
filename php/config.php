<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "sc_sys");

if(!$conn){
    die('Connection Failed'. mysqli_connect_error());
}
?>