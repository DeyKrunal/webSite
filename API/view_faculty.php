<?php 
session_start();
include_once("connection.php");


$sql1 = "select * from faculty_tbl where fid = 1";
$res1 = mysqli_query($con,$sql1);
$arr1 = mysqli_fetch_assoc($res1);
print(json_encode($arr1));
// print(json_encode($arr1));

?>