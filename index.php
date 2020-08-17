<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PeerXP Support</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="PeerXP Support" />
	<meta name="author" content="Ravi" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	<div id="page">
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><img src="images/logo1.png" height="50" width="50"><a href="index.php">PeerXP Support <em></em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php">Sign In</a></li>
						<li><a href="signup.php">Sign Up</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						
						<div class="col-md-5 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Already a member?</h3>
											<span>Sign In</span>
											<form method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<input type="email" id="fullname" name="u_email" placeholder="Email Address" class="form-control" required />
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="password" id="fullname" name="u_password" placeholder="Password" class="form-control" required />
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="submit" class="btn btn-primary btn-block" value="Sing In">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2 mt-text animate-box" data-animate-effect="fadeInUp">
						</div>
						<div class="col-md-4 mt-text animate-box" data-animate-effect="fadeInUp">
							<h3 style="color:#fff;"><i class="icon-user"></i>&nbsp;New User? <a href="signup.php">Sign Up</a></h3>
							<h5 style="color:#C0C0C0;">Create an account to submit tickets, read articles and engage in our community.</h5>
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	<footer id="" role="">
		<div class="gtco-container">
			<div class="row copyright">
				<div class="col-md-12">
				    <p class="pull-left">
						<small class="block">&copy; 2020 Ravi | All Rights Reserved.</small> 
					</p>
					<p class="pull-right">
						<small class="block">Designed by <a href="javascript:void(0);">Ravi</a></small>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>
<?php
include("include/con33.php");
if(isset($_POST['submit'])){
$u_email=$_POST['u_email'];
$u_password=$_POST['u_password'];
$qry7=mysqli_query($con,"select * from user_dtails where u_email='$u_email' && u_password='$u_password'");
while($row7=mysqli_fetch_array($qry7)){
$u_name=$row7['u_name'];
}
if(mysqli_num_rows($qry7)>0){
$_SESSION["u_email"]="$u_email";
$_SESSION["u_name"]="$u_name";
echo "<script>window.open('myarea.php','_self')</script>";
}else{
echo "<script>alert('Invalid Username or Password')</script>";
echo "<script>window.open('index.php','_self')</script>";
}
}
?>