<?php
  require_once 'connection.php';
  require_once 'user.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KATANA LIBRARY</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="76x76" href="img/logo/img1.png">
  <link rel="icon" type="image/png" href="img/logo/img1.png">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


<!-- Boostrap Old Plugins -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header bg-white fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="img/logo/img1.png" alt="">
        <span style="color: black; font-family: 'Times New Roman', Times, serif;">KATANA LIBRARY</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Books</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Author</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <?php
                  $query = "SELECT * FROM book_cat";
                  $result = mysqli_query($con,$query);

                  while ($row = mysqli_fetch_assoc($result)) {
                    $get = $row['cat_name'];
                    $id = $row['cat_id'];

                      $bood="SELECT * FROM books where cat_id='".$id."'";
                      $query1 = mysqli_query($con,$bood);

                      if (mysqli_num_rows($query1) > 0) { ?>

                  <li><a href="more.php?cat_id=<?php  echo $row['cat_id']; ?>"><?php  echo $row['cat_name']; ?></a></li>
                    <?php } } ?>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <?php
                  $query = "SELECT * FROM author";
                  $result = mysqli_query($con,$query);

                  while($row = mysqli_fetch_assoc($result)) {
                    $get = $row['author_name'];
                    $id = $row['author_id'];

                    $bood="SELECT * FROM books where author_id='".$id."'";
                $query1 = mysqli_query($con,$bood);

                if (mysqli_num_rows($query1) > 0) { ?>

                  <li><a href="more.php?author_id=<?php  echo $row['author_id']; ?>"><?php  echo $row['author_name']; ?></a></li>
                   <?php } } ?>
                </ul>
              </li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="myaccount.php">My Account</a></li>
          <li><a class="nav-link scrollto" href="myres.php">My Resevations</a></li>
          <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
          <li><a class="getstarted bg-info" href="collection.php">Collection</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <section id="" class="about mt-5">
          <div class="row">
            <div class="col-md-8 p-5 col-md-4 text-left">
                  <?php 
                  $viewquery = " SELECT * FROM member where member_id = '".$_SESSION['member_id']."'";
                  $viewresult = mysqli_query($con,$viewquery);
                  $row = mysqli_fetch_assoc($viewresult); ?>


                  <h1 class="text-info text-uppercase"><b>My Member Details</b></h1><br><br>
                  <!-- <div class="dropdown-divider"></div> -->
                  <div class="col-md-10">
                      <div class="row ml-3 mt-3">  
                         <h2 style="color: black;">Name : <?php echo $row['name']; ?></h2>
                      </div>
                      <div class="row ml-3 mt-3">
                         <h2 style="color: black;">Address : <?php echo $row['address']; ?></h2>
                      </div>
                      <div class="row ml-3 mt-3">
                         <h2 style="color: black;">NIC Number : <?php echo $row['nic']; ?></h2>
                      </div>
                      <div class="row ml-3 mt-3">
                         <h2 style="color: black;">Phone Number : <?php echo $row['phone']; ?></h2>
                      </div>
                      <div class="row ml-3 mt-3">
                         <h2 style="color: black;">Email Address : <?php echo $row['email']; ?></h2>
                      </div>
                  </div>

              </div>
                  <div class="col-md-4">
                      <button type="button" name="submit" class="btn col-md-10 p-4 mt-5  btn-info" data-toggle="modal" data-target="#editprofile" style="border-radius:20px;">Edit Profile</button>
                      <button type="button" name="submit" class="btn col-md-10 p-4 mt-5  btn-info" data-toggle="modal" data-target="#exampleModal" style="border-radius:20px;">Change Password</button>
                      <button type="button" name="submit" class="btn col-md-10 p-4 mt-5  btn-info" data-toggle="modal" data-target="#exampleModalemail" style="border-radius:20px;">Change Email</button>
                      <button type="button" name="submit" class="btn col-md-10 p-4 mt-5  btn-info" data-toggle="modal" data-target="#exampleModalUsername" style="border-radius:20px;">Change Username</button>
                      <button type="button" name="submit" class="btn col-md-10 p-4 mt-5  btn-danger" onclick="window.location.href='member_delete.php?member_id=<?php echo $row['member_id']; ?>'" style="border-radius:20px;">Delete Account</button>
                  </div>
          </div>

           <!-- Modal Edit Profile-->
              <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Profile Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                      <form action="" method="POST"> 
                    <div class="modal-body">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <input type="text" name="name" id="name" class="form-control input-sm chat-input" placeholder="Your Name"/>
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <input type="text" name="phone" id="phone" class="form-control input-sm chat-input" placeholder="Phone Number"/>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <input type="text" name="address" id="address" class="form-control input-sm chat-input" placeholder="Your Address"/>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <input type="text" name="nic" id="nic" class="form-control input-sm chat-input" placeholder="Your NIC Number"/>
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" name="pass_detail"  class="btn btn-primary">Save changes</button>
                    </div>
                      <?php
                  if(isset($_POST['pass_detail']))
                  {


                      $name = $_REQUEST['name'];
                      $phone = $_REQUEST['phone'];
                      $address = $_REQUEST['address'];
                      $nic = $_REQUEST['nic'];
                      $geID = $_SESSION['member_id'];
                      $cdate = date("Y/m/d m:H:s");


                        
                                  if(!empty($name))
                                    {
                                      $query3="UPDATE member SET name='$name' WHERE member_id='".$geID."'";
                                      $sql3=mysqli_query($con,$query3);
                                      echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                                    }

                                    if(!empty($address))
                                    {
                                      $query3="UPDATE member SET address='$address' WHERE member_id='".$geID."'";
                                      $sql3=mysqli_query($con,$query3);
                                      echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                                    }

                                    if(!empty($phone))
                                    {
                                      if(preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                          $query3="UPDATE member SET phone='$phone' WHERE member_id='".$geID."'";
                                          $sql3=mysqli_query($con,$query3);
                                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";

                                        }else{echo "Enter Valid Phone Number";}
                                    }

                                    if(!empty($nic))
                                    {
                                      $query3="UPDATE member SET nic='$nic' WHERE member_id='".$geID."'";
                                      $sql3=mysqli_query($con,$query3);
                                      echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                                    }


                  }
              ?>
                  </form>
                  </div>
                </div>
              </div>

          <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <form action="" method="POST"> 
                  <div class="modal-body">

                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <input type="password" name="cpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Password"/>
                          </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="password" name="npass" id="userPassword" class="form-control input-sm chat-input" placeholder="New Password"/>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="password" name="conpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Confirm Password"/>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="pass_change"  class="btn btn-primary">Save changes</button>
                  </div>
                   <?php
                    if(isset($_POST['pass_change']))
                    {


                    $currentpass=stripslashes($_REQUEST['cpass']);
                    $newpass=stripslashes($_REQUEST['npass']);
                    $confpass=stripslashes($_REQUEST['conpass']);
                    $g = $_SESSION['member_id'];

                    if(!empty($currentpass)){
                      if(!empty($newpass)){
                        if(!empty($confpass)){

                          $loginsql="SELECT * FROM member WHERE password='".md5($currentpass)."'";
                          $result=mysqli_query($con,$loginsql) or mysqli_errno();
                          $rows=mysqli_fetch_assoc($result);

                          $query5="SELECT password FROM member WHERE member_id='".$g."'";
                          $sql5=mysqli_query($con,$query5);
                          $row=mysqli_fetch_assoc($sql5);

                          if(isset($rows['password'])==isset($row['password']))
                          {
                            if($newpass==$confpass){
                              $query3="SELECT * FROM member WHERE password='$newpass'";
                              $sql3=mysqli_query($con,$query3);

                              if(mysqli_num_rows($sql3)>0)
                              {
                                echo "password already Exsisted";
                              }
                              else
                              {
                                  $query2="UPDATE member SET password='".md5($newpass)."' WHERE member_id='".$g."'";
                                  $sql2=mysqli_query($con,$query2);
                                  echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='logout.php'; </script>"; 
                              }

                            }else{ echo "<script>alert(\"Password is Not Match\");</script>";} 
                          }else{ echo "<script>alert(\"Current Password is Wrong\");</script>";} 
                        }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";} 
                      }else{ echo "<script>alert(\"Enter New Password\");</script>";} 
                    }else{ echo "<script>alert(\"Enter Current Password\");</script>";} 

                    }
                ?>
                </form>
                </div>
              </div>
            </div>
                 <!-- Modal -->
            <div class="modal fade" id="exampleModalemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <form action="" method="POST"> 
                  <div class="modal-body">

                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <input type="email" name="cemail" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Email"/>
                          </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="email" name="nemail" id="userPassword" class="form-control input-sm chat-input" placeholder="New Email"/>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit"  class="btn btn-primary">Save changes</button>
                  </div>
                  <?php
          if(isset($_POST['submit']))
          {

          $currentemail=stripslashes($_REQUEST['cemail']);
          $newemail=stripslashes($_REQUEST['nemail']);
          $g = $_SESSION['member_id'];

          if(!empty($currentemail)){
            if(!empty($newemail)){
              if(filter_var($newemail, FILTER_VALIDATE_EMAIL)){

                $loginsql="SELECT * FROM member WHERE email='".$currentemail."'";
                $result=mysqli_query($con,$loginsql) or mysqli_errno();
                $rows=mysqli_fetch_assoc($result);

                $query5="SELECT email FROM member WHERE member_id='".$g."'";
                $sql5=mysqli_query($con,$query5);
                $row=mysqli_fetch_assoc($sql5);

                if(isset($rows['email'])==isset($row['email']))
                {
                    $query3="SELECT * FROM member WHERE email='$newemail'";
                    $sql3=mysqli_query($con,$query3);

                    if(mysqli_num_rows($sql3)>0)
                    {
                      echo "<script>alert(\"Email already Exsisted\");</script>";
                    }
                    else
                    {
                        $query2="UPDATE member SET email='".$newemail."' WHERE email='".$currentemail."'";
                        $sql2=mysqli_query($con,$query2);
                        echo "<script type=\"text/javascript\"> alert(\"Email Update Successfull\"); window.location.href='myaccount.php'; </script>"; 
                    }
                }else{ echo "<script>alert(\"Current Email is Wrong\");</script>";} 
            
              }else{ echo "<script>alert(\"Enter Valid Email\");</script>";} 
            }else{ echo "<script>alert(\"Enter New Email\");</script>";} 
          }else{ echo "<script>alert(\"Enter Current Email\");</script>";} 

          }
      ?>
            </form>
            </div>
          </div>
        </div>

             <!-- Modal -->
            <div class="modal fade" id="exampleModalUsername" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Username</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <form action="" method="POST"> 
                  <div class="modal-body">

                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <input type="text" name="cuname" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Username"/>
                          </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="text" name="nuname" id="userPassword" class="form-control input-sm chat-input" placeholder="New Username"/>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit_uname"  class="btn btn-primary">Save changes</button>
                  </div>
                    <?php
                        if(isset($_POST['submit_uname']))
                        {

                        $currentuname=stripslashes($_REQUEST['cuname']);
                        $newuname=stripslashes($_REQUEST['nuname']);
                        $g = $_SESSION['member_id'];

                        if(!empty($currentuname)){
                          if(!empty($newuname)){

                              $loginsql="SELECT * FROM member WHERE username='".$currentuname."'";
                              $result=mysqli_query($con,$loginsql) or mysqli_errno();
                              $rows=mysqli_fetch_assoc($result);

                              $query5="SELECT username FROM member WHERE member_id='".$g."'";
                              $sql5=mysqli_query($con,$query5);
                              $row=mysqli_fetch_assoc($sql5);

                              if(isset($rows['username'])==isset($row['username']))
                              {
                                  $query3="SELECT * FROM member WHERE username='$newuname'";
                                  $sql3=mysqli_query($con,$query3);

                                  if(mysqli_num_rows($sql3)>0)
                                  {
                                    echo "<script>alert(\"Username already Exsisted\");</script>";
                                  }
                                  else
                                  {
                                      $query2="UPDATE member SET username='".$newuname."' WHERE username='".$currentuname."'";
                                      $sql2=mysqli_query($con,$query2);
                                      echo "<script type=\"text/javascript\"> alert(\"Username Update Successfull\"); window.location.href='logout.php'; </script>"; 
                                  }
                              }else{ echo "<script>alert(\"Current Username is Wrong\");</script>";} 
                          
                          }else{ echo "<script>alert(\"Enter New Username\");</script>";} 
                        }else{ echo "<script>alert(\"Enter Current Username\");</script>";} 

                        }
                    ?>
            </form>
            </div>
          </div>
        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">
            <?php $viewquery1 = "SELECT * FROM librery";
            $viewresult1 = mysqli_query($con,$viewquery1);
            $row7 = mysqli_fetch_assoc($viewresult1);  ?>

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p><?php  echo $row7['address']; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p><?php  echo $row7['phone']; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p><?php  echo $row7['email']; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p><?php  echo $row7['opening']; ?></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="" method="POST">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary" name="msg_sent" >Send Message</button>
                </div>

              </div>
            </form>
              <?php 

              if(isset($_POST['msg_sent'])){

                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $subject = $_REQUEST['subject'];
                    $message = $_REQUEST['message'];
                    $cdate = date("Y/m/d m:H:s");


                    if(!empty($name)){
                      if(!empty($email)){
                        if(!empty($subject)){
                          if(!empty($message)){

                                        

                                $q1="INSERT INTO message(name,email,subject,message,trn_date) values('$name','$email','$subject','$message','$cdate')";
                                      $res1=mysqli_query($con,$q1);
                                      if ( $res1) {

                                           echo '<script>alert("Massage Save Success.");
                                           window.location.href="index.php";</script>';
                                          
                                      }else{
                                        echo "<script>alert(\"Massege Sent not Success\");</script>";
                                      }
                                          
                                              
                                            

                            }else {echo "<script>alert(\"Enter Message\");</script>";}
                          }else {echo "<script>alert(\"Enter Subject\");</script>";}
                      }else{ echo "<script>alert(\"Enter Email\");</script>";}
                    }else{ echo "<script>alert(\"Enter Your Name\");</script>";} 
                }echo '</form></div>'; //Register Form Validation


             ?>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container-fluid">
      <div class="copyright">2021
        &copy; Copyright <strong><span>KatanaLibrary</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by : SILVA M.S.D. SEU/IS/16/MIT/103
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>