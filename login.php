<?php 

session_start();

	include("connection.php");
	include("functions.php");
	$error = false;


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			$error = true; 
		}else
		{
			$error = true;
		}
	}
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
	<title>USIU E-Soma</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
	  <link href="css/styles.css" rel="stylesheet" />
    <style>
      .show-btn, .containerz{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0,0,0,0.5);
      }
      
      input[type="checkbox"]{
        display: none;
      }
      .containerz{
        position: fixed;
        display: none;
        width: 410px;
        padding: 30px;
        box-shadow: black;
      }
      #show:checked ~ .containerz{
        display: block;
      }
      .containerz .close-btn{
        position: fixed;
        right: 20px;
        top: 15px;
        font-size: 18px;
        cursor: pointer;
      }
      .containerz .close-btn:hover{
        color: #3498db;
      }
      .containerz{
      display: none;
      background: #fff;
      width: 410px;
      padding: 30px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    .containerz .text{
      font-size: 35px;
      font-weight: 600;
      text-align: center;
    }
    .containerz form{
      margin-top: -20px;
    }
    .containerz form .data{
      height: 45px;
      width: 100%;
      margin: 40px 0;
    }
    #overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 2;
    cursor: pointer;
    }  
    </style>
	
</head>
<body>
<!-- Header Start--> 
    <!-- Navigation -->
	<form method="post">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
				<div class="container px-4">
                <a class="navbar-brand" href="index.php">E-SOMA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive"> 
                    <ul class="navbar-nav ms-auto" >
					              <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item"><label class = "nav-link" align="right" for="username">Username</label> </li>
                        <li class="nav-item"><input id="text" type="text" name="user_name" class="form-control"><br><br></li>
                        <li class="nav-item"><label class = "nav-link" for="password">Password</label></li>
                        <li class="nav-item"><input id="text" type="password" name="password" class="form-control">  <br></li>
                        <li class="nav-item">&nbsp <input id="button" type="submit" value="Login" class="btn btn-primary"></li>
                        <li class="nav-item"><a id="#log" class="nav-link" href="signup.php"> &nbsp Signup</a></li>						
                    </ul>
                </div>
            </div>
		</nav>
	</form>
	<?php if($error){ ?>
		<script> alert ("Incorrect Username or Password! ")</script>
	<?php } ?>
	<!-- Navigation End -->
	<header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">USIU E-soma</h1>
                <p class="lead">Get access to Learning materials from past years and use them to prepare for your examinations or to do the research.
					<h3>Why choose us?</h3>					
						Diverse catalog of courses from all schools in USIU <br>
						Well structured evaluation to help you revise for examinations <br>
						Materials easily available for research <br>
						Everywhere Learning ??? not limited by place or time <br>
						Self paced Assessments. <br>
				</p>
            <a class="btn btn-lg btn-light" href="#blog">View Courses</a>
        </div>
    </header>
    <!-- Header end--> 
         
    <!--Courses -->
    <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h1 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Schools Available </h1>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="">
              <img src="images/sst1.jpg" class="img-fluid" alt="">
              <div class="blog-txt-info">
                <h4 class="mt-2">School of Science</h4>
                <div class="news-date my-3">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                <div>                
                  <label for="show" class="btn btn-primary">View All</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6  blog-grid-flex">
            <div class="">
              <img src="images/csob1.jpg" class="img-fluid" alt="">
              <div class="blog-txt-info">
                <h4 class="mt-2">School of Busines</h4>
                <div class="news-date my-3">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                <div>
                  <label for="show" class="btn btn-primary">View All</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="">
              <img src="images/shss1.jpg" class="img-fluid" alt="">
              <div class="blog-txt-info">
                <h4 class="mt-2">School of Humanities</h4>
                <div class="news-date my-3">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                <div>
                  <label for="show" class="btn btn-primary">View All</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5 mt-md-4 mt-sm-3 mt-3">
            <div class="">
              <img src="images/sccc1.jpg" class="img-fluid" alt="">
              <div class="blog-txt-info">
                <h4 class="mt-2">School of Communinication</h4>
                <div class="news-date my-3">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                <div>
                  <label for="show" class="btn btn-primary">View All</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5 mt-md-4 mt-sm-3 mt-3" >
            <div class="">
              <img src="images/sphs.jpg" class="img-fluid" alt="">
              <div class="blog-txt-info">
                <h4 class="mt-2">School of Pharmacy</h4>
                <div class="news-date my-3">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                <div>
                  <label for="show" class="btn btn-primary">View All</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5 mt-md-4 mt-sm-3 mt-3">
            <div class="">
              <img src="images/graduates.jpg" class="img-fluid" alt="">
              <div class="blog-txt-info">
                <h4 class="mt-2">School of Graduate Studies</h4>
                <div class="news-date my-3">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                <div>
                  <label for="show" class="btn btn-primary" onclick="on()">View All</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--//Courses -->
    <div class="center">
         <input type="checkbox" id="show">
         <div class="containerz" style="background-color:gray">
            <label for="show" class="close-btn fas fa-times" title="close">X</label>
            <div class="text">
               Login
            </div>
            <form method="post">
               <div class="data">
                  <label>Username</label>
                  <input id="text" type="text" name="user_name" class="form-control">
               </div>
               <div class="data">
                  <label>Password</label>
                  <input id="text" type="password" name="password" class="form-control">
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <input id="button" type="submit" value="Login" class="btn btn-primary">
               </div>
               <div class="signup-link">
                  Not a member? <a href="signup.php">Signup now</a>
               </div>
            </form>
         </div>
      </div>
<!-- copyright -->
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
  <section class="copyright-usiu-e-soma py-xl-4 py-3" align="center"style="background-color:black">
		<div class="container" >
			<p style="color:white;">?? 2022 USIU E-Soma. All Rights Reserved</p>
		</div>
	</section>
	<!-- //copyright -->
	
</body>
</html>