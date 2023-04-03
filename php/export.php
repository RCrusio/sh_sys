<?php
require 'config.php';

if(isset($_POST['export'])){

$rep_id = $_POST['rep_id'];
$filename = 'SDHCP Report.csv';
$query = "SELECT * FROM tb_sdhcp_data WHERE rep_id='$rep_id'";
$result = mysqli_query($conn, $query);

$array = array();

$file = fopen($filename,'w');
$array = array("Grade Level","Health Task","Online","Face-To-Face","Prescription","treatment","referal","Subtotal");
fputcsv($file, $array);

while ($row = mysqli_fetch_array($result)){
    $g_level = $row['g_level'];
    $h_task = $row['h_task'];
    $online = $row['online'];
    $f2f = $row['f2f'];
    $prescription = $row['prescription'];
    $treatment = $row['treatment'];
    $referal = $row['referal'];
    $subtotal = $row['subtotal'];
    
    $array = array($g_level,$h_task,$online,$f2f,$prescription,$treatment,$referal,$subtotal);
    fputcsv($file, $array);
}

fclose($file);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$filename");
header("Content-Type: application/csv;");
readfile($filename);
unlink($filename);
exit();
}

?>