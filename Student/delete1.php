<?php
	include("config.php");

	if (isset($_GET['delete'])) {
		# code...
		//$sql = 'DELETE FROM `studentdata` WHERE id = $id';
		$sqli = mysqli_query($con,"DELETE FROM `studentdata` WHERE id = '3'");
		if (mysqli_query($con,$sqli)) {
			# code...
			echo "thik nai";
			
		}
		else{
			echo "<script>alert('Student Information Delete successfully')</script>";
			//echo "<script>window.open('info.php','_self')</script>";
		}
	}
	else{
		echo "Set hoy nay";
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="get">
	<input type="submit" name="delete" value="delete">
</form>
</body>
</html>