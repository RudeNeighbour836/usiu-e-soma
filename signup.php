<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$error = false;

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

		if(!empty($user_name) && !empty($password) && !empty($confirm_password) && !is_numeric($user_name) && ($password == $confirm_password))
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id, user_name, email, password) values ('$user_id','$user_name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			$error = true;
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
	<link href="css/styles.css" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">E-SOMA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive"> 
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<br><br><br><br>
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">USIU E-Soma Register</h2>
				<form method="post">			
					<label for="username">Username</label>
					<input id="text" type="text" name="user_name" class="form-control">
					<label for="email">Email</label>
                    <input type="email" name="email" id="text" class="form-control" required>
					<label for="password">Password</label>
					<input id="text" type="password" name="password" class="form-control">
					<label for="confirm-password">Confirm Password</label>
					<br>
					<div class="">
						<input type="password" name="confirm_password" id="" class="form-control">
					</div>
					<br>
					<input id="button" type="submit" value="Register" class="btn btn-primary">

					<a href="login.php">Click to Login</a><br><br>
				</form>
				<?php if($error){ ?>
					<script> alert ("Please enter some valid information!")</script>
				<?php } ?>
			</div>
		</div>
</div>
</body>
</html>