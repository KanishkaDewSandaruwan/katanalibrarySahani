<?php 
require_once 'connection.php';
require_once 'user.php';

$getID = $_SESSION['member_id'];

$viewquery = " SELECT * FROM collection where member_id = '$getID'";
$viewresult = mysqli_query($con,$viewquery);
$row = mysqli_fetch_assoc($viewresult);

$viewquery_cus = " SELECT * FROM member where member_id = '$getID'";
$viewresult_cus = mysqli_query($con,$viewquery_cus);
$row1 = mysqli_fetch_assoc($viewresult_cus);

$cus_id = $row1['member_id'];
$cdate = date("Y/m/d");
$product_ids = "";
$accept = "Pending";


$noarray=array();
$i = 0;

$viewquery2 = " SELECT * FROM collection where member_id = '$getID'";
$viewresult2 = mysqli_query($con,$viewquery2);

while($row2 = mysqli_fetch_assoc($viewresult2)){
	$qnt_temp = 0;
	$bookid = $row2['book_id'];

	$viewquery3 = " SELECT * FROM books where book_id = '$bookid'";
	$viewresult3 = mysqli_query($con,$viewquery3);
	$row3 = mysqli_fetch_assoc($viewresult3);

	$qnt = $row3['qnt'];
	$qnt_temp = $qnt - 1;

	$query3="UPDATE books SET qnt='$qnt_temp' WHERE book_id='".$bookid."'";
	mysqli_query($con,$query3);

   	$noarray[$i] = $row2['book_id'];     
  	$i++;
}

$List = implode(',', $noarray); 

$after_1week = date("Y-m-d", strtotime("+1 week"));
$after_3week = date("Y-m-d", strtotime("+3 week"));


    $q1="INSERT INTO getresevation(book_ids,member_id,trn_date,resrve_date,accept,return_date) values('$List','$cus_id','$cdate','$after_1week','$accept','$after_3week')";
    $res1=mysqli_query($con,$q1);


    if ($res1) {
        $query1="DELETE FROM collection WHERE member_id='$getID '";
        mysqli_query($con,$query1);
    }
        echo '<script>alert("Your Order Sending Success"); window.location.href="myres.php";</script>';



?>