<?php

include_once("connection.php");

if(isset($_GET['gsid'])){$gsid = $_GET['gsid'];}
if(isset($_GET['name1'])){$name1 = $_GET['name1'];}
if(isset($_GET['rn1'])){$rn1 = $_GET['rn1'];}
if(isset($_GET['div1'])){$div1 = $_GET['div1'];}
if(isset($_GET['phno1'])){$phno1 = $_GET['phno1'];}
if(isset($_GET['email1'])){$email1 = $_GET['email1'];}

if(isset($_GET['name2'])){$name2 = $_GET['name2'];}
if(isset($_GET['rn2'])){$rn2 = $_GET['rn2'];}
if(isset($_GET['div2'])){$div2 = $_GET['div2'];}
if(isset($_GET['phno2'])){$phno2 = $_GET['phno2'];}
if(isset($_GET['email2'])){$email2 = $_GET['email2'];}

if(isset($_GET['name3'])){$name3 = $_GET['name3'];}
if(isset($_GET['rn3'])){$rn3 = $_GET['rn3'];}
if(isset($_GET['div3'])){$div3 = $_GET['div3'];}
if(isset($_GET['phno3'])){$phno3 = $_GET['phno3'];}
if(isset($_GET['email3'])){$email3 = $_GET['email3'];}

if(isset($_GET['name4'])){$name4 = $_GET['name4'];}
if(isset($_GET['rn4'])){$rn4 = $_GET['rn4'];}
if(isset($_GET['div4'])){$div4 = $_GET['div4'];}
if(isset($_GET['phno4'])){$phno4 = $_GET['phno4'];}
if(isset($_GET['email4'])){$email4 = $_GET['email4'];}


if(isset($_GET['image'])){$image = $_GET['image'];}
if(isset($_GET['faculty_id'])){$faculty_id = $_GET['faculty_id'];}
if(isset($_GET['group_name'])){$group_name = $_GET['group_name'];}
if(isset($_GET['pass'])){$pass = $_GET['pass'];}
if(isset($_GET['status'])){$status = $_GET['status'];}

$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);


echo $sql = "UPDATE `group_stud_tbl` SET name1='$name1', rn1='$rn1', div1='$div1', phno1='$phno1', email1='$email1',
 name2='$name2', rn2='$rn2', div2='$div2', phno2='$phno2', email2='$email2', 
 name3='$name3', rn3='$rn3', div3='$div3', phno3='$phno3', email3='$email3', 
 name4='$name4', rn4='$rn4', div4='$div4', phno4='$phno4', email4='$email4', 
 image='$image', faculty_id='$faculty_id', group_name='$group_name', pass='$hashedPassword', status='$status' WHERE gsid=$gsid";

if (mysqli_query($con, $sql)) {
    echo json_encode(array("message" => "Record updated successfully"));
} else {
    echo json_encode(array("message" => "Error updating record: " . mysqli_error($con)));
}

mysqli_close($con);

?>