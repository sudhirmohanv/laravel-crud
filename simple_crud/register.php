<?php
require __DIR__.'/dbconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit']) and !empty($_POST)){
        $name = $_POST['name'];
        // echo $name;
        $email = $_POST['email'];
        // echo $email;
        $mobile = $_POST['mobile'];
        // echo $mobile;
        $sql = "INSERT INTO crud(name,email,mobile) values('{$name}','{$email}','{$mobile}')";
        if(mysqli_query($conn,$sql)){
            echo 'Record Inserted';
            header("Location:register.php");
        }else{
            echo 'Insert Error'.mysqli_error($conn);
        }
    }
}

?>


<html>
<head></head>
<body>
<form action="register.php" method="post">
    Name :</br> 
    <input type="text" name="name"><br/>
    Email :</br>
     <input type="email" name="email"><br/>
    Mobile no:</br>
     <input type="number" name="mobile">
    <br/>
    <input type="submit" value="Register" name="submit"/>
</form>
<hr/>
<?php require_once __DIR__.'/show.php'; ?>
</body>
</html>