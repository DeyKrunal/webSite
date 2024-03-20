<?php

include_once("connection.php");

$sql = "Select * from group_stud_tbl where faculty_id = 2";
$res = mysqli_query($con,$sql);
$count = mysqli_num_rows($res);
$arr = ["count"=>"$count"];
echo json_encode($arr);
?>