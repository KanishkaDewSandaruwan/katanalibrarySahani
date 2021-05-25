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
          <li class="active ">
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
            <?php   
                  $count = 0;
                  $cdate = date("Y-m-d");
                  $newdate = "";
                  
                  $viewquery = " SELECT * FROM getresevation";
                  $viewresult = mysqli_query($con,$viewquery);

                  

           ?>
        
            <?php 
                  while($row1 = mysqli_fetch_assoc($viewresult)) { 
                    $member_id = $row1['member_id'];
                    $getDetail_Query1 = "SELECT * FROM member where member_id ='".$member_id."' ";
                    $getResult0 = mysqli_query($con,$getDetail_Query1);
                    

                    $getDetail_Query2 = "SELECT * FROM member_backup where member_id ='".$member_id."' ";
                    $getResult9 = mysqli_query($con,$getDetail_Query2);
                    
                    ?>

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
                          $image_src = "upload/book/".$image;

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
                          $image = $row5['image'];
                          $image_src = "upload/book/".$image;

                          ?>
                          <div class="row">
                            <div class="col-md-6">
                              <p><?php echo $row5['book_title']; ?></p>
                            </div>
                            <div class="col-md-6 mt-3">
                              <img width="100%" src="<?php echo $image_src; ?>" >
                            </div>
                            
                          </div>
                        <?php } ?>
                           
                      <?php   $count++; }?>
                    </div>

                    <div class="col-sm-1">
                      <p style="color: green">Member</p>
                      <p><?php if ($row0 = mysqli_fetch_assoc($getResult0)) {
                        echo $row0['name']."<br><br>".$row0['address']."<br><br>".$row0['phone'];
                      }else if ($row9 = mysqli_fetch_assoc($getResult9)) {
                        echo $row0['name']."<br><br>".$row0['address']."<br><br>".$row0['phone'];
                        echo '<p class="text-danger">Member Account Deleted</p>';
                      }?></p>
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

                            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="manageRes.php?accept=<?php echo $row1['res_id']; ?>">Accept Resevation</a>
                              <a class="dropdown-item" href="manageRes.php?complete=<?php echo $row1['res_id']; ?>">Complete Resevation</a>
                              <a class="dropdown-item" href="manageRes.php?cancel=<?php echo $row1['res_id']; ?>">Cancel Resevation</a>
                              <a class="dropdown-item" href="manageRes.php?delete=<?php echo $row1['res_id']; ?>">Delete Resevation</a>
                            </div>
                          </div>

                  </div>
                  </div>
                  <?php  $count++;
                    
                  
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
