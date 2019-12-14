<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laundry Ceria</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
    <link href="css/styles-pf.css" rel="stylesheet">
    <link href="css/responsive-pf.css" rel="stylesheet">
</head>
<body>
<?php include 'template/header.php'; ?>
<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="img/profile-1-250x250.jpg" alt=""></div>
						<h2><b>Miftahul Huda</b></h2>
						<ul class="information margin-tb-30">
							<li><b>BORN : </b>August 25, 1999</li>
							<li><b>EMAIL : </b>kodeingusan@mywebpage.com</li>
							<li><b>MARITAL STATUS : </b>Married dgn syl :v</li>
                        </ul>
                        </div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
    </section>
    <script src="common-js/jquery-3.2.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<script src="common-js/isotope.pkgd.min.js"></script>
	
	<script src="common-js/jquery.waypoints.min.js"></script>
	
	<script src="common-js/progressbar.min.js"></script>
	
	<script src="common-js/jquery.fluidbox.min.js"></script>
	
	<script src="common-js/scripts.js"></script>
</body>
<?php include 'template/footer.php'; ?>
</html>


    

  