<?php

$conn = mysqli_connect('localhost','root','','simple_crud');
 
$id = $_GET['id'];
 
 $sql = "DELETE from author where id = '$id'";
 
 $result = mysqli_query($conn,$sql);
 
 if($result==1){
	 $response = array("status"=>"1","message"=>"Data Deleted successfully");
 }else{
	$response = array("status"=>"0","message"=>"Data Not deleted successfully");	 
 }

 echo json_encode($response);

 
?>