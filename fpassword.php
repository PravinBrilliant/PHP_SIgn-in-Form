<?php $db=mysqli_connect("localhost","root","","sign");
session_start();
 if (isset($_POST['submit'])) {
 	$pass=$_POST['pass'];
 	$cpass=$_POST['cpass'];
 		if(!isset($_SESSION['email']))
{
	header("location:login.php?mes=<p class='error'>Please login</p>");
}

 	if ($_POST['pass'] !== $_POST['cpass'])
	 {
   echo '<script>alert("Password is does not match");window.location.href="fpassword.php"</script>';  
}else{
// code...
  $qry=mysqli_query($db,"update * from user where pass=");
    if (mysqli_query($db,$qry)) {
    	echo '<script>alert("Password changed Succesfully");window.location.href="login.php";</script>';
    	// code...
    }else{
    	echo '<script>alert("Error");window.location.href="fpassword.php";</script>';
    }

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
<label style="font-weight: Bold; ">Enter Your new password:<br>
<input type="password" name="pass" required>
</label><br><br>
<label style="font-weight: Bold; ">Confirm Your new Password:<br>
<input type="password" name="cpass" required></label><br><br>
<input type="submit" name="submit"></form></center>
</body>
</html>