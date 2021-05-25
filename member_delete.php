<?php 
  require_once 'connection.php'; //insert connection to page
  require_once 'user.php'; //insert connection to page

if(isset($_REQUEST['member_id']))
{
          $id = $_REQUEST['member_id'];

          $querygetcode="SELECT * FROM member where member_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['member_id'];
          $g=$result_row['email'];

          $cdate = date("Y/m/d m:H:s");

            $viewquery = " SELECT * FROM member where email='".$g."'";
              $viewresult = mysqli_query($con,$viewquery);
              if ($row = mysqli_fetch_assoc($viewresult)) {

                $name = $row['name'];
                $mem_id = $row['member_id'];
                $address = $row['address'];
                $phone = $row['phone'];
                $email = $row['email'];


              $q1="INSERT INTO member_backup(member_id,name,email,address,trn_date,phone) values('$mem_id','$name','$email','$address','$cdate','$phone')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {


              $query1="DELETE FROM member WHERE email='$g '";
                      mysqli_query($con,$query1);

                      header('location:logout.php');
                }
              }
}
else{
  header('location:index.php'); 
} ?>