<?php include("include/session.php");
    $auth_token = '67013ab3960787bcf3affae67e649fc0a789'; //your_auth_token
    $org_id=2389290; //your_organization_id
    
    $headers=array(
            "Authorization: $auth_token",
            "orgId: $org_id",
            "contentType: application/json; charset=utf-8",
    );
    
    $params="limit=5&include=contacts"; //options as parameters
    
    $url="https://desk.zoho.com/api/v1/tickets?$params";
    
    $ch= curl_init($url);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch,CURLOPT_HTTPGET,TRUE);
    
    $response= curl_exec($ch);
    $info= curl_getinfo($ch);
    
    curl_close($ch); 
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
							<a href="addticket.php"><button class="btn btn-dark"><i class="icon-ticket"></i>&nbsp;Add Ticket</button></a>	
						</div>						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<h3>Ticket Details</h3>
			<div class="row">
				<div class="col-md-10">
					<div class="price-box">
						<table class="table table-bordered">
						    <thead>
							<tr>
							  <th><span style="color:#1ddab7;">Ticket Id<span></th>
							  <th><span style="color:#1ddab7;">Subject<span></th>
							  <th><span style="color:#1ddab7;">Description<span></th>
							  <th><span style="color:#1ddab7;">Status<span></th>
							</tr>
                            </thead>
							<tbody>
							<tr>
							<td colspan="4">
							  <?php
								if($info['http_code']==200){
								echo "<h2>Request Successful, Response:</h2> <br>";
								echo $response;
								}
								else{
								echo "Request not successful. Response code : ".$info['http_code']." <br>";
								echo "Response : $response";
								}
							  ?>
							 </td>
							</tr>
							</tbody>
						</table>
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

