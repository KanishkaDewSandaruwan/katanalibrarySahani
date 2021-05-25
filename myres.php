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
        <div class="row ">
  <div class="col-md-12">
    <?php   
                  $getID = $_SESSION['member_id'];
                  $count = 0;

                  $viewquerys = " SELECT * FROM member where member_id = '".$getID."'";
                  $viewresults = mysqli_query($con,$viewquerys);
                  $row3 = mysqli_fetch_assoc($viewresults);
                  $pid = $row3['member_id'];
                  $cdate = date("Y-m-d");
                  $newdate = "";
                  
                  $viewquery = " SELECT * FROM getresevation where member_id='".$pid."'";
                  $viewresult = mysqli_query($con,$viewquery);

                  

           ?>
        
            <?php 
                  while($row1 = mysqli_fetch_assoc($viewresult)) { ?>

                  <div class="row" style="padding: 2%;  margin: 1%; color: #00394e; background-color: #f9f6f7">

                    <div class="dropdown-divider"></div>
                    <div class="col-sm-3 justify-content-left">
                      <?php   
                        $dlist = $row1['book_ids'];

                         $stri = explode(',', $dlist);
                         $count = 0;
                         // $arrlength=strlen($stri);


                      foreach ($stri as $s){

                          $getDetail_Query = "SELECT * FROM books where book_id ='".$s."' ";
                          $getResult = mysqli_query($con,$getDetail_Query);

                          $getDetail_Query1 = "SELECT * FROM books_backup where book_id ='".$s."' ";
                          $getResult1 = mysqli_query($con,$getDetail_Query1);

                          if($row4 = mysqli_fetch_assoc($getResult)){ 
                          $image = $row4['image'];
                          $image_src = "admin/upload/book/".$image;

                          ?>
                          <div class="row">
                            <div class="col-md-6">
                              <p><?php echo $row4['book_title']; ?></p>
                            </div>
                            <div class="col-md-6 mt-3">
                              <img width="100%" src="<?php echo $image_src; ?>" >
                            </div>
                          </div>

                        <?php }else if($row5 = mysqli_fetch_assoc($getResult1)){
                          $image1 = $row5['image'];
                          $image_src1 = "admin/upload/book/".$image1;

                          ?>
                          <div class="row">
                            <div class="col-md-6">
                              <p><?php echo $row5['book_title']; ?></p>
                            </div>
                            <div class="col-md-6 mt-3">
                              <img width="100%" src="<?php echo $image_src1; ?>" >
                            </div>
                            
                          </div>
                        <?php } ?>
                           
                      <?php   $count++; }?>
                    </div>

                    <div class="col-sm-1">
                      <p style="color: green">Accepting Resevation</p>
                      <p><?php echo $row1['accept']; ?></p>
                    </div>
                    <div class="col-sm-1">
                      <p style="color: green">Ordered Date</p>
                      <p><?php echo $row1['trn_date']; ?></p>
                    </div>
                    <div class="col-sm-1">
                      <p style="color: green">Last Date to be obtained</p>
                      <p><?php echo $row1['resrve_date']; ?></p>
                    </div>
                    <div class="col-sm-1">
                      <p style="color: green">Return Date</p>
                      <p><?php echo $row1['return_date']; ?></p>
                    </div>
                    <div class="col-sm-1">
                    <?php 
                      $return = $row1['return_date'];
                      if (new DateTime() > new DateTime($return)) { ?>
                      <p style="color: red">Number of Days late</p>
                        <p><?php 
                        $diff = abs(strtotime($cdate) - strtotime($return));
                        $years = floor($diff / (365*60*60*24));
                        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                        echo $days; ?> 
                      </p>
                      <?php } ?>
                    </div>
                    <div class="col-sm-2">
                      <?php 
                      $return = $row1['return_date'];
                      if (new DateTime() > new DateTime($return)) { ?>
                      <p style="color: red">The amount of your fine</p>
                      <p>Rs. <?php 
                      $return = $row1['return_date'];

                      $diff = abs(strtotime($cdate) - strtotime($return));
                      $years = floor($diff / (365*60*60*24));
                      $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                      $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                      $amount = $days * 10;
                      echo $amount;?> </p>
                      <?php } ?>
                    </div>
                    <div class="col-sm-1">
                      <div class="dropdown">

                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="manageRes.php?cancel=<?php echo $row1['res_id']; ?>&date=<?php echo $row1['return_date']; ?>">Cancel Resevation</a>
                            </div>
                          </div>

                  </div>
                  </div>
                  <?php  $count++;
                    
                  
                }
             ?>

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