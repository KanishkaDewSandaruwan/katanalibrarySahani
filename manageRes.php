<?php 
require_once 'connection.php';
  require_once 'user.php';

if(isset($_REQUEST['cancel']))
{
	$return = $_REQUEST['date'];
  	if (new DateTime() > new DateTime($return)) { 
		$id = $_REQUEST['cancel'];

			$query3="UPDATE getresevation SET accept='Rejected' WHERE res_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myres.php\";</script>";

	}else{
		echo "<script type=\"text/javascript\"> alert(\"Your Resevation Out of date You need to Pay. Now You cant Cancel Resevation/\"); window.location= \"myres.php\";</script>";
	}
} 
?>