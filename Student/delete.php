<?php
	include("config.php");

	if (isset($_GET['id'])) {
		# code...
		$id = $_GET['id'];

		//$sql = 'DELETE FROM `studentdata` WHERE id = $id';
		$sqli = mysqli_query($con,"DELETE FROM `studentdata` WHERE id = $id");
		if (mysqli_query($con,$sqli)) {
			# code...
			echo "thik nai";
			
		}
		else{
			echo "<script>alert('Student Information Delete successfully')</script>";
			echo "<script>window.open('info.php','_self')</script>";
		}
	}
	else{
		echo "Set hoy nay";
	}

?>