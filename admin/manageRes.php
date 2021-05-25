<?php 
require_once 'connection.php';
  require_once 'admin.php';

if(isset($_REQUEST['cancel']))
{
		$id = $_REQUEST['cancel'];

			$query3="UPDATE getresevation SET accept='Rejected' WHERE res_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"res.php\";</script>";

} else if (isset($_REQUEST['accept'])) {

	$id = $_REQUEST['accept'];

			$query3="UPDATE getresevation SET accept='Accepted' WHERE res_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"res.php\";</script>";

} else if (isset($_REQUEST['complete'])) {

	$id = $_REQUEST['complete'];

			$query3="UPDATE getresevation SET accept='Completed' WHERE res_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"res.php\";</script>";
		  	
}else if (isset($_REQUEST['delete'])) {

	$id = $_REQUEST['delete'];

			$query3="DELETE FROM getresevation WHERE res_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"res.php\";</script>";
}
?>