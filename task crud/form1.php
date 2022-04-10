
<?php

include __DIR__.'/dbconnect.php';
if(isset($_POST['submit'])){
	$gen = $_POST['gen'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$pass = $_POST['pass'];
	//$file = $_POST['file'];
	mysqli_query($conn,"insert into emp(gen,email,password,pass) values('$gen','$email','$password','$pass')");
	header('location:table.php');
	die();
}



?>

<html>
<head>
</head>
<body>
<form method="post" action="form1.php">
User Id : <br/>
<input type="text" value=ST-2022 readonly="ST-2022"/></br></br>
Date : </br>
<input type="date"/></br></br>
Gender : </br>
<input type="radio" name="gen" required/>Male <input type="radio" name="gen"/>Female</br></br>
File :</br>
<input type="file" name="file"/></br></br>

Email :</br>
<input type="email" name="email" required/></br></br>
Password :</br>
<input type="password" name="password" required/></br></br>
Confirm password :</br>
<input type="pass" name="pass" required/></br></br>
<input type="checkbox" value="check" required/>Please check box and go to next process</br></br>
Message : </br>
<textarea></textarea></br></br>
<input type="submit" name="submit"/>
</form>
</body>
</html>
