<?php
 include("config.php");

if(isset($_POST['submit'])){
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$university = $_POST['university'];
	$email = $_POST['email'];

	
	if($id =='' or $name =='' or $university =='' or $email ==''){
		
		echo "<script>alert('Any of the fields is empty')</script>";
		echo "<script>window.open('sign-up.php','_self')</script>";
		exit();
	}
	else{
		//move_uploaded_file($image_tmp,"photo/$photo");
		
		$result = mysqli_query($con,"INSERT INTO `studentdata` (`student_id`,`student_name`,`student_university_name`,`student_email`)
		values ('$id','$name','$university','$email')");
	}
	if(mysqli_query($con,$result)){

		echo "error";
	}
	else{
		
		echo "<script>alert('Student Information Published successfully')</script>";
		echo "<script>window.open('home.php','_self')</script>";
	}
}
?>