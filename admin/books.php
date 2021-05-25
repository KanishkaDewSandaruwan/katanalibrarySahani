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
          <li class="active ">
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
      <div class="content" style="font-family: \"Times New Roman\",Times, serif;">
          <div class="row mt-5">
                <div class="col-md-12">
                <div class="row">
            <div class="col-md-10">
              <h1 class="text-info" style="font-family: \"Times New Roman\",Times, serif;"><a style="text-decoration:none;" class="text-info" href="books.php">BOOKS</a></h1>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
            </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                <h1 style="font-family: \"Times New Roman\",Times, serif; text-align:center" class ="text-danger text-center" >Add New Book</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                      <div class="form-group col-md-10">
                        <label for="title" class="a"><b>Book Title</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Book Title">
                      </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-10">
                      <label for="price"><b>Price</b></label>
                      <input type="text" class="form-control"  name="price" placeholder="Price">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-10">
                      <label for="desc"><b>Description </b></label>
                      <input type="text" class="form-control" name="desc" placeholder="Description ">
                    </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-10">
                        <label for="inputState"><b>Author</b></label>
                        <select id="inputState" name="author" class="form-control">
                          <option selected></option>';
                          <?php 
                          $q3 = "SELECT * FROM author";
                          $res3 = mysqli_query($con,$q3);
                          $c=1;
                          while($row=mysqli_fetch_assoc($res3)){
                            echo "<option>".$row['author_name']."</option>";
                            $c++;
                          }
                          ?>
                        </select>
                      </div>
                      </div>

                    <div class="form-row">
                      <div class="form-group col-md-10">
                        <label for="inputState"><b>Categories</b></label>
                        <select id="inputState" name="cat" class="form-control">
                          <option selected></option>';
                         <?php 
                             $q3 = "SELECT * FROM book_cat";
                             $res3 = mysqli_query($con,$q3);
                             $c=1;
                             while($row=mysqli_fetch_assoc($res3)){
                               echo "<option>".$row['cat_name']."</option>";
                               $c++;
                             }
                         ?>
                        </select>
                      </div>
                      </div>

                    <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="phone"><b>Quantity</b></label>
                        <input type="text" style="text-transform: uppercase;" class="form-control" name="qnt" placeholder="Quantity">
                    </div>
                    </div>

                    <br>
                    Select Foods Front image to upload:<br>
                        <input type="file" name="file" /><br><br>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-danger">Save changes</button>
                    <?php 
                    if(isset($_POST['submit'])){
                        $title = $_REQUEST['title'];
                        $price = $_REQUEST['price'];
                        $desc = $_REQUEST['desc'];
                        $author = $_REQUEST['author'];
                        $cat = $_REQUEST['cat'];
                        $qnt = $_REQUEST['qnt'];
                        $cdate = date("Y/m/d");

                        if(isset($_FILES['file']) && !empty($_FILES['file']['name'])) { 
                        
                        $name = $_FILES['file']['name'];
                        $target_dir = "upload/book/";
                        $target_file = $target_dir . basename($_FILES["file"]["name"]);
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        $extensions_arr = array("jpg","jpeg","png","gif");
    
                              if(!empty($title)){
                                 if(!empty($price)){
                                  if(!empty($desc)){
                                    if(!empty($qnt)){
                                        
    
    
                                        $q4 = "SELECT * FROM author WHERE author_name='$author'";
                                        $res4 = mysqli_query($con,$q4);
                                        $row2 = mysqli_fetch_assoc($res4);
                                        $author_id = $row2['author_id'];
    
                                        $q4 = "SELECT * FROM book_cat WHERE cat_name='$cat'";
                                        $res4 = mysqli_query($con,$q4);
                                        $row2 = mysqli_fetch_assoc($res4);
                                        $cat_id = $row2['cat_id'];
    
    
                                                $query3="SELECT * FROM books WHERE  book_title='$title'";
                                                $sql3=mysqli_query($con,$query3);
    
                                                if(mysqli_num_rows($sql3)>0)
                                                {
                                                  echo '<script>alert("This Book is Alrady Here.");</script>';
                                                }else{
                                                    if (in_array($imageFileType,$extensions_arr)) {
                                                        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
        
                                                                $q1="INSERT INTO books(book_title,book_price,description,author_id,cat_id,qnt,trn_date,image) values('$title','$price','$desc','$author_id','$cat_id','$qnt','$cdate','$name')";
                                                                $res1=mysqli_query($con,$q1);
                                                                if ( $res1)
                                                                {
                                                                    echo '<script>alert("Book Saved is Scussessfully.");
                                                                        </script>';
                                                                }else{
                                                                    echo "<script>alert(\"Book Save is Not Scussess\");</script>";
                                                                }
                                                    }
                                                }
    
                                            }else{ echo "<script>alert(\"Please Enter Quntity\");</script>";}
                                        }else{ echo "<script>alert(\"Please Enter Description\");</script>";}
                                    }else{ echo "<script>alert(\"Please Enter Price\");</script>";}
                                }else{ echo "<script>alert(\"Please Enter Title\");</script>";}
                            }else{ echo "<script>alert(\"Please select Image to Upload\");</script>";}
                            
                }
                ?>
                  </div>
                </form>
              </div>
            </div>
          </div>
            <br><br>
          </div>
          <div class="row ml-3">
          <form class="col-md-6" method="POST">
              <div class="input-group border"> 
                <input type="text" value="" class="form-control" name="search_text" placeholder="Search Books...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <button type="submit" name="search" style="outline: 0; border: 0; padding:10; background-color:none;"><i class="nc-icon nc-zoom-split"></i></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
            <div class="row">
            <div class="col-md-12 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle text-center">
                                    <thead>
                                        <tr class="bg-info">
                                            <th class="border-top-0 text-white">Title</th>
                                            <th class="border-top-0 text-white">Price</th>
                                            <th class="border-top-0 text-white">Description</th>
                                            <th class="border-top-0 text-white">Author</th>
                                            <th class="border-top-0 text-white">Categories</th>
                                            <th class="border-top-0 text-white">Stock</th>
                                            <th class="border-top-0 text-white">Image</th>
                                            <th class="border-top-0 text-white">Date</th>
                                            <th class="border-top-0 text-white"></th>
                                        </tr>
                                    </thead>
                                    <?php $count=1;
                                      $getBook = "SELECT * FROM books";

                                        if(isset($_POST['search'])){
                                          $search = $_REQUEST['search_text'];

                                          if(!empty($search)){
                                            $search_query = "SELECT * FROM books WHERE book_title like '%".$search."%'";
                                            $viewresult = mysqli_query($con,$search_query);
                                            if($viewresult){
                                              
                                            }else{
                                              echo '<h1>No Result found </h1>';
                                            }
                                            
                                          }else{ echo "<script>alert(\"Please Enter to Search\");window.location.href=\"books.php\"; </script>";}
                                          
                                        }else{
                                          $viewresult = mysqli_query($con, $getBook);
                                        }
                                      ?>
                                    <tbody>
                                      <?php while($row = mysqli_fetch_assoc($viewresult)) { 

                                            $viewquery1 = " SELECT * FROM author where author_id='".$row['author_id']."'";
                                            $viewresult1 = mysqli_query($con,$viewquery1);
                                            $row1 = mysqli_fetch_assoc($viewresult1);

                                            $viewquery2 = " SELECT * FROM book_cat where cat_id='".$row['cat_id']."'";
                                            $viewresult2 = mysqli_query($con,$viewquery2);
                                            $row2 = mysqli_fetch_assoc($viewresult2);

                                            $image = $row['image'];
                                            $image_src = "upload/book/".$image;?>
                                        <tr>
                                            <td><?php echo $row['book_title']; ?></td>
                                            <td><?php echo $row['book_price']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td><?php echo $row1['author_name']; ?></td>
                                            <td><?php echo $row2['cat_name']; ?></td>
                                            <td><?php echo $row['qnt']; ?></td>
                                            <td><img width="100px" src='<?php echo $image_src; ?>'></td>
                                            <td><?php echo $row['trn_date']; ?></td>
                                            <td>
                                              <div class="btn-group">
                                                <button type="button" class="btn btn-info">Action</button>
                                                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="edit_book.php?book_id=<?php echo $row['book_id']; ?>"><i class="fas fa-edit"> Edit</i></a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="delete.php?book_id=<?php echo $row['book_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a>
                                                </div>
                                              </div>
                                            </td>
                                        <?php   $count++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
