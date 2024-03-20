<?php
require_once("connection.php");

$eid=$_GET['del'];
$res=mysqli_query($con,"select f_img from faculty_tbl where fid='$eid'");
$row=mysqli_fetch_array($res);
mysqli_query($con,"delete from faculty_tbl where fid='$eid'");
if(file_exists("upload/".$row[0])) {
    unlink("upload/".$row[0]);
}
header("location:faculty.php");

?>