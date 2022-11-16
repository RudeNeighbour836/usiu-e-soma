<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/blast.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/style10.css" />
        <link rel="stylesheet" type="text/css" href="css/style-index.css" />
        <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
        <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">        
        <link href="css/styles.css" rel="stylesheet" />
        <style>
        </style>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="index.php">E-SOMA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive"> 
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- team -->
	<section class="mid_slider py-5">
		<div class="container py-md-4 mt-md-3">

			<h3 class="heading-agileinfo">Courses Currently Available<span>Select One</span></h3>
			
			<div class="row inner_sec_info_w3ls_agile mt-md-5 pt-5">
				<div class="col-lg-3 col-md-6 col-sm-6 team_grid1">
				<div class="team_grid_info">
					<img src="images/crypto.jpg" alt=" " class="img-fluid" />
					<h3>APT3090 - Cryptography</h3>
					<p>SST</p>
					<div class="select">
                        <a href="crypto.html" class="btn btn-primary">Start</a>
					</div>
				</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 team_grid1">
				<div class="team_grid_info">
					<img src="images/mid.jpg" alt=" " class="img-fluid" />
					<h3>APT3065 - Mid-Term Project </h3>
					<p>SST</p>
					<div class="select">
                        <a href="#" class="btn btn-primary">Start</a>
					</div>
				</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 team_grid1">
				<div class="team_grid_info">
					<img src="images/hci.jpg" alt=" " class="img-fluid" />
					<h3>SFE4010 - Human Computer Interaction</h3>
					<p>SST</p>
					<div class="select">
                    <a href="#" class="btn btn-primary">Start</a>
					</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 team_grid1">
				<div class="team_grid_info">
					<img src="images/bus.jpg" alt=" " class="img-fluid" />
					<h3>BUS1010 - Business Organizations</h3>
					<p>CSOB</p>
					<div class="select">
                    <a href="#" class="btn btn-primary">Start</a>
					</div>
					</div>
				</div>
                <div> <br></div>
                <div class="col-lg-3 col-md-6 col-sm-6 team_grid1">
				<div class="team_grid_info">
					<img src="images/shss.jpg" alt=" " class="img-fluid" />
					<h3>BUS1010</h3>
					<p>CSOB</p>
					<div class="select">
                    <a href="#" class="btn btn-primary">Start</a>
					</div>
					</div>
				</div>
                <div class="col-lg-3 col-md-6 col-sm-6 team_grid1">
				<div class="team_grid_info">
					<img src="images/shss.jpg" alt=" " class="img-fluid" />
					<h3>BUS1010</h3>
					<p>CSOB</p>
					<div class="select">
                    <a href="#" class="btn btn-primary">Start</a>
					</div>
					</div>
				</div>
                <div class="col-lg-3 col-md-6 col-sm-6 team_grid1">
				<div class="team_grid_info">
					<img src="images/shss.jpg" alt=" " class="img-fluid" />
					<h3>BUS1010</h3>
					<p>CSOB</p>
					<div class="select">
                    <a href="#" class="btn btn-primary">Start</a>
					</div>
					</div>
				</div>
                <div class="col-lg-3 col-md-6 col-sm-6 team_grid1">
				<div class="team_grid_info">
					<img src="images/shss.jpg" alt=" " class="img-fluid" />
					<h3>BUS1010</h3>
					<p>CSOB</p>
					<div class="select">
                    <a href="#" class="btn btn-primary">Start</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //team -->
    <section class="copyright-usiu-e-soma py-xl-4 py-3" align="center" style="background-color :black;"> 
      <div class="container" >
        <p style="color:white;"> <strong> © 2022 USIU E-Soma. All Rights Reserved</strong></p>        
      </div>
  </section>  

</body>
</html>


