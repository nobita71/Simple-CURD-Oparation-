<?php
	include("config.php");
	include("session.php");

	if (isset($_GET['id'])) {
		# code...
		$id = $_GET['id'];

	$senddata = @$_POST['senddata'];
	$stid = strip_tags(@$_POST['student_id']);

	if($senddata){
		$name_update = mysqli_query($con,"UPDATE studentdata SET student_id='$stid' WHERE id='$id'");
				echo "Success! Your Student ID is Update!";
				header("location:info.php");
	}
	else{
		echo "Please update your ID";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<form action="" method="post">
		<input type="name" name="student_id" >
		<input type="submit" name="senddata" value="update">
	</form>
</body>
</html>