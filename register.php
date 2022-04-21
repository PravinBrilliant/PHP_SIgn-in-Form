<?php $db=mysqli_connect("localhost","root","","sign");

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$pass=$_POST['rpassword'];
	$cpass=$_POST['rcpassword'];
		$dup=mysqli_query($db,"Select * from user where email='$email'");

	if(mysqli_num_rows($dup)>0)
	{
		echo '<script>alert("Email already registered")</script>';
	}else{
		$dup=mysqli_query($db,"Select * from user where mobile='$mobile'");

	if(mysqli_num_rows($dup)>0)
	{
		echo '<script>alert("Phone no already registered")</script>';
	}else{
	
	if ($_POST['rpassword'] !== $_POST['rcpassword'])
	 {
   echo '<script>alert("Password is does not match");window.location.href="register.php"</script>';  
}else{


	
	$insert="Insert into user values(null,'$name','$email','$mobile','$pass','$cpass')";
	if(mysqli_query($db,$insert))
	{
		echo'<script>alert("Registered Succesfully");window.location.href="login.php"</script>';
	}
	else{
		echo'<script>alert("Registered Failed")</script>';
	}}
}}}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- 	<script>
        function validate(){

            var a = document.getElementById("rpassword").value;
            var b = document.getElementById("rcpassword").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script> -->
</head>
<body style="background-color: lightgoldenrodyellow;">
	<center><form method="post" style="width:400px">
		<h2 style="margin-top: 30px; font-weight: bolder; text-decoration: underline;">Registration form</h2><br><br>
		<label style="font-weight: Bold; color: red; padding-right: 5px; ">Name :
			<input style="border-radius: 10px;" type="text" name="name" required></label><br><br>
			<label style="font-weight: Bold; color: red; padding-right: 35px ">Mobile no :
				<input style="border-radius: 10px;" type="tel" pattern="[6789][0-9]{9}"  name="mobile"></label><br><br>
				<label style="font-weight: Bold; color: red; ">E-mail :
					<input style="border-radius: 10px; padding-right: 10px" type="email" name="email" required></label><br><br>
				<label style="font-weight: Bold; color: red; padding-right: 25px">Password :
				<input style="border-radius: 10px; " type="Password" name="rpassword" required></label><br><br>
				<label style="font-weight: Bold; color: red;padding-right: 45px ">Confirm Password :
				<input style="border-radius: 10px;" type="Password" name="rcpassword" required></label><br><br>
				<input type="submit" name="submit" value="Submit" class="btn btn-secondary">	


	</form></center>

</body>
</html>
