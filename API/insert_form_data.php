<?php
// Database connection
include("connection.php");

$sql = "SELECT * FROM `details_status`";
$res = mysqli_query($con,$sql);
$x = mysqli_fetch_assoc($res);
echo json_encode($x);

// $apiLink = "https://yourdomain.com/api.php?group_name=$groupName&pass=$password&name1=$name1&rn1=$rollNo1&phno1=$cno1&email1=$email1&div1=$div1&name2=$name2&rn2=$rollNo2&phno2=$cno2&email2=$email2&div2=$div2&name3=$name3&rn3=$rollNo3&phno3=$cno3&email3=$email3&div3=$div3&name4=$name4&rn4=$rollNo4&phno4=$cno4&email4=$email4&div4=$div4";

// Access the data using the $_GET superglobal variable
$name1 = $rno1 = $cno1 = $email1 = $div1 = $name2 = $rno2 = $cno2 = $email2 = $div2 = $name3 = $rno3 = $cno3 = $email3 = $div3 = $name4 = $rno4 = $cno4 = $email4 = $div4 = "";

$name1 = $_GET['name1'];
$rollNo1 = $_GET['rn1'];
$cno1 = $_GET['phno1'];
$email1 = $_GET['email1'];
$div1 = $_GET['div1'];

$name2 = $_GET['name2'];
$rollNo2 = $_GET['rn2'];
$cno2 = $_GET['phno2'];
$email2 = $_GET['email2'];
$div2 = $_GET['div2'];

$name3 = $_GET['name3'];
$rollNo3 = $_GET['rn3'];
$cno3 = $_GET['phno3'];
$email3 = $_GET['email3'];
$div3 = $_GET['div3'];

$name4 = $_GET['name4'];
$rollNo4 = $_GET['rn4'];
$cno4 = $_GET['phno4'];
$email4 = $_GET['email4'];
$div4 = $_GET['div4'];
// ... and so on for the rest of the fields
$groupName = $_GET['group_name'];
$password = $_GET['pass'];
$con->begin_transaction();
$con->rollback();
// $hash = password_hash($password, PASSWORD_DEFAULT);

// echo $query = "INSERT INTO `group_stud_tbl`(`gsid`, `name1`, `rn1`, `div1`, `phno1`, `email1`,
// `name2`, `rn2`, `div2`, `phno2`,`email2`,
// `name3`, `rn3`, `div3`, `phno3`, `email3`,
// `name4`, `rn4`, `div4`, `phno4`, `email4`, `image`,
// `faculty_id`, `group_name`, `pass`, `title`, `status`)
// VALUES
// ('','$name1','$rollNo1','$div1','$cno1','$email1',

// '','$groupName','$password','','')";

?>