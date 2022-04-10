<?php




$conn = mysqli_connect('localhost','root','','simple_crud');
 $sql = "select * from author where id='$id'";
 $result = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}


?>