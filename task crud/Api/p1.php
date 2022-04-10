<?php

$conn = mysqli_connect('localhost','root','','simple_crud');
 
 $title = $_POST['title'];
 $Description = $_POST['Description'];
 
 $sql = "Insert into author(title,description) values('$title','$Description')";
 
 $result = mysqli_query($conn,$sql);
 
 if($result==1){
	 $response = array("status"=>"1","message"=>"Data Inserted successfully");
 }else{
	$response = array("status"=>"0","message"=>"Data Not Inserted successfully");	 
 }

 echo json_encode($response);

 
?>