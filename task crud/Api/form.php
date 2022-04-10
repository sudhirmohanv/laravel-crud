<?php
if(isset($_POST['submit'])){


include 'dbconnect.php';

//file uploading
$files_arr = $_FILES['img'];
  
  $name = $files_arr['name'];
  $type = $files_arr['type'];
  $error = $files_arr['error'];
  $tmp_path = $files_arr['tmp_name'];
  $size = $files_arr['size'];

  //$skills = $_POST['php']." ".$_POST['mysql']." ".$_POST['laravel']." ".$_POST['nodejs'];
   
  $gender = $_POST['gender'];
  $role = $_POST['role'];
  $desc = $_POST['desc'];
  $skills = $_POST['language'];
    $chk = "";
    foreach($skills as $data){
        $chk .= $data." ";
    }
    
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
if($pass == $cpass){
if(move_uploaded_file($tmp_path,"uploads/".$name)){
$sql = "INSERT into task1(skills,gender,role,description,img,email,pass) 
values('$chk','$gender','$role','$desc','$name','$email','$pass')";

if(mysqli_query($conn,$sql)){
    header("Location: form.php");
}
}
}
else{
    echo "<h1 style='color:red;'>Password does not match</h1>";
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #demo{
            min-height:500;
            width:100%;
        }
        .box{
            min-height:500;
            width:40%;
            float:left;
            margin-left:60px;
        }
        .d{
            min-height:500;
            width:50%;
            float:left;
            margin-left:20px;
        }
    </style>
</head>

<body>
    <div id="demo">
     <div class="box">
      <form action="form.php" method="POST" enctype="multipart/form-data">
          Check Your Skills: <br>
          PHP  <input type="checkbox" name="language[]" value="php">
          MySQL  <input type="checkbox" name="language[]" value="mysql"><br>
          Laravel  <input type="checkbox" name="language[]" value="laravel">
          NodeJs  <input type="checkbox" name="language[]" value="nodejs"><br><br>
          <select name="role" id="">
              <option value="">--Select category--</option>
              <option value="Admin" >Admin</option>
              <option value="user">User</option>
          </select><br><br>
        Upload your File: <br>
        <input type="file" name='img' required><br>
        Gender: <br>
       Male: <input type="radio" value="male" name="gender" >
        Female<input type="radio" value="female" name="gender" ><br><br>
        <input type="text" id="country" name="country" value="Norway" readonly><br><br>
        Email: <br>
        <input type="email" name="email" required><br>
        password <br>
        <input type="password" name="pass" id="" required><br>
        confirm password <br>
        <input type="password" name="cpass" id="" required><br><br>
        DESC <br>
        <textarea name="desc" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="submit" >
      </form>
     
     </div>
     

<div class="d">
<h1>Show Record</h1>

<table border=1>

<tr>
<th>#</th>
<th>SKILLS</th>
<th>Role</th>
<th>Gender</th>
<th>Email</th>
<th>Image</th>
<th>Decription</th>

</tr>
<?php
   include 'dbconnect.php';
    
   $sql = "Select * From task1";
    
   $query = mysqli_query($conn,$sql);
   if( mysqli_num_rows($query)>0){
       while($row = mysqli_fetch_assoc($query)){

?>
<tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['skills'];?></td>
    <td><?php echo $row['role'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><img src="uploads/<?php echo $row['img']; ?> " alt="" height="60px" width="40px"></td>
    <td><?php echo $row['description'];?></td>
    
   
    
</tr>

<?php
       }
   }
?>

</table>





</div>
</div>

</body>
</html> 