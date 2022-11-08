<?php 
session_start();

	include("connection.php");
	include("functions.php");


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
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>USIU E-Soma Register</h2>
                <p>Enter Your Username and Password.</p>
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
			</div>
		</div>
</div>
</body>
</html>