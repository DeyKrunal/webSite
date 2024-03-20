<?php
session_start();
require_once("connection.php");

if(isset($_REQUEST['submit'])){
$email=$_POST['email'];
 $str="SELECT fid from faculty_tbl where f_email='$email'";
$n=mysqli_num_rows( mysqli_query($con, $str));
if($n> 0){
    $_SESSION['email']=$email;

    header("location:mail.php");
}else{
    echo "<script>alert('User Not Registred.. Or Check Entered Email Id');</script>";
}

}
?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2023 15:37:41 GMT -->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Progress Pilot</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-blush authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">        
        <div class="navbar-translate n_logo">
            <h4>Welcome To Progress Pilot</h4>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <!-- <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Search Result</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Like us on Facebook" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-facebook"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Instagram" href="javascript:void(0);" target="_blank">                        
                        <i class="zmdi zmdi-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link btn btn-white btn-round" href="index.php">SIGN IN</a>
                </li>
            </ul>
        </div> -->
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="post" id="myForm">
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo.svg" alt="">
                        </div>
                        <h5>Forgot Password?</h5>
                        <span>Enter your e-mail address below to reset your password.</span>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <input type="submit" value="SUBMIT" id="submit" name="submit" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">
                        <!-- <h5><a href="javascript:void(0);" class="link">Need Help?</a></h5> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <!-- <nav>
                <ul>
                    <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                    <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                    <li><a href="javascript:void(0);">FAQ</a></li>
                </ul>
            </nav> -->
            <!-- <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                 <span>Designed by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a></span> 
            </div> -->
        </div>
    </footer>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});

// $(document).ready(function () {
//         $("#myForm").submit(function (event) {
//             // Prevent default form submission
//             event.preventDefault();

//             // Serialize form data
//             var formData = $(this).serialize();

//             // Submit form via AJAX
//             $.ajax({
//                 type: "POST",
//                 url: "mail.php", // Replace with your PHP script URL
//                 data: formData,
//                 success: function (response) {
//                     Handle successful form submission here
//                     alert("Form submitted successfully!");
//                     Close the modal after successful submission
//                     modal.style.display = "none";
//                     alert($otp);
//                    window.location.href="otp2.php";
                    
//                 //      window.location.href="otp.php?otp=";
//                 //    window.location.href = "location.php";
//                 },
//                 error: function (xhr, status, error) {
//                     // Handle errors here
//                     console.error(xhr.responseText);
//                     alert("An error occurred while submitting the form. Please try again.");
//                 }
//             });
//         });
//     });
</script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2023 15:37:41 GMT -->
</html>