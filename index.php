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
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <?php $viewquery1 = "SELECT * FROM librery";
            $viewresult1 = mysqli_query($con,$viewquery1);
            $row6 = mysqli_fetch_assoc($viewresult1); 

            $main_image = $row6['main_image'];
            $image_src1 = "upload/librery/".$main_image;
            ?>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up"><?php echo $row6['main_title']; ?></h1>
          <h2 data-aos="fade-up" data-aos-delay="400"><?php echo $row6['main_description']; ?></h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="more.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Resevation</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?php echo $image_src1; ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container-fluid" data-aos="fade-up">
          <?php 
              $bookcat="SELECT * FROM book_cat";
              $query2 = mysqli_query($con,$bookcat); 
              $counts = 0;
              while ($row2 = mysqli_fetch_assoc($query2)) { 
                $id = $row2['cat_id'];
                $food1="SELECT * FROM books where cat_id='".$id."'";
                $query3 = mysqli_query($con,$food1); 
                if (mysqli_fetch_assoc($query3)) {
                ?>

              <div class="gallery-box p-5">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                      <!-- <div class="heading-title text-center"> -->
                        <h2 style="font-size: 50px; text-align: left; color: black"><b><?php echo $row2['cat_name']; ?></b><h2>
                        <hr>
                      <!-- </div> -->
                    </div>
                  </div>
                  <div class="tz-gallery">
                    <div class="row">
                      <?php 
                        $book="SELECT * FROM books where cat_id='".$id."'";
                        $query1 = mysqli_query($con,$book); 
                        $count = 0;
                        while ($row3 = mysqli_fetch_assoc($query1)) { 
                        $bookimage = $row3['image'];
                        $bookimage_src = "admin/upload/book/".$bookimage; 


                        if ($row3['qnt'] > 1) {
                        if ($count < 6) { 
                          ?>
                          <div class="col-sm-12 col-md-4 col-lg-4 mt-5">
                        <a class="lightbox">
                          <img style="width: 100%; height: 400px" class="img-fluid" src="<?php echo $bookimage_src; ?>"  alt="Gallery Images">
                          <h4 class="mt-2"><b><?php echo $row3['book_title']; ?></b></h4>
                          <p class="item-price"><?php echo $row3['description']; ?></p>
                          <a href="addtocollection.php?book_id=<?php echo $row3['book_id']; ?>" class="btn btn-primary">Add to Collection</a>
                        </a>
                      </div>
                      <?php  }else{ ?> 
                        <div class="row">
                          <div class="col-md-12 ml-5 mt-5">
                            <a class="text-dark" style="text-decoration: none;" href="more.php?cat_id=<?php echo $id; ?>"><h1>More <?php echo $row2['cat_name']; ?> .... Click Here...</h1></a>
                          </div>
                        </div>
                        
                        <?php }  $count++; } } ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php } $counts++; } ?>

      </div>

    </section><!-- End Testimonials Section -->

        <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <?php $count = 0;
                    $sales = 0;
                    $viewquery = " SELECT * FROM member";
                    $viewresult = mysqli_query($con,$viewquery); 
                    $customers = mysqli_num_rows($viewresult);
                    ?>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $customers; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Members</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <?php $count = 0;
                    $sales = 0;
                    $viewquery1 = " SELECT * FROM books";
                    $viewresult1 = mysqli_query($con,$viewquery1); 
                    $books = mysqli_num_rows($viewresult1);
                    ?>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $books; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Books</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <?php $count = 0;
                    $sales = 0;
                    $viewquery1 = " SELECT * FROM getresevation ";
                    $viewresult1 = mysqli_query($con,$viewquery1); 
                    $res = mysqli_num_rows($viewresult1);
                    ?>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $res; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Resevations</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

        <!-- ======= About Section ======= -->
            <?php $viewquery = "SELECT * FROM about";
            $viewresult = mysqli_query($con,$viewquery);
            $row5 = mysqli_fetch_assoc($viewresult); 

            $about_image = $row5['image'];
            $image_src1 = "upload/about/".$about_image;
            ?>
    <section id="about" class="about">

      <div class="container-fluid" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h1>Who We Are</h1>
              <h2><?php echo $row5['title']; ?></h2>
              <p><?php echo $row5['description']; ?>
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?php echo $image_src1; ?>" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h1><b>Contact Us</b></h1>
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