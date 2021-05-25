<?php
  require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logo/img1.png"/>
    <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up - KATANA LIBRARY</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container-fluid">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="color: red;">KATANA LIBRARY </h2>
                        <h2 class="form-title">SIGN UP</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="fas fa-users material-icons-name"></i></label>
                                <input required type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope material-icons-name"></i></label>
                                <input required type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="fas fa-search-location material-icons-name"></i></label>
                                <input required type="text" name="address" id="name" placeholder="Your Address"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="fas fa-info-circle material-icons-name"></i></label>
                                <input required type="text" name="nic" id="name" placeholder="Your NIC Number"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="fas fa-phone material-icons-name"></i></label>
                                <input required type="text" name="phone" id="name" placeholder="Your Phone Number"/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="fas fa-users material-icons-name"></i></label>
                                <input required type="text" name="username" id="name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="fas fa-lock"></i></label>
                                <input required type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fas fa-lock"></i></label>
                                <input required type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="checkbox" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in Terms of service</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                        <?php

                        if (isset($_POST['signup'])) {

                            $name = $_REQUEST['name'];
                            $email = $_REQUEST['email'];
                            $address = $_REQUEST['address'];
                            $phone = $_REQUEST['phone'];
                            $nic = $_REQUEST['nic'];
                            $username = $_REQUEST['username'];
                            $psaaword = $_REQUEST['pass'];
                            $conpw = $_REQUEST['re_pass'];
                            $cdate = date("Y/m/d m:H:s");

                            $query2="SELECT * FROM member WHERE email='$email'";
                            $sql2=mysqli_query($con,$query2);

                            $query3="SELECT * FROM member WHERE phone='$phone'";
                            $sql3=mysqli_query($con,$query3);

                            $query4="SELECT * FROM member WHERE nic='$nic'";
                            $sql4=mysqli_query($con,$query4);

                            $query5="SELECT * FROM member WHERE username='$username'";
                            $sql5=mysqli_query($con,$query5);

                            if (empty($name)) {

                                echo "<script>alert(\"Plese Enter Your Name.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (empty($email)) {
                                
                                echo "<script>alert(\"Plese Enter Your Email.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (empty($address)) {
                                
                                echo "<script>alert(\"Plese Enter Your address.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (empty($username)) {
                                
                                echo "<script>alert(\"Plese Enter Your Username.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (empty($phone)) {
                                
                                echo "<script>alert(\"Plese Enter Your Phone Number.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (empty($nic)) {
                                
                                echo "<script>alert(\"Plese Enter Your NIC Number.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (empty($psaaword)) {
                                
                                echo "<script>alert(\"Plese Enter New Password.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (empty($conpw)) {
                                
                                echo "<script>alert(\"Plese confirm Your Password.\");window.location.href=\"signup.php\";</script>";
                            
                            }
                            elseif (!preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)) {

                                echo "<script>alert(\"Plese Enter Valid Phone Number.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif ($psaaword!=$conpw) {
                                
                                echo "<script>alert(\"Password is Not Match.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (mysqli_num_rows($sql2)>0) {
                            
                                echo "<script>alert(\"Email already Exsisted.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (mysqli_num_rows($sql5)>0) {
                            
                                echo "<script>alert(\"Username already Exsisted.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (mysqli_num_rows($sql3)>0) {
                                
                                echo "<script>alert(\"Phone Number already Exsisted.\");window.location.href=\"signup.php\";</script>";
                            }
                            elseif (mysqli_num_rows($sql4)>0) {
                            
                                echo "<script>alert(\"NIC Number already Exsisted.\");window.location.href=\"signup.php\";</script>";
                                
                            }
                            elseif (empty($_POST['checkbox'])) {
                                echo '<script>alert("Plese Accept the Terms and Conditions.");window.location.href="signup.php";</script>';
                            }
                            else {

                                $q1="INSERT INTO member(name,phone,address,nic,email,username,password,reg_date) values('$name','$phone','$address','$nic','$email','$username','".md5($psaaword)."','$cdate')";
                                $res1=mysqli_query($con,$q1);

                                if ( $res1){
                                    echo "<script>alert(\"congratulations! your registration was successful.\");window.location.href=\"index.php\";</script>";
                                }
                                else{
                                    echo "<script>alert(\"Ohh Snap! your registration Fail. Plese Try Again!.\");window.location.href=\"signup.php\";</script>";
                                }
                            }
                        } ?>
                    </div>
                    <div class="signup-image">
                        <figure><img width="100%" src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>