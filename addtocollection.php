<?php 
	require_once 'connection.php'; //insert connection to page

	session_start();
	if(!isset($_SESSION['member_id'])){
		echo "<script type=\"text/javascript\"> alert(\"Please Signin First\"); window.location= \"index.php\";</script>";
	}
	
	$id = $_REQUEST['book_id'];
	$getID = $_SESSION['member_id'];
	$cdate = date("Y/m/d m:H:s");

	echo $getID;

	$getDetail_Query = "SELECT * FROM books where book_id= '".$id."'";
	$getResult = mysqli_query($con,$getDetail_Query);

	$getCustomerDetail_Query = "SELECT * FROM member where member_id='".$getID."'";
	$getResult_Customer = mysqli_query($con,$getCustomerDetail_Query);

	$getCartDetail_Query = "SELECT * FROM collection where book_id= '".$id."'AND member_id='".$getID."'";
	$getResult_Cart = mysqli_query($con,$getCartDetail_Query);

	if(mysqli_num_rows($getResult_Cart)>0){
	      echo "<script type=\"text/javascript\"> alert(\"This Product Alrady in Cart\"); window.location= \"index.php\";</script>";
	}else{
		if ($row = mysqli_fetch_assoc($getResult)) { 


			$book_id = $row['book_id'];
			if ($row1 = mysqli_fetch_assoc($getResult_Customer)) {

				$qnty = '1';
				$q1="INSERT INTO collection(member_id,book_id,trndate) values('$getID','$book_id','$cdate')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {
                	echo "<script type=\"text/javascript\"> alert(\"This Book Added to Collection\"); window.location= \"index.php\";</script>";
                }else{
                	echo "<script type=\"text/javascript\"> alert(\"Collection Adding Fail\"); window.location= \"index.php\";</script>";
                }
			
			}
		}
	}
 ?>