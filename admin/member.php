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
          <li class="active ">
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
          <h1 class="text-info" style="font-family: \"Times New Roman\",Times, serif;">Member List</h1>
          <div class="col-md-12 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-info">
                                            <th class="border-top-0 text-white">Name</th>
                                            <th class="border-top-0 text-white">Phone Number</th>
                                            <th class="border-top-0 text-white">NIC Number</th>
                                            <th class="border-top-0 text-white">Email</th>
                                            <th class="border-top-0 text-white">Address</th>
                                            <th class="border-top-0 text-white">Registerd Date</th>
                                            <th class="border-top-0 text-white"></th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $count=1;
                                         $viewquery = " SELECT * FROM member";
                                          $viewresult = mysqli_query($con,$viewquery);?>
                                    <tbody>
                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                        if ($row['username'] != 'admin') { ?>
                                        <tr>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['nic']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['reg_date']; ?></td>
                                            <td><a style="text-decoration: none; color: red; font-size: 25px;" href="member_delete.php?member_id=<?php echo $row['member_id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <?php }  $count++; } ?>
                                    </tbody>
                                </table>
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
