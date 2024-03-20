<?php 
include("connection.php");
$id = $_POST['subid'];

$sql = "DELETE FROM `sub_schedule_tbl` WHERE `subid`= $id ";
$res = mysqli_query($con,$sql);
if($res){
    echo json_encode(array("success"=>"1"));
}else{
    echo json_encode(array("success"=>"0"));
}

?>