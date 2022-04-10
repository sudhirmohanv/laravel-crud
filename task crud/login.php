<?php
include __DIR__.'/dbconnect.php';
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$unique=mysqli_query($conn,"select*from cd where email='$email'");
	if(mysqli_num_rows($unique)>0)
	{
		echo "Email id already";
	}
	else
	{
		mysqli_query($conn,"insert into cd(email,password) values('$email',$password)");
		header('location:form1.php');
		die();
	}
}
?>
<html>
<head>
</head>
<body>
<form method="post" action="login.php">
Email: </br>
<input type="email" name="email"/></br></br>
Password: </br>
<input type="password" name="password"/></br></br>
<input type="submit" name="submit"/>
</form>
</body>
</html>