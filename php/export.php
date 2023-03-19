<?php
require 'config.php';

$filename = 'tree_locator_reports.csv';
$query = "SELECT * FROM tree_locate";
$result = mysqli_query($conn, $query);

$array = array();

$file = fopen($filename,'w');
$array = array("ID.","School","Submitor","Location","Tree No.","Tree Name","Type","Status","Planted during the icon of forrest (y/n)","Longitude","Latitude");
fputcsv($file, $array);

while ($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $school = $row['school'];
    $user = $row['user'];
    $location = $row['location'];
    $tree_num = $row['tree_num'];
    $tree_name = $row['tree_name'];
    $type = $row['type'];
    $status = $row['status'];
    $planted = $row['planted'];
    $longitude = $row['longitude'];
    $latitude = $row['latitude'];

    $array = array($id,$school,$user,$location,$tree_num,$tree_name,$type,$status,$planted,$longitude,$latitude);
    fputcsv($file, $array);
}

fclose($file);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$filename");
header("Content-Type: application/csv;");
readfile($filename);
unlink($filename);
exit();


?>