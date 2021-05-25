<?php 

	require_once 'connection.php'; //insert connection to page
	require_once 'user.php'; //insert connection to page

	if(isset($_REQUEST['collect_id']))
	{
	          $id = $_REQUEST['collect_id'];

	          $querygetcode="SELECT  * FROM collection where collect_id='".$id."'";
	          $catresult=mysqli_query($con,$querygetcode);
	          $result_row=mysqli_fetch_assoc($catresult);
	          $a=$result_row['collect_id'];

	          $query1="DELETE FROM collection WHERE collect_id='$a '";
	          mysqli_query($con,$query1);
	          header('location:collection.php');

	}
 ?>