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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <section id="" class="about mt-5">
      <?php 
            $cid = $_SESSION['member_id'];
            $collection="SELECT * FROM collection where member_id='".$cid."'";
            $collection1 = mysqli_query($con,$collection); 
            if(mysqli_fetch_assoc($collection1)){ ?>
              <div class="row">
                <div class="col-md-6 p-5">
                  <p class="text-danger">You Have 1 week time to take Your Books. After 1 week your Resevation will be cancel</p>
                  <button type="button" onclick="window.location.href ='setres.php' " class="btn btn-lg btn-primary">Get Resevation This Books</button>
                </div>
              </div>
            <?php }else{ ?>
              <div class="row">
                <div class="col-md-6 p-5">
                  <h1 class="text-danger">Your Collection is Empty</h1>
                </div>
              </div>
            <?php } ?>
        <div class="row">
              <?php 
            $cid = $_SESSION['member_id'];
            $carts="SELECT * FROM collection where member_id='".$cid."'";
            $carts1 = mysqli_query($con,$carts); 
            $total = 0;

            while ($row = mysqli_fetch_assoc($carts1)) { 
            $id = $row['book_id'];

              $food="SELECT * FROM books where book_id ='".$id."'";
              $query1 = mysqli_query($con,$food); 
              if($row1 = mysqli_fetch_assoc($query1)){

                $bookimage = $row1['image'];
                $bookimage_src = "admin/upload/book/".$bookimage; 


                ?>
              <div class="row mt-5 mb-5">
                <div class="col-md-1">
                </div>
                <div class="col-md-3">
                  <img style="width: 100%;" class="img-fluid" src="<?php echo $bookimage_src; ?>"  alt="Gallery Images">
                </div>
                <div class="col-md-3 p-5">
                  <h4><?php echo $row1['book_title']; ?></h4>
                </div>
                <div class="col-md-2 p-5">
                  <a href="remove.php?collect_id=<?php echo $row['collect_id']; ?>"><h4><i style="font-size: 30px" class="fas fa-times"></i></h4></a>
                </div>
              </div>
        <?php }  }?>
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