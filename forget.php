<?php $db=mysqli_connect("localhost","root","","sign");
session_start();
 if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
			$_SESSION["email"]=$email;

	if(!isset($_SESSION['email']))
{
	header("location:login.php?mes=<p class='error'>Please login</p>");
}

	$dup=mysqli_query($db,"Select * from user where email='".$email."' AND mobile='".$mobile."'");
	if(mysqli_num_rows($dup)>0)
	{
			

		echo '<script>window.location.href="fpassword.php";</script>';
}else{

	echo '<script>alert("Registered email and mobile number is not matching");window.location.href="forget.php";</script>';
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password</title>
</head>
<body><center><form method="post">
	<label style="font-weight: Bold; ">Enter your Registered E-mail:<br>
	<input type="email" name="email" required></label><br><br>
	<label style="font-weight: Bold; ">Enter your Registerd Mobile Number:<br>
	<input type="tel" name="mobile" pattern="[6789][0-9]{9}" required></label><br><br>
	<input type="submit" name="submit"></form></center>
</body>
</html>