<?php

require_once("connection.php");

$gid = $_GET['g_id'];
$gimg = $_GET['img'];
$gtitle = $_GET['title'];
$back = $_GET['back'];
$front = $_GET['front'];
$database = $_GET['data'];

// $sql = "SELECT * FROM `pro_profile_tbl` WHERE `g_id` = '$gid'";
// $res = mysqli_query($con,$sql);
$query = "UPDATE `pro_profile_tbl` SET `g_img`='$gimg',`g_title`='$gtitle',
`back_end`='$back',`front_end`='$front',`database_name`='$database' WHERE `g_id`= '$gid' ";

$res = mysqli_query($con,$query);
if($res){
    echo json_encode(array('result'=>1));
}else{
    echo json_encode(array('result'=>0));
}

?>