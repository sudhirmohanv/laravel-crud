<?php
$conn = mysqli_connect('localhost','root','','practice');

  
  $name = $_POST['name'];  
  $email = $_POST['email']; 
  $mobile = $_POST['mobile']; 

 $query = "INSERT into api(name,email,mobile) VALUES('$name','$email','$mobile')";

$result = mysqli_query($conn,$query);

if($result==1){
	$response = array("status"=>"1","message"=>"data inserted succesfully");
} else{
	$response = array("status"=>"0","message"=>" data not inserted succesfully");
}

echo json_encode($response);

?>