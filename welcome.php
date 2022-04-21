<?php 
session_start();

if(!isset($_SESSION['email']))
{
	header("location:login.php?mes=<p class='error'>Please login</p>");
}
?>
<!-- php 
  echo $_SESSION["email"]; 
  
?> -->
<!DOCTYPE html>
<html>
<head>
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
</head>
<body>
<label>your email is : <?php 
  echo $_SESSION["email"]; 
  
?></label><br><br>
<a href="logout.php">Logout</a>
</body>
</html>