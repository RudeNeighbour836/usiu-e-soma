<?php 

session_start();

	include("connection.php");
	include("functions.php");
	$error = false;


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
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
	<style>
		
	</style>
	<link href="css/styles.css" rel="stylesheet" />
	
</head>
<body>

	<form method="post">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            
				<div class="container px-4">
                <a class="navbar-brand" href="#page-top">E-SOMA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive"> 
                    <ul class="navbar-nav ms-auto" >
					<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
							
                        <li class="nav-item"><label class = "nav-link" align="right" for="username">Username</label> </li>
                        <li class="nav-item"><input id="text" type="text" name="user_name" class="form-control"><br><br></li>
                        <li class="nav-item"><label class = "nav-link" for="password">Password</label></li>
						<li class="nav-item"><input id="text" type="password" name="password" class="form-control">  <br></li>
						<li class="nav-item">&nbsp <input id="button" type="submit" value="Login" class="btn btn-primary"></li>
						<li class="nav-item"><a class="nav-link" href="signup.php"> &nbsp Signup</a></li>						
                    </ul>
                </div>
            </div>
		</nav>
	</form>
	<?php if($error){ ?>
		<script> alert ("Incorrect Username or Password! ")</script>
	<?php } ?>
	<!-- Header-->
	<header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">USIU E-soma</h1>
                <p class="lead">Get access to Learning materials from past years and use them to prepare for your examinations or to do the research.
					<h3>Why choose us?</h3>
					<ul>
						Diverse catalog of courses from all schools in USIU <br>
						Well structured evaluation to help you revise for examinations <br>
						Materials easily available for research <br>
						Everywhere Learning – not limited by place or time <br>
						Self paced Assessments. <br>
					</ul>
				</p>
                <a class="btn btn-lg btn-light" href="#sst">View Courses</a>
            </div>
        </header>
        <section id="sst">
            <div class="container px-4">
                <div class="row gx-4 justify-content-left">
                    <div class="col-lg-8">
                        <h2>School of Science And Technology</h2>
                        <p class="lead">PART A</p>
						<img src="images/sst1.jpg" alt="School of Science" width="500" height="300">
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light" id="shss">
            <div class="container px-4">
                <div class="row gx-4 justify-content-left">
                    <div class="col-lg-8">
                        <h2>School of Humanities And Social Sciences</h2>
                        <p class="lead">PART B</p>
						<img src="images/shss.jpg" alt="School of Humanities" width="500" height="300">
                    </div>
                </div>
            </div>
        </section>
        <section id="csob">
            <div class="container px-4">
                <div class="row gx-4 justify-content-left">
                    <div class="col-lg-8">
                        <h2>School of Business</h2>
                        <p class="lead">PART C</p>
						<img src="images/csob.jpg" alt="School of Business" width="500" height="300">
                    </div>
                </div>
            </div>
        </section>
        <section id="sphss">
            <div class="container px-4">
                <div class="row gx-4 justify-content-left">
                    <div class="col-lg-8">
                        <h2>School of Pharmacy & Health Sciences</h2>
                        <p class="lead">PART A</p>
						<img src="images/sphs.jpg" alt="School of Pharmacy" width="500" height="300">
                        <p>PART A</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light" id="sccc">
            <div class="container px-4">
                <div class="row gx-4 justify-content-left">
                    <div class="col-lg-8">
                        <h2>School of Communication, Cinematic and Creative Arts.</h2>
                        <p class="lead">PART B</p>
						<img src="images/sccc.jpg" alt="School of Communication" width="500" height="300">
                    </div>
                </div>
            </div>
        </section>        
        <section id="graduates">
            <div class="container px-4">
                <div class="row gx-4 justify-content-left">
                    <div class="col-lg-8">
                        <h2>School of Graduate Studies, Research & Extension.</h2>
                        <p class="lead">PART C</p>
						<img src="images/graduates.jpg" alt="School of Graduate Studies" width="500" height="300">
                    </div>
                </div>
            </div>
        </section>        
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy;E-SOMA 2022</p></div>
        </footer>        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>        
        <script src="js/scripts.js"></script>
	
</body>
</html>