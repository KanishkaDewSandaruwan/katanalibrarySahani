<?php
  require_once 'connection.php';
  require_once 'admin.php';
?>
<!doctype html>
<html lang="en">

<head>
   <link rel="apple-touch-icon" sizes="76x76" href="logo/img1.png">
  <link rel="icon" type="image/png" href="logo/img1.png">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
     KATANA LIBRARY
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="dark" data-active-color="info">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="index.php" class="simple-text logo-normal">
          KATANA LIBRARY
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="member.php">
              <i class="fas fa-users"></i>
              <p>Members</p>
            </a>
          </li>
          <li>
            <a href="books.php">
              <i class="fas fa-book"></i>
              <p>Books</p>
            </a>
          </li>
          <li>
          <li>
            <a href="res.php">
              <i class="fas fa-calendar-check"></i>
              <p>Resevation</p>
            </a>
          </li>
          <li >
            <a href="cat.php">
              <i class="fas fa-columns"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="active ">
            <a href="author.php">
              <i class="fas fa-user"></i>
              <p>Authors</p>
            </a>
          </li>
          <li>
            <a href="custom.php">
              <i class="fas fa-tools"></i>
              <p>Apperence</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
     <?php require_once "nav.php"; ?>
      <!-- End Navbar -->
      <div class="content" style="font-family: \"Times New Roman\",Times, serif;">
          <div class="row mt-5">
                <div class="col-md-6">
                <div class="row">
            <div class="col-md-10">
              <h1 class="text-info" style="font-family: \"Times New Roman\",Times, serif;"><a style="text-decoration:none;" class="text-info" href="books.php">Edit Authors</a></h1>
            </div>
            <div class="row">
              <form class="reg_form bg-light p-5 border-round border border-info " action="" method="POST" enctype="multipart/form-data">
                  <div class="form-row">
                      <div class="form-group col-md-10">
                        <label for="name" class=""><b>Author Name</b></label>
                        <input type="text" class="form-control" name="name" placeholder="Author Name">
                      </div>
                    </div>
                  <div class="form-row">
                      <div class="form-group col-md-10">
                        <label><b>Email</b></label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                      </div>
                    </div>
                  <div class="form-row">
                    <div class="form-group col-md-10">
                      <label for="phone"><b>Phone Number</b></label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>
                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-info">Save changes</button>
                    <button type="button" name="submit" onclick="window.location.href = 'author.php'" class="btn btn-info">Back</button>
                    <?php 
                    if(isset($_POST['submit'])){
                      $fname = $_REQUEST['name'];
                      $emails = $_REQUEST['email'];
                      $phone = $_REQUEST['phone'];

                      $id = $_REQUEST['author_id'];

                      if(!empty($fname))
                        {
                          $query3="UPDATE author SET author_name='$fname' WHERE author_id='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Update Succussfully\"); window.location= \"author.php\";</script>";
                        }

                      if(!empty($emails))
                      {
                        if(filter_var($emails, FILTER_VALIDATE_EMAIL)){

                          $query1="SELECT * FROM author WHERE email='$emails'";
                          $sql1=mysqli_query($con,$query1);


                            if(mysqli_num_rows($sql1)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Email is already Exsisted\");</script>";
                            }
                            else
                              {
                                $query3="UPDATE author SET email='$emails' WHERE author_id='".$id."'";
                                $sql3=mysqli_query($con,$query3);
                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location.href='author.php';</script>";
                              }
                        }else{echo "<script type=\"text/javascript\"> alert(\"Enter Valied Email Address\");</script>";}
                      }

                      if(!empty($phone))
                      {
                        if(preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                            $query3="UPDATE author SET phone='$phone' WHERE author_id='".$id."'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"author.php\";</script>";

                          }else{echo "<script type=\"text/javascript\"> alert(\"Enter Valied Phone Number\");</script>";}
                      }
        
        
                }
                ?>
                  </div>
                </form>
            </div>
            </div>
          </div>
        </div>
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                Copyright©2021,KatanaLibrary  <br>Created By : SILVA M.S.D. SEU/IS/16/MIT/103
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>
