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

  <!--     Editor Plugins     -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


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
          <li >
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
          <li >
            <a href="res.php">
              <i class="fas fa-calendar-check"></i>
              <p>Resevation</p>
            </a>
          </li>
          <li>
            <a href="cat.php">
              <i class="fas fa-columns"></i>
              <p>Category</p>
            </a>
          </li>
          <li>
            <a href="author.php">
              <i class="fas fa-user"></i>
              <p>Authors</p>
            </a>
          </li>
          <li>
            <a href="messege.php">
              <i class="fas fa-envelope"></i>
              <p>Messege</p>
            </a>
          </li>
          <li>
            <a href="custom.php">
              <i class="fas fa-tools"></i>
              <p>Tools</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
     <?php require_once "nav.php"; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">

                    <div class="row">
                        <h2 class="text-dark text-uppercase"><b>  About Manage</b></h2>
                    </div>
                    <div class="row">
                        <button style="font-size: 20px;" data-toggle="modal" data-target="#changeAbout" class="btn col-md-4 btn-lg btn-info mt-3 ml-3">Change About Details</button>
                    </div>

                     <div class="row mt-5">
                        <h2 class="text-dark text-uppercase"><b>Library Detail & Home Page Manage</b></h2>
                    </div>
                    <div class="row">
                        <button style="font-size: 20px;" data-toggle="modal" data-target="#homepage" class="btn col-md-4 btn-lg btn-info mt-3 ml-3">Change Details</button>
                    </div>

              </div>
            </div>
          </div>


      

          <div class="modal fade" id="homepage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-info" id="exampleModalLabel">Change Library Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label for="name" class="a"><b>Main Title</b></label>
                            <input type="text" class="form-control" name="maintitle" placeholder="Main Title">
                          </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label for="name" class="a"><b>Main Description</b></label>
                            <input type="text" class="form-control" name="maindesc" placeholder="Main Description">
                          </div>
                        </div>

                         Select Main image to upload:<br>
                        <input type="file" name="file" /><br><br>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label for="name" class="a"><b>Contact Number</b></label>
                            <input type="text" class="form-control" name="number" placeholder="Contact Number">
                          </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label for="email" class="a"><b>Email</b></label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label for="name" class="a"><b>Address</b></label>
                            <input type="text" class="form-control" name="address" placeholder="Address">
                          </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label for="name" class="a"><b>Opening Hourse</b></label>
                            <input type="text" class="form-control" name="open" placeholder="Opening Hourse">
                          </div>
                        </div>
                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="image_set" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['image_set'])){

                    $maintitle = $_REQUEST['maintitle'];
                    $maindesc = $_REQUEST['maindesc'];
                    $number = $_REQUEST['number'];
                    $email = $_REQUEST['email'];
                    $address = $_REQUEST['address'];
                    $open = $_REQUEST['open'];
 
                      $name = $_FILES['file']['name'];

                      // $target_dir = "upload/";
                      $target_dir = "../upload/librery/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);


                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE librery SET main_image='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Updated Succussfully"); window.location.href="custom.php";</script>';
                      }

                      if(!empty($maintitle))
                      {

                        $query3="UPDATE librery SET main_title ='$maintitle'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Updated Succussfully"); window.location.href="custom.php";</script>';
                      }
                      if(!empty($maindesc))
                      {

                        $query3="UPDATE librery SET main_description='$maindesc'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Updated Succussfully"); window.location.href="custom.php";</script>';
                      }

                      if(!empty($email))
                      {
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                          $query1="SELECT * FROM member WHERE email='$email'";
                          $sql1=mysqli_query($con,$query1);


                            if(mysqli_num_rows($sql1)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Email is already Exsisted\");</script>";
                            }
                            else
                              {
                                $query3="UPDATE librery SET email='$email'";
                                $sql3=mysqli_query($con,$query3);
                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location=\"custom.php\";</script>";
                              }
                        }else{echo "<script type=\"text/javascript\"> alert(\"Enter Valid Email Address\");</script>";}
                      }
                    if(!empty($number))
                            {
                              if(preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $number)){
                                  $query3="UPDATE librery SET phone='$number'";
                                  $sql3=mysqli_query($con,$query3);
                                  echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location=\"custom.php\";</script>";

                                }else{echo "<script type=\"text/javascript\"> alert(\"Enter Valid Phone Number\");</script>";}
                            }
                      if(!empty($address))
                      {

                        $query3="UPDATE librery SET address='$address'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Updated Succussfully"); window.location.href="custom.php";</script>';
                      }

                      if(!empty($open))
                      {

                        $query3="UPDATE librery SET opening='$open'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Updated Succussfully"); window.location.href="custom.php";</script>';
                      }
                    }
                    
                  ?>
                    
            </div>
          </div>
        </div>



          <div class="modal fade" id="changeAbout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-info" id="exampleModalLabel">About Page Manage</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                        Select Login Image to upload:<br>
                        <input type="file" name="file" /><br><br><br>

                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="title" class="a"><b>About Title</b></label><br>
                        <input type="text" class="form-control" name="title" placeholder="About Title">
                      </div>
                    </div>

                     <label for="title" class="a"><b>About Description</b></label><br><br>
                    <textarea id="summernote" name="editordata"></textarea>
                        <script>
                          $('#summernote').summernote({
                            placeholder: 'About Description ',
                            tabsize: 2,
                            height: 120,
                            toolbar: [
                              ['style', ['style']],
                              ['font', ['bold', 'underline', 'clear']],
                              ['color', ['color']],
                              ['para', ['ul', 'ol', 'paragraph']],
                            ]
                          });
                        </script><br><br>
                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="about_page" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['about_page'])){
 
                      $name = $_FILES['file']['name'];
                      $title = $_REQUEST['title'];
                      $desc = $_REQUEST['editordata'];


                      // $target_dir = "upload/";
                      $target_dir = "../upload/about/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);

                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE about SET image='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Update is Success"); window.location.href="custom.php";</script>';
                      }

                      if(!empty($title))
                      {

                        $query3="UPDATE about SET title='$title'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"custom.php\";</script>";
                      }
                      if(!empty($desc))
                      {

                        $query3="UPDATE about SET description='$desc'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"custom.php\";</script>";
                      }

                    }
                    
                  ?>
                    
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
