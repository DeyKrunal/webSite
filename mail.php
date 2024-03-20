<?php
session_start();
if ($_SESSION['email'] == "") {
    header("location:index.php");
} else {
    require_once("connection.php");
session_start();
$my_email=$_SESSION['email'];
// echo $my_email."1";
require_once("connection.php");
$sql="select fid from faculty_tbl where f_email='$my_email'";
$n = mysqli_num_rows(mysqli_query($con,$sql));
// echo $n;

if($n>0){
   $url= "PHPMailer/class.smtp.php";
include("$url"); 
// optional, gets called from within class.phpmailer.php if not 
$url2="PHPMailer/class.phpmailer.php";
require_once("$url2");

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
// $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username   = "projectmanage24@gmail.com";  // GMAIL username
$mail->Password   = "mscu ctiw xawz iwmz";            // GMAIL password

$mail->SetFrom("projectmanage24@gmail.com");
$mail->Subject = "Reset Password";
$email=$my_email;

$permitted_chars = '0123456789';
$otp=substr(str_shuffle($permitted_chars), 0, 5);
$_SESSION['otp']=$otp;
// $_SESSION['email']=$email;

//http://127.0.0.1/hope/CodeIgniter-3.1.6//index.php/login_con/resetpass
$mail->Body = "Your One Time Password is $otp";
$mail->AddAddress($email);
 if(!$mail->Send())
    {
   echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
		
   echo "Message has been sent $otp";
    }
    header("location:otp2.php");

}else{
   echo "<script>alert('User not registered..'); window.location.href = 'forgot-password.php';</script>";
  // echo "<script>alert('User not registered..');</script>";
   // sleep(10);
  // header("location:forgot-password.php");
}

	
  }  ?>