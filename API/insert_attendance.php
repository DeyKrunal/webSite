<?php 
include_once("connection.php");

if(isset($_GET['group_id'])){$gid = $_GET['group_id'];}
$sql = "INSERT INTO `attandence_tbl`(`aid`, `gid`) VALUES ('','$gid')";

if($res = mysqli_query($con,$sql)){
    echo json_encode(array('msg'=>'success'));
}else{
    echo json_encode(array('msg'=>'Error in Inserting'));
}


?>