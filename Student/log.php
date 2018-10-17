<?php
include ("config.php");
	if (isset($_POST['name']) && ($_POST['pass'])) {

		# code...
		$name = $_POST['name'];
		$pass = $_POST['pass'];

		$user_login_query = "SELECT `name`, `pass` FROM `login` WHERE name = '$name' && pass = '$pass' LIMIT 1";
  
  		$user_login = mysqli_query($con,$user_login_query);

  		$count_user = mysqli_num_rows($user_login);

		if ($count_user == 1) {

			session_start();
			
			$_SESSION['name'] = $name;
			# code...
			header("location:home.php");
		}
		else
		{
			echo "Something wrong";
		}
	}
	else{
		echo "Something wrong with set";
	}
?>