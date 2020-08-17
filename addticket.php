<?php include("include/session.php"); ?>
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
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/summernote-bs4.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
						<li><a href="myarea.php">My Area</a></li>
						<li><a href="addticket.php">Add Ticket</a></li>
						<li><a href="signout.php">Sign Out</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_2.jpg);height:300px;">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-10em">
						<div class="col-md-10 mt-text animate-box" data-animate-effect="fadeInUp">
						</div>
						<div class="col-md-1 mt-text animate-box" data-animate-effect="fadeInUp">
							<a href="myarea.php"><button class="btn btn-dark"><i class="icon-ticket"></i>&nbsp;Ticket Details</button></a>	
						</div>						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-8 animate-box">
					<h3>Submit a ticket</h3>
					<form method="post">
					<h5><b>Ticket Information</b></h5>
						<div class="row form-group">
							<div class="col-md-7">
								<label for="fullname">Department<span style="color:red;">*</span></label>
								    <select name="department" id="activities" class="form-control select2" style="width:100%;" required>
										<option value="">-Select-</option>
										<option value="PWSLab DevOps Support">PWSLab DevOps Support</option>
										<option value="iSupport">iSupport</option>
										<option value="Other">Other</option>
									</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="fullname">Category<span style="color:red;">*</span></label>
								    <select name="category" id="activities" class="form-control select2" style="width:100%;" required>
										<option value="">-None-</option>
										<option value="NEW Project CI/CD Pipeline Setup">NEW Project CI/CD Pipeline Setup</option>
										<option value="Update CI/CD Pipeline Configuration">Update CI/CD Pipeline Configuration</option>
										<option value="DevSecOps Pipeline Setup">DevSecOps Pipeline Setup</option>
										<option value="CI/CD pipeline failure">CI/CD pipeline failure</option>
										<option value="Automated Deployment failure">Automated Deployment failure</option>
										<option value="Docker and Containers">Docker and Containers</option>
										<option value="Kubernetes Deployments (like EKS/GCP)">Kubernetes Deployments (like EKS/GCP)</option>
										<option value="Git Source control">Git Source control</option>
										<option value="PWSLab server not responding (502/503 errors)">PWSLab server not responding (502/503 errors)</option>
										<option value="User management and Project access">User management and Project access</option>
										<option value="Cloud Integration Consultation - AWS/GCP/Azure">Cloud Integration Consultation - AWS/GCP/Azure</option>
										<option value="Others">Others</option>
									</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="fullname">Subject<span style="color:red;">*</span></label>
								<input type="text" id="subject" class="form-control" name="subject">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="fullname">Description<span style="color:red;">*</span></label>
									<textarea name="description" id="message" cols="30" rows="6" class="form-control" placeholder="Write us something" required /></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="fullname">Priority<span style="color:red;">*</span></label>
								    <select name="priority" id="activities" class="form-control select2" style="width:100%;" required>
										<option value="">-None-</option>
										<option value="High - Production System Down">High - Production System Down</option>
										<option value="Medium - System Impaired">Medium - System Impaired</option>
										<option value="Low - General Guidance">Low - General Guidance</option>
									</select>
							</div>
						</div>
						<h5><b>Contact Details</b></h5>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="fullname">Contact Name<span style="color:red;">*</span></label>
								<input type="text" id="subject" value="<?php echo $_SESSION['u_name']; ?>" class="form-control" name="name" readonly />
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="fullname">Email<span style="color:red;">*</span></label>
								<input type="text" id="subject" value="<?php echo $_SESSION['u_email']; ?>" class="form-control" name="email" readonly />
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary">
						</div>

					</form>		
				</div>
				</div>
			</div>
		</div>
	</div>

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
	<script src="js/select2.full.min.js"></script>
	<script src="js/summernote-bs4.min.js"></script>
	</body>
	<script>
	$(function () {
    // Summernote
    $('.textarea').summernote()
    })
	$(function (){
	$('.select2').select2()
	})
	</script>
</html>
<?php
if(isset($_POST['submit'])){
$department=$_POST['department'];
$category=$_POST['category'];
$subject=$_POST['subject'];
$description=$_POST['description'];
$priority=$_POST['priority'];
$name=$_POST['name'];
$email=$_POST['email'];
include("createticket.php");
$response=ticketPOST($department,$category,$subject,$description,$priority,$name,$email);
}
?>
