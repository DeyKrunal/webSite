<?php 
session_start();
include("connection.php");

$sql = "SELECT * FROM `group_stud_tbl` where group_name = 'group01'";
$res = mysqli_query($con,$sql);
// $arr = mysqli_fetch_assoc($res);
$arr = array();
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        array_push($arr,$row);
    }
}
// $arr = mysqli_fetch_assoc($res);
// $_SESSION['faculty_id'] = $arr['faculty_id'];
header('Content-Type: application/json');
echo json_encode($arr[0]);

?>