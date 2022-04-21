<?php  $db=mysqli_connect("localhost","root","","sign");
session_start();
if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$cpass=$_POST['pass'];
	$dup=mysqli_query($db,"Select * from user where email='".$email."' AND pass='".$cpass."'limit 1");

	if(mysqli_num_rows($dup)>0)
	{
		$_SESSION["email"]=$email;
		echo '<script>alert("Loggin succesfully");window.location.href="welcome.php";</script>';
	}else{
		echo '<script>alert("Loggin failed");window.location.href="login.php ";</script>';}
}
   ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body style="background-color: lightgoldenrodyellow;">
	<center>
		
		<form method="post">
			<h2 style="margin-top: 35px; text-decoration: underline; font-weight: bold;">Login Form</h2><br><br>
			<label style="font-weight: Bold; color: blue; ">Email :<br>
				<input type="text" name="email" style="border-radius: 10px;" required></label><br><br>
				<label style="font-weight: Bold; ">Password :<br>
				<input type="password" name="pass" required style="border-radius: 10px;"></label><br><br>
		<input type="submit" name="submit" value="submit" class="btn btn-primary"><br>
		<a href="register.php" style="font-weight:bolder; align-content: left;">New registration?</a><br>
		<a href="forget.php" style="font-weight:bolder; align-content: left;">Forgot Password?</a>
		</form>

	</center>

</body>
</html>
