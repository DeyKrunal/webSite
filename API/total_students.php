<?php
include_once("connection.php");

$sql = "SELECT count(name1) as n1,count(name2) as n2,count(name3) as n3,count(name4) as n4 FROM `group_stud_tbl` WHERE faculty_id = 2";
$res = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($res)){
    $x = $row["n1"] + $row["n2"] + $row["n3"] + $row["n4"];
}
$arr = ["gcount"=>"$x"];
echo json_encode($arr);

?>