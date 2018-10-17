 <!-- this will be added to every page  -->
<?php 


session_start();
$name = $_SESSION['name'];
if(!isset($_SESSION['name'])){
	header("location:index.php");
}
?>