<?php
      include("config.php");
      include("session.php");
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Student Information</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/style.css">
         <link rel="stylesheet" href="assets/css/newstyle.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu">
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->
        <header id="main_menu" class="header">
            <div class="main_menu_bg navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu wow fadeInUp" data-wow-duration="1s">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt=""/></a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="home.php">Home</a></li>
                                            <li  class="active"><a href="info.php">Information</a></li>
                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->



        <section id="home" class="home">
            <div class="home-overlay-fluid">
                <div class="container">
                    <div class="row">
                        <div class="main_slider_area">
                            <div class="slider">
                                <div class="single_slider wow fadeIn" data-wow-duration="2s">
                                       <p>Student Data Table</p>
                                           <table class="responsive-table table table-bordered colo">
                                    <thead>
                                        <tr>    <th>ID</th>
                                                <th>Student ID</th>
                                                <th>Full Name</th>
                                                <th>University Name</th>
                                                <th>Email Address</th>
                                                <th>Action</th>
                                                <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php 

                                            $query = "select * from studentdata order by 1 DESC";

                                            $run = mysqli_query($con,$query);
                                            while($row=mysqli_fetch_array($run)){
                                                $id1 = $row['id'];
                                                $id = $row['student_id'];
                                                $name = $row['student_name'];
                                                $university = $row['student_university_name'];
                                                $email = $row['student_email'];

                                            ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $id1; ?></td>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $university; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo '<a href="delete.php?id='.$row['id'].'">Delete</a>' ?></td>
                                            <td><?php echo '<a href="update.php?id='.$row['id'].'">Update</a>' ?></td>
                                        </tr>

                                        <?php } ?>

                                    </tbody>
                                </table>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Banner Section -->
		
		<footer id="coppyrights" class="coppyrights">
			<div class="container-fluid">
			<div class="row">
				<div class="coppyright">
					<p class="wow fadeInUp" data-wow-duration="2s">Made with <i class="fa fa-heart"></i> by <strong><a href="http://bootstrapthemes.co">Bootstrap Themes</a></strong> 2016. All Rights Reserved</p>
				</div>
			</div>
			</div>
		</footer>


        <!-- STRAT SCROLL TO TOP -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
